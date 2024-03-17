<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        body {
            background: linear-gradient(to right, #FF8C00, #FFD700);
            color: #333;
        }

        .navbar {
            background-color: #000;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: #fff;
        }

        .fa-custom {
            font-size: 30px;
            margin-left: 29px;
            /* Tamaño personalizado */
        }
    </style>
</head>

<body>
    <header>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Carrito de Compras</a>
            </div>
        </nav>
    </header>

    <main class="container">
        <!-- Sección del carrito -->
        <section id="carrito">
            <h2 class="mt-5 mb-4">Productos en el Carrito</h2>
            <div class="row">
                <?php
                // Inicializar el precio total
                $precioTotal = 0;

                // Verificar si la sesión y $_SESSION['taxi'] están definidos antes de iterar sobre ellos
                if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
                    foreach ($_SESSION['carrito'] as $idProducto => $infoProducto) {
                        $cantidad = $infoProducto['cantidad'];
                        $producto = $infoProducto['producto'];

                        // Calcular el subtotal del producto (precio * cantidad)
                        $subtotal = $producto['precio'] * $cantidad;

                        // Agregar el subtotal al precio total
                        $precioTotal += $subtotal;

                        // Mostrar la información del producto en la tarjeta del carrito
                        echo '<div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"';
                        echo ' style="padding-top: 15px; padding-bottom: 15px; padding-right: 15px; padding-left: 15px;">';
                        echo '<div class="card" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">';
                        echo '<img class="card-img-top" src="/miproyecto/img/' . $producto['nombre'] . '.jpg" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">';
                        echo '<div class="card-body" style="padding: 20px;">';
                        echo '<h3 class="card-title" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">' . $producto['nombre'] . '</h3>';
                        echo '<h5 class="card-subtitle" style="font-family: Antic, sans-serif;">Precio: ' . $producto['precio'] . '€</h5>';
                        echo '<p class="card-text" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">Cantidad: ' . $cantidad . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay productos en el carrito</p>';
                }
                ?>
            </div>
            <!-- Mostrar el precio total -->
            <div class="row">
                <div class="col-12">
                    <h4>Precio Total: <?php echo $precioTotal; ?>€</h4>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>© <?php echo date("Y"); ?> Tienda Deportiva DeporteVest</span>
            <a href="listadoproduct.php" class="btn btn-primary">Ir a comprar</a>
        </div>
    </footer>

    <!-- Bootstrap y jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
