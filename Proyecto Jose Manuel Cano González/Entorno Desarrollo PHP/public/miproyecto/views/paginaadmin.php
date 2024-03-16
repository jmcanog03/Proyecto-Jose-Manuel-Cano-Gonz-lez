<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - Tienda de Camisetas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        /* Estilos CSS para el panel de administrador */
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

        .wrapper {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            padding: 20px;
            height: 100vh;
            color: #fff;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
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
            font-size: 40px;
            /* Tamaño personalizado */
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Panel de Administrador</a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="wrapper">
        <!-- Barra lateral -->
        <div class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gestión de Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usersview.php" target=blank>Gestión de Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configuración</a>
                </li>
            </ul>
        </div>

        <!-- Contenido de la página -->
        <div class="content">
            <h1 class="mt-4 mb-4">Formulario de Alta de Producto</h1>
            <form method="post" action='/miproyecto/index.php?controller=ProductoController&action=addProduct'>
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                    <?php
                    if (isset($data['nombre']))
                        echo '<p>' . $data['nombre'] . '</p>';
                    ?>
                </div>
                <div class="form-group">
                    <label for="precio">Precio del Producto</label>
                    <input type="text" class="form-control" id="precio" name="precio">
                    <?php
                    if (isset($data['precio']))
                        echo '<p>' . $data['precio'] . '</p>';
                    ?>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción del Producto</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    <?php
                    if (isset($data['descripcion']))
                        echo '<p>' . $data['descripcion'] . '</p>';
                    ?>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad del Producto</label>
                    <textarea class="form-control" id="stock" name="stock" rows="1"></textarea>
                    <?php
                    if (isset($data['stock']))
                        echo '<p>' . $data['stock'] . '</p>';
                    ?>
                </div>

                <div class="form-group">
                    <label for="descripcion">Introduce la categoria</label>
                    <textarea class="form-control" id="categoria" name="categoria" rows="3"></textarea>
                    <?php
                    if (isset($data['categoria']))
                        echo '<p>' . $data['categoria'] . '</p>';
                    ?>

                
                <button type="submit" name=enviarproduct class="btn btn-primary">Guardar Producto</button>
            </form>

            <!-- Bootstrap y jQuery JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


            <?php
            //print_r($data);
            ?>

    <!-- <div class="cart-icon">
                <a href=""><i class="fas fa-shopping-cart fa-custom"></i></a>

            </div>
 -->
            

</body>

</html>