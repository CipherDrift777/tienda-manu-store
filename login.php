<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Main -->
    <main class="form-signin w-100 m-auto">
        <form action="validar.php" method="POST" autocomplete="off">
            <div class="mb-4">
                <div id="mensajeError" class="alert alert-danger d-none" role="alert">
                    Usuario o contraseña incorrectos.
                </div>
                <h1 class="h3 mb-3 fw-normal">Inicia sesión</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                        name="usuario">
                    <label for="floatingInput">Correo electronico</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="pass">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">
                        Recuerdame
                    </label>
                </div>
            </div>
            <button class="btn btn-pide-ahora w-100 py-2" type="submit">Entrar</button>
            <p class="d-flex justify-content-center py-2">
                &copy; 2025
            </p>
            <div class="text-center mt-3">
                ¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>
            </div>
        </form>
    </main>
    <script src="app.js"></script>
</body>

</html>