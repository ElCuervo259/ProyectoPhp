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
            <a class="nav-link" href="?controller=Home&accion=cerrarSesion">Cerrar Sesion
              <span class="sr-only">(current)</span>
            </a>
          </li>
      </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->


      </br>
      </br>
      </br>

      <?php // Mostramos los mensajes procedentes del controlador que se hayn generado
            foreach ($mensajes as $mensaje) : ?> 
             <div class="alert alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
      <?php endforeach; ?>
      <!--Mostramos los mensajes que se hayan generado al realizar el listado-->

      <!--Creamos la tabla que utilizaremos para el listado:-->  

      <table class="table table-striped">
        <tr>
        <th>Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
        </tr>
        <tr>
        <td>
            07:00 - 07:30
            <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "07:00") : ?>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "07:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <?php endif; ?>   
        <?php endforeach; ?>

        </td>
        </tr>

        <tr>
        <td>
            07:30 - 08:00
                        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "07:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "07:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>            
            <?php endforeach; ?>
        </td>
        </tr>
        <tr>
        <td>
            08:00 - 08:30
                        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "08:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "08:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> </td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            08:30 - 09:00
        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "08:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "08:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        <tr>
        <td>
            09:00 - 09:30
                        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "09:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "09:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            09:30 - 10:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "09:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "09:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr><tr>
        <td>
            10:00 - 10:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "10:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "10:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            10:30 - 11:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "10:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "10:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr><tr>
        <td>
            11:00 - 11:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "11:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "11:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            11:30 - 12:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "11:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "11:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr><tr>
        <td>
            12:00 - 12:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "12:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "12:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            12:30 - 13:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "12:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "12:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            13:00 - 13:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "13:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "13:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            13:30 - 14:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "13:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "13:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            14:00 - 14:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "14:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "14:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            14:30 - 15:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "14:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "14:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            15:00 - 15:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "15:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "15:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>

        </td>
        </tr>

        <tr>
        <td>
            15:30 - 16:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "15:30") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "15:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>

        </td>
        </tr>

        <tr>
        <td>
            16:00 - 16:35
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == " 16:00") : ?>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == " 16:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?></td>
            <?php endif; ?>
            <?php endforeach; ?>

        </td>
        </tr>  
      </table>
              

    </div>
  </body>
</html>