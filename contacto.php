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

    <form action="correo.php" method="POST" class="pt-5 my-5" autocomplete="off">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="my-3">
                        <label class="form-label">Correo: </label>
                        <input name="email" type="email" class="form-control" id="campoEmail"
                            placeholder="tucorreo@correo.com">
                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="asunto" class="form-control" name="asunto" id="asunto" placeholder="Asunto">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea class="form-control" id="campoMensaje" rows="3" name="textarea"></textarea>
                    </div>
                    <div class="col-auto text-center">
                        <button type="submit" class="btn btn-pide-ahora">Enviar correo</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Mapa de la tienda -->

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="mb-4 text-center">📍 Dónde estamos</h2>
                <div class="mapa-estilizado">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2630.7846011991633!2d-0.4657612540420129!3d38.35944793649802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6237757c4baac9%3A0xaa07a08f2e4b9f8d!2sCESA!5e0!3m2!1sen!2ses!4v1745336589411!5m2!1sen!2ses"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>


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