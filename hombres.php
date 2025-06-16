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

    <section class="producto py-5">
        <div class="container py-5">
            <h1 class="fw-bold text-uppercase pt-5">Catálogo para Hombres</h1>
            <div class="row pt-5">
                <!-- inicio  c-1 -->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/1camiseta.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Camiseta Beige</h5>
                            <p class="m-0 lead">24,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-1 -->
                <!-- inicio  c-2 -->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/2camisa.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Camisa Blanca</h5>
                            <p class="m-0 lead">39,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-2 -->
                <!-- inicio  c-3 -->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/3camisa_azul_marino.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Camisa Azul Marino</h5>
                            <p class="m-0 lead">39,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-3 -->
                <!-- inicio  c-4 -->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/4chemise.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Polo Blanca</h5>
                            <p class="m-0 lead">29,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-4 -->
                <!-- inicio  c-5-->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/5kaki_sudadera.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Sudadera Kaki</h5>
                            <p class="m-0 lead">34,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-5 -->
                <!-- inicio  c-6 -->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/6polo_negra.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Polo Negra Casual</h5>
                            <p class="m-0 lead">24,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-6 -->
                <!-- inicio  c-7 -->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/7polo_rayas_blancas.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Polo Blanca Rayas</h5>
                            <p class="m-0 lead">24,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-7 -->
                <!-- inicio  c-8 -->
                <div class="col-lg-3 py-3">
                    <div class="card border-0">
                        <div class="card-body py-5 bg-light">
                            <img src="img/productos_hombre/8polo_verde.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer border-0 text-center bg-white">
                            <h5 class="fw-bold ">Polo Verde</h5>
                            <p class="m-0 lead">24,99€</p>
                            <button class="btn btn-pide-ahora">Comprar</button>
                        </div>
                    </div>
                </div>
                <!-- fin c-8 -->
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
    </footer>

    <!-- CDN Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>