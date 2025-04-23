<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManuStore</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- CDN Bootstrap Icons -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <script defer src="app.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Barra de navegacion -->
    <?php
    include_once "menu.php";
    ?>
    <!-- Main -->
    <section class="main bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Nuestra Colección</h2>

            <div id="carruselManuStore" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000"
                data-bs-pause="hover">
                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carruselManuStore" data-bs-slide-to="0" class="active"
                        aria-current="true"></button>
                    <button type="button" data-bs-target="#carruselManuStore" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carruselManuStore" data-bs-slide-to="2"></button>
                </div>

                <!-- Slides -->
                <div class="carousel-inner rounded shadow-sm">
                    <div class="carousel-item active">
                        <img src="img/kaki_sudadera.png" class="d-block w-100 img-carrusel" alt="Sudadera kaki">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sudadera Kaki</h5>
                            <p>Colección Otoño/Invierno</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/chemise.jpg" class="d-block w-100 img-carrusel" alt="Camisa elegante">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Polo Elegante</h5>
                            <p>Perfecta para ocasiones especiales</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/camiseta.png" class="d-block w-100 img-carrusel" alt="Camiseta básica">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Camiseta Básica</h5>
                            <p>Para un look casual y cómodo</p>
                        </div>
                    </div>
                </div>

                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carruselManuStore"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carruselManuStore"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
            <a href="login.html" class="btn-pide-ahora mt-3">Pide ahora mismo</a>
        </div>
    </section>

    <!-- Tarjetas para mas contenido -->

    <section class="next py-5">
        <div class="container-fluid py-5">
            <div class="row g-4">
                <h1 class="fw-bold text-uppercase">Nueva Temporada</h1>
                <!-- Hombres -->
                <div class="col-lg-4">
                    <div class="card text-white">
                        <img src="img/card1.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <div class="btn-tarjeta-container">
                                <a href="hombres.html"
                                    class="btn-pide-ahora text-decoration-none text-white">Hombres</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mujeres -->
                <div class="col-lg-4">
                    <div class="card text-white">
                        <img src="img/card2.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <div class="btn-tarjeta-container">
                                <a href="mujeres.html"
                                    class="btn-pide-ahora text-decoration-none text-white">Mujeres</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ofertas -->
                <?php


                // if (isset($_SESSION['identificado']) && $_SESSION['identificado'] == true) {
                // 
                ?>
                <div class="col-lg-4">
                    <div class="card text-white">
                        <img src="img/card3.png" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <div class="btn-tarjeta-container">
                                <a href="ofertas.html"
                                    class="btn-pide-ahora text-decoration-none text-white">Ofertas</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Nuestras redes sociales</h5>
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/?locale=es_ES" class="text-white" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fa-brands fa-facebook fs-4"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="text-white" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fa-brands fa-instagram fs-4"></i>
                        </a>
                        <a href="https://x.com/?lang=es" class="text-white" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-twitter fs-4"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5>Contacto</h5>
                    <p class="mb-0">C/ P. Arrupe s/n, Alicante</p>
                    <p class="mb-0">Tel: +34 600 111 222</p>
                </div>
            </div>
            <hr />
            <div class="text-center mt-4">
                <p class="m-0 fs-6 fw-medium text-light">
                    &copy; 2025 <span class="fw-bold text-uppercase">ManuStore</span>. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- CDN Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>