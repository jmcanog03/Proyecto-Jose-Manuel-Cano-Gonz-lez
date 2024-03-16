<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
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
                                <a href=""><i class="fas fa-shopping-cart fa-custom"></i></a>

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
                <!-- Tarjeta de camiseta 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="camiseta1.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/4f00381c_d9b00e9e-5bd8-481d-bb1d-96a8262e94e2.jpg?v=1701551664&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta Local del Inter de Miami 23/24</p>
                            <a href="camiseta1.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta de camiseta 2 -->
                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-barca.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/IMG-2557.webp?v=1701493601&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta Local del FC Barcelona 23/24</p>
                            <a href="camiseta-barca.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-atleti.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/2246655013D626F317303C93BCB3E580.jpg?v=1701469830&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta Local Atletico de Madrid 23/24</p>
                            <a href="camiseta-atleti.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <a href="camiseta-rm.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/IMG-2487_457dab2f-5507-4b53-b953-72797f057d6e.webp?v=1701921037&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>
                        <div class="card-body">
                            <p class="card-text">Camiseta Local del Real Madrid 23/24</p>
                            <a href="camiseta-rm.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="camiseta-bay.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/3307b4b5b5a62dda88f29875448ac94e4.jpg?v=1701702736&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta Local del Bayern 23/24</p>
                            <a href="camiseta-bay.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-psg.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/5028902eb06ca739a9a743171432b6b41.jpg?v=1701634124&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta Local del PSG 23/24</p>
                            <a href="camiseta-psg.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <!-- Más tarjetas de camisetas de temporada pueden ir aquí -->
            </div>
        </section>

        <!-- Sección de Camisetas Retro -->
        <section id="retro">
            <h2 class="mt-5 mb-4">Camisetas Retro</h2>
            <div class="row">
                <!-- Tarjeta de camiseta retro 1 -->
                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-retrofcb.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/Retro-Barcelona-1011-home-1.webp?v=1701516867&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta retro del FC Barcelona 10/11</p>
                            <a href="camiseta-retrofcb.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de camiseta retro 2 -->
                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-retrorm.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/Retro-Real-Madrid-9899-away-3.webp?v=1701516748&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta Retro del Real Madrid Temporada 98/99.</p>
                            <a href="camiseta-retrorm.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-inter.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/IMG-4061.jpg?v=1704616135&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta retro del Inter de Milan CF temporada 09/10</p>
                            <a href="camiseta-inter.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-retromu.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/5675ed5dc9005b2a1feedc580a34425e2.jpg?v=1704395825&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>


                        <div class="card-body">
                            <p class="card-text">Camiseta retro manga larga del Manchester United temporada 07/08</p>
                            <a href="camiseta-retromu.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-retroar.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/366558399152f42c8e35d6a412ba8c0fa.jpg?v=1704395675&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Camiseta retro manga larga del Arsenal temporada 91/92</p>
                            <a href="camiseta-retroar.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">

                        <a href="camiseta-retroche.php">
                            <img src="https://realjasefootball.com/cdn/shop/files/B24CCF8D07779526661ACB52B14DBFFB.jpg?v=1704225019&width=823"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>


                        <div class="card-body">
                            <p class="card-text">Camiseta retro manga larga Chelsea FC temporada 11/12</p>
                            <a href="camiseta-retoche.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>


                <!-- Más tarjetas de camisetas retro pueden ir aquí -->
            </div>
        </section>

        <!-- Sección de Chándal -->
        <section id="chandal">
            <h2 class="mt-5 mb-4">Chándal</h2>
            <div class="row">
                <!-- Tarjeta de chándal 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="chandalfcb.php">
                            <img src="https://camisetasfuutbol.eu/wp-content/uploads/2024/02/6_f57584f3-a563-4398-9dd0-2e6741a9e878.png"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Chándal del FC Barcelona Rojo</p>
                            <a href="chandalfcb.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de chándal 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="chandalrm.php">

                            <img src="https://camisetasfuutbol.eu/wp-content/uploads/2024/02/20_d2452bfd-b6e4-4cb2-bd39-b458c35e1459.png"
                                class="card-img-top" alt="Camiseta Temporada 1"> </a>

                        <div class="card-body">
                            <p class="card-text">Chándal del Real Madrid Negro</p>
                            <a href="chandalrm.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="chandalpsg.php">
                            <img src="https://camisetasfuutbol.eu/wp-content/uploads/2024/02/28_bc2ca42e-1d13-4525-b7e7-70c6c3189658.png"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Chándal del PSG Oscuro</p>
                            <a href="chandalpsg.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="chandalchelsea.php">
                            <img src="https://camisetasfuutbol.eu/wp-content/uploads/2024/02/10_1119a56f-9450-4f6c-a134-da338ac665bc.png"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Chándal del Chelsea Azul</p>
                            <a href="chandalchelsea.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="chandalmanchester.php">
                            <img src="https://camisetasfuutbol.eu/wp-content/uploads/2024/02/32_458f10b6-e629-475f-9da6-30171eceb634.png"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>

                        <div class="card-body">
                            <p class="card-text">Chándal del Manchester United Negro</p>
                            <a href="chandalmanchester.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="chandalmilan.php">
                            <img src="https://camisetasfuutbol.eu/wp-content/uploads/2024/02/26_b78be86e-2b52-4c6e-b0dd-7a48c5c84eb5.png"
                                class="card-img-top" alt="Camiseta Temporada 1">
                        </a>
                        <div class="card-body">
                            <p class="card-text">Chandal del Milán Negro</p>
                            <a href="chandalmilan.php" class="btn btn-primary">Ir a comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Más tarjetas de chándal pueden ir aquí -->
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>© 2024 Tienda Deportiva DeporteVest</span>
            <a href="listadoproduct.php" class="btn btn-primary">Ir a comprar</a>
        </div>
    </footer>

    <!-- Bootstrap y jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>