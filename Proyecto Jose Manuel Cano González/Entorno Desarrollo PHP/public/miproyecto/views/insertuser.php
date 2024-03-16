<?php
include_once ("productoDAO.php");

$productoDAO = new ProductoDAO();
$productos = $productoDAO->getAllProducts();

if ($productos === -1) {
    echo "Error al obtener los productos.";
} else {
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <!-- Agrega más columnas según sea necesario -->
        </tr>
        <?php foreach ($productos as $producto) { ?>
            <tr>
                <td><?php echo $producto['id']; ?></td>
                <td><?php echo $producto['nombre']; ?></td>
                <td><?php echo $producto['precio']; ?></td>
                <!-- Agrega más columnas según sea necesario -->
            </tr>
        <?php } ?>
    </table>
    <?php
}
?>


