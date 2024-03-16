<?php
include_once ('controllers/userController.php');
include_once ('controllers/productoController.php');
if (isset ($_REQUEST['action']) && isset ($_REQUEST['controller'])) {
    session_start();
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['controller'];

    //Instanciación del controlador e invocación del método
    $controller = new $cont();
    $controller->$act();

} else {
    session_start();
    $productDAO=new ProductoDAO();
    $arrayProductos=$productDAO->getAllProducts();
    view::show('primos', $arrayProductos);
}







?>