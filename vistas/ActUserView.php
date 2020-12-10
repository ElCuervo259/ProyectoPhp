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
          <a class="navbar-brand" href="" target=>
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

        <p><h2><img class="alineadoTextoImagen mt-5"/>Actualizar Usuario</h2> </p>
      
      <?php // Mostramos los mensajes procedentes del controlador que se hayn generado
            foreach ($mensajes as $mensaje) : ?> 
             <div class="alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
      <?php endforeach; ?>
      <form action="?controller=User&accion=actuser" method="post" enctype="multipart/form-data">
        <!-- Rellenamos los campos con los valores recibidos desde el controlador -->
        <label for="txtnombre">Nombre
          <input type="text" class="form-control" name="txtnombre" value="<?= $datos["txtnombre"] ?>" required></label>
        <br/>

        <label for="txtnombre">Apellido1
          <input type="text" class="form-control" name="txtapellido1" value="<?= $datos["txtapellido1"] ?>" required></label>
        <br/>

        <label for="txtnombre">Apellido2
          <input type="text" class="form-control" name="txtapellido2" value="<?= $datos["txtapellido2"] ?>" required></label>
        <br/>

        <label for="txtnombre">Telefono
          <input type="text" class="form-control" name="txttelefono" value="<?= $datos["txttelefono"] ?>" required></label>
        <br/>

        <label for="txtnombre">Direccion
          <input type="text" class="form-control" name="txtdireccion" value="<?= $datos["txtdireccion"] ?>" required></label>
        <br/>

        <label for="txtnombre">Rol
          <input type="text" class="form-control" name="txtrol_id" value="<?= $datos["txtrol_id"] ?>" required></label>
        <br/>



        <?php if ($datos["imagen"] != null && $datos["imagen"] != "") { ?>
          </br>Imagen del Perfil: <img src="fotos/<?= $datos["imagen"] ?>" width="60" /></br>
        <?php } ?>
        </br>
        <label for="imagen">Actualizar imagen de perfil:
          <input type="file" name="imagen" class="form-control" value="<?= $datos["imagen"] ?>" /></label>
        </br>
        <!--Creamos un campo oculto para mantener el valor del id que deseamos modificar cuando pulsemos el botón actualizar-->  
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br/>
        <input type="submit" value="Actualizar" name="submit" class="btn btn-success">
      </form>
    </div>
  </body>
</html>