<?php
include ('Database/Database.php');

// Crear Clase dao que ataca la tabla user
class UserDao{
    private $conBD;

    public function __construct() {
     $this -> conBD=Database::connect();

    }

    public function getAllUsers(){
            try{
                $stmt=$this->conBD->prepare("Select * From Usuarios");
                $stmt->execute();
                return $stmt->fetchAll();
            }catch (PDOException $e){
                    return -1; // Error al realizar la consulta a B
            }
    }

    public function getUserMas30(){

    }

    public function getMailByIduser($idUser){

        try{
        $stmt=$this->conBD->prepare("Select email from Usuarios where id=:user");
        $stmt->bindValue(':user',$idUser);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->email;

        }catch (PDOException $e){
        return -1;  //Error en el bind de parametros
        }
    }

      // Metodo que añade un usuario a la base de datos
    public function adduser ($nombre, $contraseña, $rol) {

      try{
        $stmt=$this ->conBD->prepare("Insert Into Usuarios (nombre,contrasena,rol) values (:nombre, :contrasena, :rol)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':contrasena', $contraseña);
        $stmt->bindParam(':rol', $rol);
        $stmt->execute();
      }catch  (PDOException $e) {
        return 0;
      }
      
    }

    function validarInicioSesion($nombre, $password, $rol) {

      try {
           // Consultar la base de datos para verificar el usuario y la contraseña
        $stmt = $this->conBD->prepare("SELECT * FROM Usuarios WHERE nombre = :nombre AND contrasena = :contrasena AND rol = :rol AND nombre IS NOT NULL AND contrasena IS NOT NULL AND rol IS NOT NULL");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':contrasena', $password);
        $stmt->bindParam(':rol', $rol);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
      } catch  (PDOException $e) {
        return -1;
      }
      
       // Verificar si se encontraron resultados y si los campos no están vacíos
        if ($usuario) {
          // Redireccionar a la página index
          if ($rol === 'normal') {
            //echo "Redirigiendo a index.php"; // Depuración
            header("Location: index.php");
            exit();
        } else {
            //echo "Redirigiendo a paginaadmin.php"; // Depuración
            header("Location: /miproyecto/views/paginaadmin.php");
            exit();
        }
        } else {
          // Devolver falso si el usuario no existe o los campos están vacíos
          return false;
        }
      }
      

}
?>
