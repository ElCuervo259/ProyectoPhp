<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gimnasio</title>
    
    <?php require_once 'includes/head.php'; ?>

</head>

<body>

    <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong>Gimnasio virtual</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About MDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Free download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free tutorials</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link" target="_blank">
          <i class="fab fa-whatsapp"></i>
            </a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link" target="_blank">
          <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url(images/gym.jpg); background-repeat: no-repeat; background-size: cover; min-height: 120vh;">

<!-- Mask & flexbox options-->
<div class="mask rgba-black-light d-flex justify-content-center align-items-center">

<!-- Content -->
<div class="container">

  <!--Grid row-->
  <div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-md-6 mb-4 white-text text-center text-md-left">

      <h1 class="display-4 font-weight-bold">Learn Bootstrap 4 with MDB</h1>

      <hr class="hr-light">

      <p>
        <strong>Best & free guide of responsive web design</strong>
      </p>

      <p class="mb-4 d-none d-md-block">
        <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
          available. Create your own, stunning website.</strong>
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
        <input type="text" id="form3" class="form-control">
        <label for="form3">Login</label>
      </div>

      <div class="md-form">
        <i class="fas fa-pencil-alt prefix grey-text"></i>
        <input type="text" id="form8" class="form-control">
        <label for="form8">Contraseña</label>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-indigo">Loguearse</button>
        <hr>

        <input type="checkbox" class="form-check-input" id="checkbox1">
        <label for="checkbox1" class="form-check-label dark-grey-text">Recuerdame</label>


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