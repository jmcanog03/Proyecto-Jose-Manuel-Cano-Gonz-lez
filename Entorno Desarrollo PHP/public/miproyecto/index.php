<?php
/*
include('models/UserDAO.php');

$userDAO=new UserDAO();

$users=$userDAO->getAllUsers();

if ($users==-1)
    echo "error en la base de datos";
else 
    echo "Mail del usuario cuyo id es 56 ".$userDAO->getMailByIduser(56);

    
*/


//print_r($users);


/*
include_once('controllers/userController.php');

$usercontr=new UserController();

$usercontr->getAllUser();
*/

include_once ('controllers/userController.php');
include_once ('controllers/productoController.php');
include_once ('controllers/carritoController.php');
if (isset($_REQUEST['action']) && isset($_REQUEST['controller']) ){
    $act=$_REQUEST['action'];
    $cont=$_REQUEST['controller'];

    //Instanciación del controlador e invocación del método
    $controller=new $cont();
    $controller->$act();

}
else
    //Página de entrada
   /* echo '<div class="container mt-3">
    <h1>Implantación de Aplicaciones Web</h1>
    <div class="d-flex justify-content-center"><img src="assets/albarregas.png" width="200" height="100"></div> 
    <div class="d-flex justify-content-center"><p>Desarrollo de aplicaciones web con PHP utilizando la arquitectura Modelo Vista Controlador (MVC)</p></div>
    
  </div>';*/


 


   

?>