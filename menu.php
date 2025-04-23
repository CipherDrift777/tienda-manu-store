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
                 <li class="nav-item dropdown  d-lg-none">
                     <a class="nav-link text-white" href="login.php">Login

                     </a>
                 </li>
             </ul>
         </div>

         <!-- ICONO SOLO EN ESCRITORIO -->
         <div class="d-none d-lg-block">
             <a href="login.php" class="text-decoration-none text-dark d-flex align-items-center">
                 <i class="fa-solid fa-user fs-5"></i>
             </a>
         </div>
     </div>
 </nav>