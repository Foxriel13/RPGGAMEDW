<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Heroes Community</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            /* General Styles */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            /* Navbar */
            .navbar {
                background-color: #000000;
            }
            .navbar .navbar-brand {
                font-size: 1.25rem;
                color: #fff;
            }

            /* Jumbotron */
            .jumbotron {
                background-color: #f8f9fa;
                padding: 2rem;
                text-align: center;
            }
            .jumbotron img {
                max-width: 100%;
                height: auto;
            }
            .jumbotron .btn-primary {
                background-color: #007bff;
                border: none;
            }

            /* Cards */
            .card {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border: none;
                margin-top: 20px;
            }
            .card-img-top {
                width: 100%;
                height: auto;
            }
            .card-title {
                font-size: 1.25rem;
                font-weight: bold;
                color: #333;
            }
            .card-text {
                color: #555;
                font-size: 0.9rem;
            }
            .card .btn-info {
                margin-right: 5px;
            }
            .card .btn-success {
                margin-right: 5px;
            }

            /* Button Styling */
            .btn-primary {
                background-color: #007bff;
                border: none;
                color: white;
            }
            .btn-success {
                background-color: #28a745;
                color: white;
            }
            .btn-danger {
                background-color: #dc3545;
                color: white;
            }
            .logoNav{
                margin-left: 30px;
            }
            .marginEspacioso{
                margin-left: 70px;
                margin-right: 70px;
            }
            .textoJustificado{
                text-align: justify;
            }
        </style>
    </head>
    <body>

        <!-- Navbar -->

        <nav class="navbar py-3 navbar-expand-lg navbar-dark">
            <img src="../../../assets/img/logoHeros.png" alt="Heroes Logo" width="130" height="50" class="logoNav" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white h4 logoNav" href="#">Crear Nuevo Campeon</a>
                    </li>
                </ul>
            </div>  
        </nav>

        <!-- Main Header -->
        <div class="mt-3 marginEspacioso">
            <div class="row">
                <!-- Imagen ocupando 2/3 del ancho -->
                <div class="col-md-8">
                    <img src="../../../assets/img/fondoIndex.jpg" alt="Heroes Banner" class="img-fluid">
                </div>

                <!-- Texto y botón ocupando el resto (1/3) -->
                <div class="col-md-4 d-flex flex-column align-items-start text-start">
                    <h1 class="display-6 textoJustificado">Comunidad de usuarios de Campeones</h1>
                    <p class="lead textoJustificado">La aventura comienza aquí, en tu navegador</p>
                    <a href="#" class="btn btn-primary btn-lg">Juega ahora!</a>
                </div>
            </div>
        </div>

        <hr class="my-4 marginEspacioso">
        <!-- Creatures Section -->
        <div class="container">
            <div class="row">
                <!-- Creature 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="creature1.jpg" class="card-img-top" alt="Creature 1">
                        <div class="card-body">
                            <h5 class="card-title">Nombre criatura 1</h5>
                            <p class="card-text">Descripción de la criatura 1. Por ejemplo: Los poderosos Centinelas son la primera línea de defensa del Sacro Imperio...</p>
                            <a href="#" class="btn btn-info">Más información</a>
                            <a href="#" class="btn btn-success">Modificar</a>
                            <a href="#" class="btn btn-danger">Exterminar</a>
                        </div>
                    </div>
                </div>
                <!-- Creature 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="creature2.jpg" class="card-img-top" alt="Creature 2">
                        <div class="card-body">
                            <h5 class="card-title">Nombre criatura 2</h5>
                            <p class="card-text">Descripción de la criatura 2.</p>
                            <a href="#" class="btn btn-info">Más información</a>
                            <a href="#" class="btn btn-success">Modificar</a>
                            <a href="#" class="btn btn-danger">Exterminar</a>
                        </div>
                    </div>
                </div>
                <!-- Creature 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="creature3.jpg" class="card-img-top" alt="Creature 3">
                        <div class="card-body">
                            <h5 class="card-title">Nombre criatura 3</h5>
                            <p class="card-text">Descripción de la criatura 3.</p>
                            <a href="#" class="btn btn-info">Más información</a>
                            <a href="#" class="btn btn-success">Modificar</a>
                            <a href="#" class="btn btn-danger">Exterminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
