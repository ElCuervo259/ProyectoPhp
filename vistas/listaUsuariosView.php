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
      
      
        

      <?php // Mostramos los mensajes procedentes del controlador que se hayn generado
            foreach ($mensajes as $mensaje) : ?> 
             <div class="alert alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
      <?php endforeach; ?>
      <!--Creamos la tabla que utilizaremos para el listado:-->  

      <table id = "dtBasicExample" class="table table-striped">
      </style>
        <tr>
        <th>Id</th>
            <th>NIF</th>
          <th>Nombre</th>
          <th>Apellido1</th>
          <th>Apellido2</th>
          <th>Foto</th>
          <th>Login</th>
          <th>Password</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Rol</th>
          <!-- Añadimos una columna para las operaciones que podremos realizar con cada registro -->
          <th>Operaciones</th>
        </tr>
        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <tr>
          <td><?= $d["id"] ?></td>
          <td><?= $d["nif"] ?></td>
          <td><?= $d["nombre"] ?></td> 
            <td><?= $d["apellido1"] ?></td>
            <td><?= $d["apellido2"] ?></td>
            <?php if ($d["imagen"] !== NULL) : ?>
              <td><img src="fotos/<?= $d['imagen'] ?>" width="40" /></td>
            <?php else : ?>
              <td>----</td>
            <?php endif; ?>
            <td><?= $d["login"] ?></td>
            <td><?= $d["password"] ?></td>
            <td><?= $d["email"] ?></td>
            <td><?= $d["telefono"] ?></td>
            <td><?= $d["direccion"] ?></td>

            <?php if ($d["rol_id"] == 0) : ?>
              <td>Administrador</td>
            <?php elseif($d["rol_id"] == 1) : ?>
              <td>Usuario Validado</td>
            <?php elseif($d["rol_id"] == 3) : ?>
              <td>Usuario No validado</td>
            <?php endif; ?>
            
            <!-- Enviamos a actuser.php, mediante GET, el id del registro que deseamos editar o eliminar: -->
            <td><a href="?controller=user&accion=actuser&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> Editar </a><a href="?controller=user&accion=deluser&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> Eliminar</a></td>
          </tr>
        <?php endforeach; ?>


        

      </table>
              

    </div>

<!-- jQuery -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
          $(document).ready(function () {
          $('#dtBasicExample').DataTable();
          $('.dataTables_length').addClass('bs-select');
          });
    </script>
    <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="assets/js/addons/datatables.min.js"></script>

  </body>
</html>