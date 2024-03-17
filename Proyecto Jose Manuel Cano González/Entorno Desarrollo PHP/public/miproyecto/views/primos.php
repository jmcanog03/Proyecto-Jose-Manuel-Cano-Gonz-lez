<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Camisetas</title>
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
        
        }
    </style>
</head>

<body>
    <header>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Tienda Deportiva DeporteVest</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#temporada">Camisetas de Temporada 23-24</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#retro">Camisetas Retro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chandal">Chándal</a>
                        </li>
                        <li>
                            <div class="cart-icon">
                                <a href="views/carritoview.php" target=blank><i class="fas fa-shopping-cart fa-custom"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <!-- Sección de Camisetas de Temporada -->
        <section id="temporada">
            <h2 class="mt-5 mb-4">Camisetas de Temporada 23-24</h2>
            <div class="row">
              <?php
foreach ($data as $producto) {
    if ($producto['categoria'] == 'camiseta') {
        echo '<div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"';
        echo ' style="padding-top: 15px; padding-bottom: 15px; padding-right: 15px; padding-left: 15px;">';
        echo '<div class="card" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">';
        echo '<img class="card-img-top" src="img/' . $producto['nombre'] . '.jpg" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">';
        echo '<div class="card-body" style="padding: 20px;">';
        echo '<h3 class="card-title" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">' . $producto['nombre'] . '</h3>';
        echo '<h5 class="card-subtitle" style="font-family: Antic, sans-serif;">' . $producto['precio'] . '€</h5>';
        echo '<p class="card-text" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">' . $producto['descripcion'] . '</p>';
        echo '<form action="index.php?controller=productoController&action=addTaxi&id='.$producto['id_producto'].'" method="post">';
        echo '<div class="form-group">';
        echo '<label for="cantidad" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">Introduce la cantidad:</label>';
        echo '<input type="number" class="form-control" id="cantidad" name="cantidad" min="1" value="1" required>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-outline-success btn-custom" data-bss-hover-animate="rubberBand">Montar</button>';
        echo '<a class="btn btn-outline-success btn-custom" href="index.php?controller=productoController&action=verDetallesProducto&id_Producto=' . $producto['id_producto'] . '" data-bss-hover-animate="rubberBand" style="font-weight: normal; font-family: Antic, sans-serif; margin-bottom: 10px;">Ver producto</a><br>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>

            </div>
        </section>

        <!-- Sección de Camisetas Retro -->
        <section id="retro">
            <h2 class="mt-5 mb-4">Camisetas Retro</h2>
            <div class="row">
                <?php
                foreach ($data as $producto) {
                    if ($producto['categoria'] == 'camisetaretro') {
                        echo '<div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"';
                        echo ' style="padding-top: 15px; padding-bottom: 15px; padding-right: 15px; padding-left: 15px;">';
                        echo '<div class="card" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">';
                        echo '<img class="card-img-top" src="img/' . $producto['nombre'] . '.jpg" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">';
                        echo '<div class="card-body" style="padding: 20px;">';
                        echo '<h3 class="card-title" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">' . $producto['nombre'] . '</h3>';
                        echo '<h5 class="card-subtitle" style="font-family: Antic, sans-serif;">' . $producto['precio'] . '€</h5>';
                        echo '<p class="card-text" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">' . $producto['descripcion'] . '</p>';
                        echo '<form action="index.php?controller=productoController&action=addTaxi&id='.$producto['id_producto'].'" method="post">';
                        echo '<div class="form-group">';
                        echo '<label for="cantidad" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">Introduce la cantidad:</label>';
                        echo '<input type="number" class="form-control" id="cantidad" name="cantidad" min="1" value="1" required>';
                        echo '</div>';
                        echo '<button type="submit" class="btn btn-outline-success btn-custom" data-bss-hover-animate="rubberBand">Montar</button>';
                        echo '<a class="btn btn-outline-success btn-custom" href="index.php?controller=productoController&action=verDetallesProducto&id_Producto=' . $producto['id_producto'] . '" data-bss-hover-animate="rubberBand" style="font-weight: normal; font-family: Antic, sans-serif; margin-bottom: 10px;">Ver producto</a><br>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </section>

        <!-- Sección de Chándal -->
        <section id="chandal">
            <h2 class="mt-5 mb-4">Chándales</h2>
            <div class="row">
                <?php
                foreach ($data as $producto) {
                    if ($producto['categoria'] == 'Chandal') {
                        echo '<div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"';
                        echo ' style="padding-top: 15px; padding-bottom: 15px; padding-right: 15px; padding-left: 15px;">';
                        echo '<div class="card" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">';
                        echo '<img class="card-img-top" src="img/' . $producto['nombre'] . '.jpg" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">';
                        echo '<div class="card-body" style="padding: 20px;">';
                        echo '<h3 class="card-title" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">' . $producto['nombre'] . '</h3>';
                        echo '<h5 class="card-subtitle" style="font-family: Antic, sans-serif;">' . $producto['precio'] . '€</h5>';
                        echo '<p class="card-text" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">' . $producto['descripcion'] . '</p>';
                        echo '<form action="index.php?controller=productoController&action=addTaxi&id='.$producto['id_producto'].'" method="post">';
                        echo '<div class="form-group">';
                        echo '<label for="cantidad" style="font-family: Antic, sans-serif; color: rgb(81, 87, 94);">Introduce la cantidad:</label>';
                        echo '<input type="number" class="form-control" id="cantidad" name="cantidad" min="1" value="1" required>';
                        echo '</div>';
                        echo '<button type="submit" class="btn btn-outline-success btn-custom" data-bss-hover-animate="rubberBand">Montar</button>';
                        echo '<a class="btn btn-outline-success btn-custom" href="index.php?controller=productoController&action=verDetallesProducto&id_Producto=' . $producto['id_producto'] . '" data-bss-hover-animate="rubberBand" style="font-weight: normal; font-family: Antic, sans-serif; margin-bottom: 10px;">Ver producto</a><br>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>© 2024 Tienda Deportiva DeporteVest</span>
        </div>
    </footer>

    <!-- Bootstrap y jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js
