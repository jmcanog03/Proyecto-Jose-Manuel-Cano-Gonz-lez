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

    public function adduser ($contraseña,   $mailUser) {
        $stmt=$this ->conBD->prepare("Insert Into Usuarios (email,contrasena) values (:email, :contrasena)");
        $stmt->bindParam(':contrasena', $contraseña);
        $stmt->bindParam(':email', $mailUser);
        $stmt->execute();
    }

    function validarInicioSesion($nombre, $password) {

        // Consultar la base de datos para verificar el usuario y la contraseña
        $stmt = $this->conBD->prepare("SELECT * FROM Usuarios WHERE nombre = :nombre AND contrasena = :contrasena AND nombre IS NOT NULL AND contrasena IS NOT NULL");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':contrasena', $password);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
      
        // Verificar si se encontraron resultados y si los campos no están vacíos
        if ($usuario) {
          // Redireccionar a la página index
          header("Location: index.php");
          exit();
        } else {
          // Devolver falso si el usuario no existe o los campos están vacíos
          return false;
        }
      }
      

}
?>
