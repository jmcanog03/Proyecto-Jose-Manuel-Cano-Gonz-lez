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
                $stmt=$this->conBD->prepare("Select * From Users");
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
        $stmt=$this ->conBD->prepare("Insert Into Usuarios (email,contraseña) values (:email, :contraseña)");
        $stmt->bindParam(':contraseña', $contraseña);
        $stmt->bindParam(':email', $mailUser);
        $stmt->execute();
    }
}
?>
