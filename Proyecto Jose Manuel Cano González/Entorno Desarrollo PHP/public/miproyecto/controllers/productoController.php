<?php
include_once ('models/productoDAO.php');
include_once('views/view.php');
include_once('utils/utils.php');
include_once('models/UserDAO.php');

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

            if (empty($_POST['categoria'] ))
    
                $erroresForm['categoria']="Debes introducir una categoria";

            if (count($erroresForm)==0){
                $nombre=filtrado($_POST['nombre']);
                $descripcion=filtrado($_POST['descripcion']);
                $precio=filtrado($_POST['precio']);
                $stock=filtrado($_POST['stock']);
                $categoria=filtrado($_POST['categoria']);
                $prodcutDao= new ProductoDAO();
                $prodcutDao->addProduct($nombre,$descripcion,$precio,$stock,$categoria);
                $arrayproduct=$prodcutDao->getAllProducts();
                //$arrayUser=$userDAO->getAllUsers();
                View::show('productview', $arrayproduct);
                
                // si hay errores vuelve a la página del formulario.
            } else {
                View::show('paginaadmin', $erroresForm);
            }
            
                        

            
            
        
           
           
    }

    }

   
    
    
    function addCarrito() {
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = array();
        }
    
        // Verifica si se ha proporcionado una cantidad válida
        if (isset($_POST['cantidad']) && is_numeric($_POST['cantidad']) && $_POST['cantidad'] > 0) {
            $cantidad = $_POST['cantidad'];
        } else {
            // Si no se proporcionó una cantidad válida, utiliza 1 como valor predeterminado
            $cantidad = 1;
        }
    
        // Obtener los detalles del producto por su ID
        $productoDao = new ProductoDAO();
        $producto = $productoDao->getProductById($_REQUEST['id']); // Ajusta según sea necesario
    
        // Añadir el producto al carrito con la cantidad seleccionada y sus detalles
        $_SESSION['carrito'][$_REQUEST['id']] = array(
            'cantidad' => $cantidad,
            'producto' => $producto
        );
    
        // Redireccionar a la vista del carrito
        header("Location: index.php");
        exit(); // ¡Es importante terminar la ejecución del script después de la redirección!
    }
    
    public function verDetallesProducto() {
        if(isset($_GET['id_Producto'])) {
            $idProducto = $_GET['id_Producto'];
            
            // Obtener el producto por su ID
            $productoDAO = new ProductoDAO();
            $producto = $productoDAO->getProductById($idProducto);
            
            // Mostrar los detalles del producto
            View::show('detalleproduct', $producto);

        } else {
            // Si no se proporciona un ID de producto válido, redirigir a alguna otra página o mostrar un mensaje de error
            // Aquí asumo que mostrarás algún mensaje de error
            echo "Error: No se proporcionó un ID de producto válido.";
        }
    }
}
?>
