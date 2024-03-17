<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Tienda de camisetas de fútbol">
    <title>Tienda de Camisetas de Fútbol</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Estilos del menú de navegación */
        .navbar {
            background-color: #000;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
        }

        /* Estilos del pie de página */
        .footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Estilos de fondo degradado */
        .main-content {
            background: linear-gradient(to right, #FF8C00, #FFD700);
            color: #333;
            padding: 20px;
            min-height: calc(100vh - 100px); /* Ajustar según el contenido */
        }

        /* Estilos de las tarjetas */
        .card {
            background: #fff;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Estilos de los botones */
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

        .camiseta{
            color: white;
            background-color: black;
        }
    </style>
</head>
<body>
    <header>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Tienda Deportiva DeporteVest</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categorías</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="main-content">
        <!-- Sección de presentación -->
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Tienda de Camisetas de Fútbol</h1>
                <p class="lead">Encuentra las mejores camisetas de fútbol para tu equipo favorito</p>
                <p>
                    <!-- Botón para abrir el modal de inicio de sesión -->
                    <button type="button" class="btn btn-custom my-2" data-toggle="modal" data-target="#modalIniciarSesion">Iniciar Sesión</button>
                </p>
            </div>
        </section>

        <!-- Sección de productos destacados -->
        <section class="container">
            <h2 class="text-center mb-4">Productos Destacados</h2>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://realjasefootball.com/cdn/shop/files/4f00381c_d9b00e9e-5bd8-481d-bb1d-96a8262e94e2.jpg?v=1701551664&width=823" class="d-block w-100" alt="..." height="800">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="camiseta">Camiseta Inter de Miami 23-24</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://realjasefootball.com/cdn/shop/files/IMG-2557.webp?v=1701493601&width=823" class="d-block w-100" alt="..." height="800">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="camiseta">Camiseta del FC Barcelona 23-24</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://realjasefootball.com/cdn/shop/files/2246655013D626F317303C93BCB3E580.jpg?v=1701469830&width=823" class="d-block w-100" alt="..." height="800">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="camiseta">Camiseta del Atletico de Madrid 23-24</h5>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>© 2024 Tienda Deportiva DeporteVest</span>
        </div>
    </footer>
    
    <!-- Modal de Inicio de Sesión -->
    <div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" aria-labelledby="modalIniciarSesionLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalIniciarSesionLabel">Inicio de Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de inicio de sesión -->
                    <form  method="post" action="/miproyecto/index.php?controller=UserController&action=addUser">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de Usuario</label>
                            <input type="text" class="form-control"  name="nombre" placeholder="Ingresa tu nombre de usuario">
                            <?php
                    if (isset($data['nombre']))
                        echo '<p>' . $data['nombre'] . '</p>';
                    ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña" name="contrasena">
                            <?php
                    if (isset($data['contrasena']))
                        echo '<p>' . $data['contrasena'] . '</p>';
                    ?>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Di tu rol</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Introduce tu rol" name="rol">
                            <?php
                    if (isset($data['rol']))
                        echo '<p>' . $data['rol'] . '</p>';
                    ?>
                        </div>




                        <button type="submit" class="btn btn-primary" name="registro">Iniciar Sesión</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    

    
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>



    
</body>
</html>
