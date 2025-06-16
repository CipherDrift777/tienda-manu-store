 <!-- Barra de navegacion -->
 <nav class="navbar navbar-expand-lg fixed-top">
     <div class="container">
         <a class="navbar-brand" href="index.php">ManuStore</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                 <li class="nav-item">
                     <a class="nav-link" href="hombres.php">Hombre</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="mujeres.php">Mujeres</a>
                 </li>
                 <?php
                    if (isset($_SESSION['identificado']) && $_SESSION['identificado'] == true) {
                    ?>
                     <li class="nav-item dropdown">
                         <a class="nav-link" href="ofertas.php">Ofertas</a>
                     </li>
                 <?php } ?>
                 <li class="nav-item dropdown">
                     <a class="nav-link" href="contacto.php">Contacto</a>
                 </li>
                 <!-- Ícono de Login solo en móviles -->
                 <?php if (!isset($_SESSION['identificado']) || $_SESSION['identificado'] !== true): ?>
                     <li class="nav-item d-lg-none">
                         <a class="nav-link" href="login.php">
                             <i class="fa-solid fa-user me-2"></i> Iniciar sesión
                         </a>
                     </li>
                 <?php endif; ?>
                 <!-- Ícono de Logout solo si está identificado -->
                 <?php if (isset($_SESSION['identificado']) && $_SESSION['identificado'] === true): ?>
                     <li class="nav-item d-lg-none">
                         <a class="nav-link" href="logout.php">
                             <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión
                         </a>
                     </li>
                 <?php endif; ?>
             </ul>
         </div>

         <!-- ICONOS SOLO EN ESCRITORIO -->
         <div class="d-none d-lg-flex gap-3 align-items-center">
             <!-- Icono de login -->
             <?php if (!isset($_SESSION['identificado']) || $_SESSION['identificado'] !== true): ?>
                 <a href="login.php" class="text-decoration-none text-dark" title="Iniciar sesión">
                     <i class="fa-solid fa-user fs-5"></i>
                 </a>
             <?php endif; ?>
             <!-- Icono de logout si está identificado -->
             <?php if (isset($_SESSION['identificado']) && $_SESSION['identificado'] === true): ?>
                 <a href="logout.php" class="text-decoration-none text-dark" title="Cerrar sesión">
                     <i class="fa-solid fa-right-from-bracket fs-5"></i>
                 </a>
             <?php endif; ?>
         </div>
 </nav>