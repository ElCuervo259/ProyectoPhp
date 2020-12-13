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
            <a class="nav-link" href="?controller=Index&accion=regresoHome">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?controller=Home&accion=listadoActividades">Administrar Horarios
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
                <a class="nav-link" href="?controller=Home&accion=añadirActividad">Añadir Actividad
                  <span class="sr-only">(current)</span>
                </a>
              </li>
          <li class="nav-item active">
            <a class="nav-link" href="?controller=User&accion=listado">Administrar usuarios
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="?controller=Reservas&accion=listadoReservas">Administrar Reservas
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav nav-flex-icons">
      <li class="nav-item active">
            <a class="nav-link" href="?controller=Home&accion=cerrarSesion">Cerrar Sesion
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
      </ul>

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
      <form action="?controller=Home&accion=actualizarActividad" method="post" enctype="multipart/form-data">
        <!-- Rellenamos los campos con los valores recibidos desde el controlador -->
        <label for="txtnombre">Nombre </label>

          <input type="text" class="form-control" name="txtnombre" value="<?php if(isset($datos["txtnombre"])){ echo $datos["txtnombre"];}?>" required>
        <br/>

        <label for="txtaforo">Aforo</label>
          <input type="number" class="form-control" name="txtaforo" value="<?php if(isset($datos["txtnombre"])){ echo $datos["txtaforo"];}?>" required>
        <br/>

        <div class="form-group">
        <label for="dia">Dia:</label>
        <select class="form-control" id="dia" name="selectDia">
            <option>lunes</option>
            <option>martes</option>
            <option>miercoles</option>
            <option>jueves</option>
            <option>viernes</option>
            <option>sabado</option>
        </select>
        </div>

        <div class="form-group">
        <label for="hora">Hora Inicio:</label>
        <select class="form-control" id="hora" name ="selectHora_inicio">
            <option>07:00</option>
            <option>07:30</option>
            <option>08:00</option>
            <option>08:30</option>
            <option>09:00</option>
            <option>09:30</option>
            <option>10:00</option>
            <option>10:30</option>
            <option>11:00</option>
            <option>11:30</option>
            <option>12:00</option>
            <option>12:30</option>
            <option>13:00</option>
            <option>13:30</option>
            <option>14:00</option>
            <option>14:30</option>
            <option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
        </select>
        </div>

        
        <!--Creamos un campo oculto para mantener el valor del id que deseamos modificar cuando pulsemos el botón actualizar-->  
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br/>
        <input type="submit" value="Actualizar" name="submit" class="btn btn-success">
      </form>
    </div>
  </body>
</html>