<?php
include_once ('models/UserDAO.php');
include_once('views/view.php');
include_once('utils/utils.php');

class UserController
{
    function getAllUser()
    {
        $userDao= new UserDao();

        // recuperar datos

        $arrayUsuarios=$userDao->getAllUsers();
        
        View::show ('views/landing-page.html', $arrayUsuarios);
    }


    function addUser (){
        $erroresForm=array();
        if ( isset ($_POST['registrar'])){
            // Validar el nombre
            
            if (empty($_POST['nombre']))
    
                $erroresForm['password']="El nombre no puede estar vacío";
    
    
            if (empty($_POST['email'] || filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)))
    
                $erroresForm['email']="Debes introducir un email";
    
           
                 if (count($erroresForm)==0){
                    $nombre=filtrado($_POST['nombre']);
                    $email=filtrado($_POST['email']);
                 
                   
            }
            
            $erroresForm=array();
            $userDAO=new UserDAO();

            $userDAO->addUser($nombre,$email);

            $arrayUser=$userDAO->getAllUsers();

            view::show('views/landing-page.html', $arrayUser);
            
        }else{
           view::show('views/primos.php', $erroresForm); 
    }

    }
}




?>