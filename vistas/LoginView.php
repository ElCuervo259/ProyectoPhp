<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gimnasio</title>


    <?php require_once 'includes/head.php'; ?>
    
   <? require_once "includes/recaptchalib.php"; ?>

   <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>

</head>

<body>

<?php if(isset($mensajes)); ?>

    <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" >
        <strong>Gimnasio virtual</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link" target="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link" target="#">
          <i class="fab fa-whatsapp"></i>
            </a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link" target="#">
          <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url(assets/images/gym.jpg); background-repeat: no-repeat; background-size: cover; min-height: 120vh;">

<!-- Mask & flexbox options-->
<div class="mask rgba-black-light d-flex justify-content-center align-items-center">

<!-- Content -->
<div class="container">

  <!--Grid row-->
  <div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-md-6 mb-4 white-text text-center text-md-left">

      <h1 class="display-4 font-weight-bold">Bienvenido a tu Gimnasio Virtual</h1>

      <hr class="hr-light">

      <p>
        <strong>El mejor asesoramiento a tu servicio con los mejores Profesionales</strong>
      </p>

      <p class="mb-4 d-none d-md-block">
        <strong>Unete ahora a nosotros y disfrutaras de multitud de clases dirigidas y
          unas excelentes instalaciones
        </strong>
      </p>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 col-xl-5 mb-4 ml-5">

<!--Card-->
<div class="card">

  <!--Card content-->
  <div class="card-body">

    <!-- Form -->
    <form action="?controller=Index&accion=login" method ="POST">
      <!-- Heading -->
      <h3 class="dark-grey-text text-center">
        <strong>Acceder</strong>
      </h3>
      <hr>

      <div class="md-form">
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" name="usuario" id="form3" class="form-control" value="<?php if(isset($_COOKIE['usuario'])){echo $_COOKIE['usuario'];}?>">
        <label for="form3">Login</label>
      </div>

      <div class="md-form">
        <i class="fas fa-pencil-alt prefix grey-text"></i>
        <input type="password" name ="password" id="form8" class="form-control " value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
        <label for="form8">Contraseña</label>
      </div>

                  
      <div class="md-form pl-5">
          <div class="g-recaptcha" data-sitekey=6LcpqgQaAAAAAL2E7ff580mLkQDxdWMs65CKGLRI></div>
      </div>



      <?php // Mostramos los mensajes procedentes del controlador que se hayn generado

      if(isset($mensajes)){
        foreach ($mensajes as $mensaje) : ?> 
          <div class="alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
   <?php endforeach; 
      }
    ?>
    
            

      <div class="text-center">
        <button type="submit" class="btn btn-indigo">Loguearse</button>
        <hr>

        <input type="checkbox" class="form-check-input" id="checkbox1" name ="recuerdo" <?php if(isset($_COOKIE['recuerdo'])){echo "checked";} ?>>
        <label for="checkbox1" class="form-check-label dark-grey-text" >Recuerdame</label>


        <fieldset class="form-check">
        <!-- Register -->
        <p>¿No estas registrado?
         <!--Cambiar !-->
            <a href="?controller=index&accion=mostrarRegistro">Registrarse</a>
        </p>
          
        </fieldset>
      </div>

    </form>
    <!-- Form -->

  </div>

</div>
<!--/.Card-->

</div>
<!--Grid column-->

</div>
<!--Grid row-->

</div>
<!-- Content -->

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->

</footer>
<!--/.Footer-->


    
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>