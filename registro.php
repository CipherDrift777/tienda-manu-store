 <!DOCTYPE html>
 <html lang="es">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro</title>
     <!-- Bootstrap y fuentes -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
     <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
     <script defer src="app.js"></script>
 </head>

 <body class="d-flex flex-column min-vh-100">
     <!-- Main -->
     <main class="form-signin w-100 m-auto">
         <form action="registrar_usuario.php" method="POST" autocomplete="off">
             <div class="mb-4">
                 <h1 class="h3 mb-3 fw-normal text-center">Crear cuenta</h1>

                 <div class="form-floating mb-2">
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                     <label for="nombre">Nombre completo</label>
                 </div>

                 <div class="form-floating mb-2">
                     <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                     <label for="email">Correo electrónico</label>
                 </div>

                 <div class="form-floating mb-2">
                     <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                     <label for="password">Contraseña</label>
                 </div>

                 <div class="form-floating mb-3">
                     <select class="form-select" id="rol_id" name="rol_id" required>
                         <option value="2" selected>Cliente</option>
                     </select>
                     <label for="rol_id">Tipo de usuario</label>
                 </div>
             </div>

             <button class="btn btn-pide-ahora w-100 py-2" type="submit">Registrarse</button>

             <p class="d-flex justify-content-center py-2">
                 &copy; 2025
             </p>

             <div class="text-center mt-3">
                 ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
             </div>
         </form>
     </main>
 </body>

 </html>