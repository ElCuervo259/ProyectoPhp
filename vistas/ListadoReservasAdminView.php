<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
</head>
  <body >

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



      </br>
      </br>
      </br>
      
        
      
      <!--Mostramos los mensajes que se hayan generado al realizar el listado-->

      <?php // Mostramos los mensajes procedentes del controlador que se hayn generado
            foreach ($mensajes as $mensaje) : ?> 
             <div class="alert alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
      <?php endforeach; ?>

      <!--Creamos la tabla que utilizaremos para el listado:-->  

      <table class="table table-striped">
        <tr>
          <th>Id Reserva</th>
          <th>Nombre Actividad</th>
          <th>Dia Actividad</th>
          <th>Hora Actividad</th>
          <th>Nombre Usuario</th>
          <th>fecha Reserva</th>
          <th>Operaciones</th>
        </tr>
        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <tr>
          <td><?= $d["id"] ?></td>
          <td><?= $d["nombre"] ?></td>
          <td><?= $d["dia"] ?></td>
          <td><?= $d["hora_inicio"] ?></td>
          <td><?= $d["login"] ?></td> 
          <td><?= $d["fecha_reserva"] ?></td>
  
            <!-- Enviamos a actuser.php, mediante GET, el id del registro que deseamos editar o eliminar: -->
            <td><a href="?controller=Reservas&accion=delReserva&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> Eliminar Reserva</a></td>
          </tr>
        <?php endforeach; ?>
      </table>
              

    </div>
  </body>
</html>