<?php

include_once('models/productoDAO.php');
include_once('views/view.php');

class CarritoController
{

  // Función para añadir un producto al carrito
  public function addProductToCart($productId, $quantity, $options = [])
  {
    // Iniciar la sesión si no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    // Obtener el carrito de la sesión o inicializar uno nuevo si no existe
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Obtener el producto de la base de datos
    $productoDAO = new ProductoDAO();
    $producto = $productoDAO->getProductById($productId);

    // Convertir la cantidad a entero
    $cantidad = (int) $_POST['cantidad'];

    // Obtener las opciones adicionales
    $talla = $_POST['talla'];
    $parche = $_POST['parche'];
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];

    // Verificar si el producto existe en el carrito
    if (isset($cart[$productId])) {
      // Si el producto ya está en el carrito, aumentar la cantidad
      $cart[$productId]['quantity'] += $quantity;
    } else {
      // Si el producto no está en el carrito, añadirlo
      $cart[$productId] = array(
        'product' => $producto,
        'quantity' => $quantity,
        'options' => array(
          'talla' => $talla,
          'parche' => $parche,
          'nombre' => $nombre,
          'numero' => $numero,
        ),
      );
    }

    // Actualizar el carrito en la sesión
    $_SESSION['cart'] = $cart;
  }

  // Función para mostrar el contenido del carrito
  public function mostrarCarrito()
  {
    // Iniciar la sesión si no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    // Obtener el carrito de la sesión
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Mostrar la vista del carrito
    View::show('carritoview.php', $cart);
  }
}

?>