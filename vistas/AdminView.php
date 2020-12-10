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

<?php if(isset($mensajes))var_dump($mensajes); ?>

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
          <li class="nav-item active">
            <a class="nav-link" href="#">Administrar Horarios
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?controller=User&accion=listado">Administrar usuarios
              <span class="sr-only">(current)</span>
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

      <h1 class="display-4 font-weight-bold">Bienvenido a la ventana de Administrador</h1>

      <hr class="hr-light">

      <p>
        <strong><?php echo "Hola " . $_SESSION['nombre'] ?></strong>
      </p>

      

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 col-xl-5 mb-4 ml-5">
<p> Ventana administrador</p>


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