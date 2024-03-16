<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #FF8C00, #FFD700);
            color: #333;
            min-height: 100vh;
            position: relative;
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
        }
        .footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            position: absolute;
            bottom: 0;
        }
        .product-details {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
        }
        .product-img {
            border-radius: 10px;
            height: 500px;
            margin-top: 47px;
        }
        /* Agrega un margen inferior al contenedor de la imagen */
        .product-info {
    display: flex;
    align-items: flex-start;
}

.product-img-container {
    margin-right: 2rem;
    flex-shrink: 0;
}

.product-details {
    flex: 1;
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
                            <a class="nav-link" href="primos.php">Camisetas de Temporada 23-24</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#retro">Camisetas Retro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chandal">Chándal</a>
                        </li>                      
                        <li>
                            <a href="primos.php" class="btn btn-primary">Carrito</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <!-- Detalles del Producto -->
        <div class="row justify-content-center">
            <!-- Imagen del Producto -->
            <div class="product-info">
    <!-- Imagen del producto -->
    <div class="product-img-container">
        <img src=https://realjasefootball.com/cdn/shop/files/IMG-2487_457dab2f-5507-4b53-b953-72797f057d6e.webp?v=1701921037&width=823" alt="Camiseta Madrid" class="product-img">
    </div>

    <!-- Detalles del producto -->
    <div class="product-details">
        <h2>Casmiseta Local Real Madrid 23/24</h2>
        <p>22,00 €</p>
        <form>
            <div class="form-group">
                <label for="talla">Talla</label>
                <select class="form-control" id="talla">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="parche">Parche</label>
                <select class="form-control" id="parche">
                    <option>Seleccionar Parche</option>
                    <option>Champions League</option>
                    <option>La Liga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" placeholder="Número">
            </div>
            <button type="submit" class="btn btn-primary ml-5">Añadir al Carrito</button>
            <a href="primos.php" class="btn btn-primary ml-5" >Volver Atrás</a>
        </form>
    </div>
</div>
        </div>
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
    <!-- Iconos de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/bootstrap-icons.min.js"></script>
</body>
</html>
