<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
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

        .img-fluid{
            margin-top: 100px;
            margin-right: 500px;
        }

        h2{
            margin-top: 100px;
        }

        p{
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Mostrar la imagen del producto -->
                <img src="/miproyecto/img/<?php echo $data['nombre']; ?>.jpg" alt="<?php echo $data['nombre']; ?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- Mostrar la descripción y el precio del producto -->
                <h2><?php echo $data['nombre']; ?></h2>
                <p><?php echo $data['descripcion']; ?></p>
                <p>Precio: <?php echo $data['precio']; ?>€</p>
                <!-- Agrega cualquier otra información relevante del producto aquí -->
            </div>
        </div>
    </div>
</body>

</html>
