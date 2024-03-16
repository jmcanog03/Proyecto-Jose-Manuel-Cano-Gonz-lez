<?php
include_once ('models/productoDAO.php');
include_once('views/view.php');
include_once('utils/utils.php');

class ProductoController
{
    function getAllproduct()
    {
        $productDao= new ProductoDAO();

        // recuperar datos

        $arrayProductos=$productDao->getAllProducts();
        
        View::show ('productview', $arrayProductos);
    }


    function addProduct (){
        $erroresForm=array();
        if ( isset ($_POST['enviarproduct'])){

            // Validar el nombre
            if (empty($_POST['nombre']))
    
                $erroresForm['nombre']="El nombre no puede estar vacío";
    
            if (empty($_POST['precio'] ))
    
                $erroresForm['precio']="Debes introducir un precio para ingresar en la base de datos";
    
            if (empty($_POST['descripcion'] ))
    
                $erroresForm['descripcion']="Debes introducir una descripción del producto";

            if (empty($_POST['stock'] ))
    
                $erroresForm['stock']="Debes introducir la cantidad del producto";

            if (count($erroresForm)==0){
                $nombre=filtrado($_POST['nombre']);
                $descripcion=filtrado($_POST['descripcion']);
                $precio=filtrado($_POST['precio']);
                $stock=filtrado($_POST['stock']);
                $prodcutDao= new ProductoDAO();
                $prodcutDao->addProduct($nombre,$descripcion,$precio,$stock);
                $arrayproduct=$prodcutDao->getAllProducts();
                //$arrayUser=$userDAO->getAllUsers();
                View::show('productview', $arrayproduct);
                
                // si hay errores vuelve a la página del formulario.
            } else {
                View::show('paginaadmin', $erroresForm);
            }
            
                        

            
            
        
           
           
    }

    }
}

?>