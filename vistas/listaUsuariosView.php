<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
</head>
  <body >
      
        <p><h2><img class="alineadoTextoImagen" width="50px"/>Listar Usuarios</h2> </p>
      
      <!--Mostramos los mensajes que se hayan generado al realizar el listado-->

      <!--Creamos la tabla que utilizaremos para el listado:-->  

      <table>
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
            <td><?= $d["rol_id"] ?></td>
            
            <!-- Enviamos a actuser.php, mediante GET, el id del registro que deseamos editar o eliminar: -->
            <td><a href="?controller=user&accion=actuser&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> Editar </a><a href="?controller=user&accion=deluser&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> Eliminar</a></td>
          </tr>
        <?php endforeach; ?>
      </table>
              

    </div>
  </body>
</html>