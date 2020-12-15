<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body class="cuerpo">
    <div class="container centrar">
      <div class="container cuerpo text-center mt-5">	

    <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="" target="">
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
            <a class="nav-link" href="?controller=Index&accion=regresoHomeUser">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?controller=Home&accion=listadoActividadesUsuarios">Horario de clases
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?controller=Home&accion=listadoActividadesUsuariosInscripcion">Apuntarme a Clases
              <span class="sr-only">(current)</span>
            </a>
          </li>
        <li class="nav-item active">
            <a class="nav-link" href="?controller=Reservas&accion=misReservas">Mis Reservas
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>

        <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item active">
            <a class="nav-link" href="?controller=User&accion=actMiPerfil">Mi Perfil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?controller=Home&accion=cerrarSesion">Cerrar Sesion
              <span class="sr-only">(current)</span>
            </a>
          </li>
      </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

      <!-- Full Page Intro -->

      </br>
      </br>
      </br>
      
      <?php // Mostramos los mensajes procedentes del controlador que se hayn generado
            foreach ($mensajes as $mensaje) : ?> 
             <div class="alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
      <?php endforeach; ?>
      <form action="?controller=User&accion=actMiPerfil" method="post" enctype="multipart/form-data">
        <!-- Rellenamos los campos con los valores recibidos desde el controlador -->
        <label for="txtnombre">Nombre
          <input type="text" class="form-control" name="txtnombre" value="<?= $datos["txtnombre"] ?>" required></label>
        <br/>

        <label for="txtApellido1">Apellido1
          <input type="text" class="form-control" name="txtapellido1" value="<?= $datos["txtapellido1"] ?>" required></label>
        <br/>

        <label for="txtApellido2">Apellido2
          <input type="text" class="form-control" name="txtapellido2" value="<?= $datos["txtapellido2"] ?>" required></label>
        <br/>

        <label for="txtTelefono">Telefono
          <input type="text" class="form-control" name="txttelefono" value="<?= $datos["txttelefono"] ?>" required></label>
        <br/>

        <label for="txtDireccion">Direccion
          <input type="text" class="form-control" name="txtdireccion" value="<?= $datos["txtdireccion"] ?>" required></label>
        <br/>

        <!--Creamos un campo oculto para mantener el valor del id que deseamos modificar cuando pulsemos el botón actualizar-->  
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br/>
        <input type="submit" value="Actualizar" name="submit" class="btn btn-success">
      </form>
    </div>
  </body>
</html>