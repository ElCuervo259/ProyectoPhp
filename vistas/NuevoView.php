<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
    <title>Registro de usuarios</title>
  </head>
  <body>

  <?php if(isset($mensajes))var_dump($mensajes); ?>

    <div class ="container">
        <form class="text-center border border-light p-5"  action="?controller=User&accion=adduser" method ="POST">

        <p class="h4 mb-4 mt-5">Registro de Usuarios</p>

        <input type="text" id="defaultLoginFormEmail" name = "txtnif"  class="form-control mb-4" placeholder = "00000000X" >
        <!-- Login -->
        <input type="text" id="defaultLoginFormEmail" name = "txtnombre"  class="form-control mb-4" placeholder="Nombre">

        <input type="text" id="defaultLoginFormEmail" name = "txtapellido1"  class="form-control mb-4" placeholder="Primer Apellido">

        <input type="text" id="defaultLoginFormEmail" name = "txtapellido2"  class="form-control mb-4" placeholder="Segundo Apellido">

        <input type="text" id="defaultLoginFormEmail" name = "txtlogin"  class="form-control mb-4" placeholder="Login">
    
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name = "txtpass" class="form-control mb-4" placeholder="Contraseña">

        <input type="email" id="defaultLoginFormPassword" name = "txtemail" class="form-control mb-4" placeholder="Email">

        <input type="text" id="defaultLoginFormEmail" name = "txttelefono"  class="form-control mb-4" placeholder="Telefono">

        <input type="text" id="defaultLoginFormEmail" name = "txtdireccion"  class="form-control mb-4" placeholder="Direccion">


        
        <?php if(isset($mensajes)) foreach ($mensajes as $mensaje) : ?>
            <div class="alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
         <?php endforeach; ?>


        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" name = "submit" type="submit">Registarse</button>

        </form>


    </div>

  </body>
  </html>