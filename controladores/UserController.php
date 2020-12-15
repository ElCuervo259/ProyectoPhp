<?php

session_start();

/**
 * Incluimos los modelos que necesite este controlador
 */
require_once MODELS_FOLDER . 'UserModel.php';


/**
 * Clase controlador que será la encargada de obtener, para cada tarea, los datos
 * necesarios de la base de datos, y posteriormente, tras su proceso de elaboración,
 * enviarlos a la vista para su visualización
 */
class UserController extends BaseController
{
   // El atributo $modelo es de la 'clase modelo' y será a través del que podremos 
   // acceder a los datos y las operaciones de la base de datos desde el controlador
   private $modelo;
   //$mensajes se utiliza para almacenar los mensajes generados en las tareas, 
   //que serán posteriormente transmitidos a la vista para su visualización
   private $mensajes;

   /**
    * Constructor que crea automáticamente un objeto modelo en el controlador e
    * inicializa los mensajes a vacío
    */
   public function __construct()
   {
      parent::__construct();
      $this->modelo = new UserModel();
      $this->mensajes = [];
   }


   /**
    * Método que obtiene de la base de datos el listado de usuarios y envía dicha
    * infomación a la vista correspondiente para su visualización
    */
   public function listado()
   {

      // Almacenamos en el array 'parametros[]'los valores que vamos a mostrar en la vista
      $parametros = [
         "tituloventana" => "Base de Datos con PHP y PDO",
         "datos" => NULL,
         "mensajes" => []
      ];
      // Realizamos la consulta y almacenamos los resultados en la variable $resultModelo
      $resultModelo = $this->modelo->listado();
      // Si la consulta se realizó correctamente transferimos los datos obtenidos
      // de la consulta del modelo ($resultModelo["datos"]) a nuestro array parámetros
      // ($parametros["datos"]), que será el que le pasaremos a la vista para visualizarlos
      if ($resultModelo["correcto"]) :

         $parametros["datos"] = $resultModelo["datos"];
         //Definimos el mensaje para el alert de la vista de que todo fue correctamente
         $this->mensajes[] = [
            "tipo" => "success",
            "mensaje" => "El listado se realizó correctamente"
         ];
      else :
         //Definimos el mensaje para el alert de la vista de que se produjeron errores al realizar el listado
         $this->mensajes[] = [
            "tipo" => "danger",
            "mensaje" => "El listado no pudo realizarse correctamente!! :( <br/>({$resultModelo["error"]})"
         ];
      endif;
      //Asignamos al campo 'mensajes' del array de parámetros el valor del atributo 
      //'mensaje', que recoge cómo finalizó la operación:
      $parametros["mensajes"] = $this->mensajes;
      // Incluimos la vista en la que visualizaremos los datos o un mensaje de error
      $this->view->show("listaUsuarios", $parametros);
      
   }

   /**
    * Método de la clase controlador que realiza la eliminación de un usuario a 
    * través del campo id
    */
   public function deluser()
   {
      // verificamos que hemos recibido los parámetros desde la vista de listado 
      if (isset($_GET['id']) && (is_numeric($_GET['id']))) {
         $id = $_GET["id"];
         //Realizamos la operación de suprimir el usuario con el id=$id
         $resultModelo = $this->modelo->deluser($id);
         //Analizamos el valor devuelto por el modelo para definir el mensaje a 
         //mostrar en la vista listado
         if ($resultModelo["correcto"]) :
            $this->mensajes[] = [
               "tipo" => "success",
               "mensaje" => "Se eliminó correctamente el usuario $id"
            ];
         else :
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "La eliminación del usuario no se realizó correctamente!! :( <br/>({$resultModelo["error"]})"
            ];
         endif;
      } else { //Si no recibimos el valor del parámetro $id generamos el mensaje indicativo:
         $this->mensajes[] = [
            "tipo" => "danger",
            "mensaje" => "No se pudo acceder al id del usuario a eliminar!! :("
         ];
      }
      //Realizamos el listado de los usuarios
      $this->listado();
   }

   /**
    * Funcion que permite añadir usuarios a la base de datos
    *
    * @return void
    */
   public function adduser()
   {
      // Array asociativo que almacenará los mensajes de error que se generen por cada campo
      $errores = array();
      $error = 0;


      // Si se ha pulsado el botón guardar...
    if (isset($_POST) && !empty($_POST) && isset($_POST['submit'])) { // y hemos recibido las variables del formulario y éstas no están vacías...
         
         $nif =  filter_var($_POST['txtnif'],FILTER_SANITIZE_STRING);
         $nombre = filter_var($_POST['txtnombre'],FILTER_SANITIZE_STRING);
         $apellido1 = filter_var($_POST['txtapellido1'],FILTER_SANITIZE_STRING);
         $apellido2 = filter_var($_POST['txtapellido2'],FILTER_SANITIZE_STRING);
         $usuario = filter_var($_POST['txtlogin'],FILTER_SANITIZE_STRING);
         $password = $_POST['txtpass'];
         $email = filter_var($_POST['txtemail'],FILTER_SANITIZE_EMAIL);
         $telefono = filter_var($_POST['txttelefono'],FILTER_SANITIZE_NUMBER_INT);
         $direccion = filter_var($_POST['txtdireccion'],FILTER_SANITIZE_STRING);

         /* Realizamos la carga de la imagen en el servidor */
         //       Comprobamos que el campo tmp_name tiene un valor asignado para asegurar que hemos
         //       recibido la imagen correctamente
         //       Definimos la variable $imagen que almacenará el nombre de imagen 
         //       que almacenará la Base de Datos inicializada a NULL
         $imagen = NULL;
         $rol_id = "3";

         
        
         if (isset($_FILES["imagen"]) && (!empty($_FILES["imagen"]["tmp_name"]))) {
            // Verificamos la carga de la imagen
            // Comprobamos si existe el directorio fotos, y si no, lo creamos
            if (!is_dir("fotos")) {
               $dir = mkdir("fotos", 0777, true);
            } else {
               $dir = true;
            }
            // Ya verificado que la carpeta uploads existe movemos el fichero seleccionado a dicha carpeta
            if ($dir) {
               //Para asegurarnos que el nombre va a ser único...
               $nombrefichimg = time() . "-" . $_FILES["imagen"]["name"];
               // Movemos el fichero de la carpeta temportal a la nuestra
               $movfichimg = move_uploaded_file($_FILES["imagen"]["tmp_name"], "fotos/" . $nombrefichimg);
               $imagen = $nombrefichimg;
               // Verficamos que la carga se ha realizado correctamente
               if ($movfichimg) {
                  $imagencargada = true;
               } else {
                  $imagencargada = false;
                  $this->mensajes[] = [
                     "tipo" => "danger",
                     "mensaje" => "Error: La imagen no se cargó correctamente! :("
                  ];
                  $errores["imagen"] = "Error: La imagen no se cargó correctamente! :(";
               }
            }
         }


         //Filtramos los campos de la recogidad de datos
         if(!preg_match("/[0-9]{7,8}[A-Z]/",$nif)){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "Formato de Dni incorrecto"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }


         if(!preg_match("/[a-zA-Z]{3,15}$/",$nombre)){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "El nombre no puede contener numeros ni ser mayor que 15"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }

         if(!preg_match("/[a-zA-Z]{3,15}$/",$apellido1)){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "El apellido no puede contener numeros ni ser mayor que 15"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }

         if(!preg_match("/[a-zA-Z]{3,15}$/",$apellido2)){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "El apellido no puede contener numeros ni ser mayor que 15"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }

        
         if(empty($usuario) || !preg_match("/[a-zA-Z0-9]{3,15}$/",$usuario)){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "El nombre de usuario no puede ser mayor que 15"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }

         if (empty($password) || strlen($password)<8 || (!preg_match("/[0-9]/",$password)||
        (!preg_match("/[a-z]/",$password)|| (!preg_match("/[A-Z]/",$password))))){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "La contraseña esta vacia o debe ser mayor que 8,contener al menos 1 digito, letras, y mayusculas"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }

         if(empty($email || !filter_var($email,FILTER_VALIDATE_EMAIL))){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "El email esta vacio o contiene un formato incorrecto"
            ];
            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }

         if(!preg_match("/[0-9]{9}$/",$telefono)){
            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "El nombre de usuario no puede ser mayor que 15"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }

         if(!strlen($direccion)>3){

            $this->mensajes[] = [

               "tipo" => "danger",
               "mensaje" => "La direccion debe ser mayor que 3"
            ];

            $parametros = ["mensajes" => $this->mensajes];
            $error++;
         }



         if ($error > 0) {$this->view->show("Nuevo",$parametros);}


         // Si no se han producido errores realizamos el registro del usuario
         if ($error == 0) {
            $resultModelo = $this->modelo->adduser([
               'nif'=>$nif,
               'nombre' => $nombre,
               'apellido1' => $apellido1,
               'apellido2' =>$apellido2,
               'usuario' => $usuario,
               "password" => $password,
               'email' => $email,
               'telefono' => $telefono,
               'direccion' => $direccion,
               'imagen' => $imagen,
               'rol_id' => $rol_id
            ]);

            if ($resultModelo["correcto"]) :
               $this->mensajes[] = [
                  "tipo" => "success",
                  "mensaje" => "El usuario se registró correctamente. Espere a ser Activado por un administrador"
               ];
            else :

               $error++;
               $this->mensajes[] = [
                  "tipo" => "danger",
                  "mensaje" => "El usuario no pudo registrarse<br />({$resultModelo["error"]})"
               ];
            endif;

         } else {

            $error++;
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "Datos de registro de usuario erróneos!! :("
            ];
         }

    
         $parametros = [
            "tituloventana" => "Base de Datos con PHP y PDO",
            "datos" => [
               "txtnombre" => isset($nombre) ? $nombre : "",
               "txtpass" => isset($password) ? $password : "",
               "txtemail" => isset($email) ? $email : "",
               "imagen" => isset($imagen) ? $imagen : "",
               "rol_id" =>isset ($rol_id) ? $rol_id : ""
             ],
            "mensajes" => $this->mensajes
         ];
    

    
        } else {
        $error++;

            $this->mensajes[] = [
            "tipo" => "danger",
            "mensaje" => "Datos de registro vacios :("
            ];

            $parametros = [
                "mensajes" => $this->mensajes
            ];
    }
         
      $this->view->show("Login",$parametros);
   }

   /**
    * Método de la clase controlador que permite actualizar los datos del usuario
    * cuyo id coincide con el que se pasa como parámetro desde la vista de listado
    * a través de GET
    */
   public function actuser()
   {
      // Array asociativo que almacenará los mensajes de error que se generen por cada campo
      $errores = array();
      // Inicializamos valores de los campos de texto
      $valnombre = "";
      $valapellido1 = "";
      $valapellido2 = "";
      $valtelefono = "";
      $valdireccion = "";
      $valrol_id = "";
      $valimagen = "";

      // Si se ha pulsado el botón actualizar...
      if (isset($_POST['submit'])) { //Realizamos la actualización con los datos existentes en los campos
         $id = $_POST['id']; //Lo recibimos por el campo oculto
         $nuevonombre = $_POST['txtnombre'];
         $nuevoapellido1  = $_POST['txtapellido2'];
         $nuevoapellido2 = $_POST['txtapellido2'];
         $nuevotelefono = $_POST['txttelefono'];
         $nuevodireccion = $_POST['txtdireccion'];
         $nuevorol_id = $_POST['txtrol_id'];
         $nuevaimagen = "";

         // Definimos la variable $imagen que almacenará el nombre de imagen 
         // que almacenará la Base de Datos inicializada a NULL
         $imagen = NULL;

         if (isset($_FILES["imagen"]) && (!empty($_FILES["imagen"]["tmp_name"]))) {
            // Verificamos la carga de la imagen
            // Comprobamos si existe el directorio fotos, y si no, lo creamos
            if (!is_dir("fotos")) {
               $dir = mkdir("fotos", 0777, true);
            } else {
               $dir = true;
            }
            // Ya verificado que la carpeta fotos existe movemos el fichero seleccionado a dicha carpeta
            if ($dir) {
               //Para asegurarnos que el nombre va a ser único...
               $nombrefichimg = time() . "-" . $_FILES["imagen"]["name"];
               // Movemos el fichero de la carpeta temportal a la nuestra
               $movfichimg = move_uploaded_file($_FILES["imagen"]["tmp_name"], "fotos/" . $nombrefichimg);
               $imagen = $nombrefichimg;
               // Verficamos que la carga se ha realizado correctamente
               if ($movfichimg) {
                  $imagencargada = true;
               } else {
                  //Si no pudo moverse a la carpeta destino generamos un mensaje que se le
                  //mostrará al usuario en la vista actuser
                  $imagencargada = false;
                  $errores["imagen"] = "Error: La imagen no se cargó correctamente! :(";
                  $this->mensajes[] = [
                     "tipo" => "danger",
                     "mensaje" => "Error: La imagen no se cargó correctamente! :("
                  ];
               }
            }
         }
         $nuevaimagen = $imagen;

         //si no tenemos errores
         if (count($errores) == 0) {
            //Ejecutamos la instrucción de actualización a la que le pasamos los valores
            $resultModelo = $this->modelo->actuser([
               'id' => $id,
               'nombre' => $nuevonombre,
               'apellido1' => $nuevoapellido1,
               'apellido2' => $nuevoapellido2,
               'telefono' => $nuevotelefono,
               'direccion' => $nuevodireccion,
               'rol_id' => $nuevorol_id,
               
               'imagen' => $nuevaimagen
            ]);
            //Analizamos cómo finalizó la operación de registro y generamos un mensaje
            //indicativo del estado correspondiente
            if ($resultModelo["correcto"]) :
               $this->mensajes[] = [
                  "tipo" => "success",
                  "mensaje" => "El usuario se actualizó correctamente"
               ];
            else :
               $this->mensajes[] = [
                  "tipo" => "danger",
                  "mensaje" => "El usuario no pudo actualizarse<br/>({$resultModelo["error"]})"
               ];
            endif;
         } else {
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "Datos de registro de usuario erróneos"
            ];
         }

         // Obtenemos los valores para mostrarlos en los campos del formulario
         $valnombre = $nuevonombre;
         $valapellido1 = $nuevoapellido1;
         $valapellido2 = $nuevoapellido2;
         $valtelefono = $nuevotelefono;
         $valdireccion = $nuevodireccion;
         $valrol_id = $nuevorol_id;
         $valimagen = $nuevaimagen;


      } else { //Estamos rellenando los campos con los valores recibidos del listado
         if (isset($_GET['id']) && (is_numeric($_GET['id']))) {
            $id = $_GET['id'];
            //Ejecutamos la consulta para obtener los datos del usuario #id
            $resultModelo = $this->modelo->listausuario($id);
            //Analizamos si la consulta se realiz´correctamente o no y generamos un
            //mensaje indicativo
            if ($resultModelo["correcto"]) :
               $this->mensajes[] = [
                  "tipo" => "success",
                  "mensaje" => "Los datos del usuario se obtuvieron correctamente"
               ];
               $valnombre = $resultModelo["datos"]["nombre"];
               $valapellido1 = $resultModelo["datos"]["apellido1"];
               $valapellido2 = $resultModelo["datos"]["apellido2"];
               $valtelefono = $resultModelo["datos"]["telefono"];
               $valdireccion = $resultModelo["datos"]["direccion"];
               $valrol_id = $resultModelo["datos"]["rol_id"];
               $valimagen = $resultModelo["datos"]["imagen"];
            else :
               $this->mensajes[] = [
                  "tipo" => "danger",
                  "mensaje" => "No se pudieron obtener los datos de usuario<br/>({$resultModelo["error"]})"
               ];
            endif;
         }
      }
      //Preparamos un array con todos los valores que tendremos que rellenar en
      //la vista adduser: título de la página y campos del formulario
      $parametros = [
         "tituloventana" => "Base de Datos con PHP y PDO",
         "datos" => [
            "txtnombre" => $valnombre,
            "txtapellido1"  => $valapellido1,
            "txtapellido2"  => $valapellido2,
            "txttelefono"  => $valtelefono,
            "txtdireccion"  => $valdireccion,
            "txtrol_id" => $valrol_id,
            "imagen" => $valimagen
         ],
         "mensajes" => $this->mensajes,
         "id" => $id
      ];
      //Mostramos la vista actuser
      $this->view->show("ActUser",$parametros);
   }


/**
 * Funcion que permitirá actualizar el perfil del usuario que se encuentra actualmente en la aplicacion
 *
 * @return void
 */
   public function actMiPerfil()
   {
      // Array asociativo que almacenará los mensajes de error que se generen por cada campo
      $errores = array();
      // Inicializamos valores de los campos de texto
      $valnombre = "";
      $valapellido1 = "";
      $valapellido2 = "";
      $valtelefono = "";
      $valdireccion = "";
      

      // Si se ha pulsado el botón actualizar...
      if (isset($_POST['submit'])) { //Realizamos la actualización con los datos existentes en los campos
         $id = $_SESSION['id']; 
         $nuevonombre = $_POST['txtnombre'];
         $nuevoapellido1  = $_POST['txtapellido1'];
         $nuevoapellido2 = $_POST['txtapellido2'];
         $nuevotelefono = $_POST['txttelefono'];
         $nuevodireccion = $_POST['txtdireccion'];

  

         // Definimos la variable $imagen que almacenará el nombre de imagen 
         // que almacenará la Base de Datos inicializada a NULL
         $imagen = NULL;

         if (isset($_FILES["imagen"]) && (!empty($_FILES["imagen"]["tmp_name"]))) {
            // Verificamos la carga de la imagen
            // Comprobamos si existe el directorio fotos, y si no, lo creamos
            if (!is_dir("fotos")) {
               $dir = mkdir("fotos", 0777, true);
            } else {
               $dir = true;
            }
            // Ya verificado que la carpeta fotos existe movemos el fichero seleccionado a dicha carpeta
            if ($dir) {
               //Para asegurarnos que el nombre va a ser único...
               $nombrefichimg = time() . "-" . $_FILES["imagen"]["name"];
               // Movemos el fichero de la carpeta temportal a la nuestra
               $movfichimg = move_uploaded_file($_FILES["imagen"]["tmp_name"], "fotos/" . $nombrefichimg);
               $imagen = $nombrefichimg;
               // Verficamos que la carga se ha realizado correctamente
               if ($movfichimg) {
                  $imagencargada = true;
               } else {
                  //Si no pudo moverse a la carpeta destino generamos un mensaje que se le
                  //mostrará al usuario en la vista actuser
                  $imagencargada = false;
                  $errores["imagen"] = "Error: La imagen no se cargó correctamente! :(";
                  $this->mensajes[] = [
                     "tipo" => "danger",
                     "mensaje" => "Error: La imagen no se cargó correctamente! :("
                  ];
               }
            }
         }
         $nuevaimagen = $imagen;

         if (count($errores) == 0) {
            //Ejecutamos la instrucción de actualización a la que le pasamos los valores
            $resultModelo = $this->modelo->miPerfil([
               'id' => $id,
               'nombre' => $nuevonombre,
               'apellido1' => $nuevoapellido1,
               'apellido2' => $nuevoapellido2,
               'telefono' => $nuevotelefono,
               'direccion' => $nuevodireccion,
            ]);
            //Analizamos cómo finalizó la operación de registro y generamos un mensaje
            //indicativo del estado correspondiente
            if ($resultModelo["correcto"]) :
               $this->mensajes[] = [
                  "tipo" => "success",
                  "mensaje" => "El usuario se actualizó correctamente"
               ];
            else :
               $this->mensajes[] = [
                  "tipo" => "danger",
                  "mensaje" => "El usuario no pudo actualizarse<br/>({$resultModelo["error"]})"
               ];
            endif;
         } else {
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "Datos de registro de usuario erróneos"
            ];
         }

         // Obtenemos los valores para mostrarlos en los campos del formulario
         $valnombre = $nuevonombre;
         $valapellido1 = $nuevoapellido1;
         $valapellido2 = $nuevoapellido2;
         $valtelefono = $nuevotelefono;
         $valdireccion = $nuevodireccion;



      } else { //Estamos rellenando los campos con los valores recibidos del listado
         if (isset($_SESSION['id']) && (is_numeric($_SESSION['id']))) {
            $id = $_SESSION['id'];
            //Ejecutamos la consulta para obtener los datos del usuario #id
            $resultModelo = $this->modelo->listausuario($id);
            //Analizamos si la consulta se realiz´correctamente o no y generamos un
            //mensaje indicativo
            if ($resultModelo["correcto"]) :
               $this->mensajes[] = [
                  "tipo" => "success",
                  "mensaje" => "Los datos del usuario se obtuvieron correctamente"
               ];
               $valnombre = $resultModelo["datos"]["nombre"];
               $valapellido1 = $resultModelo["datos"]["apellido1"];
               $valapellido2 = $resultModelo["datos"]["apellido2"];
               $valtelefono = $resultModelo["datos"]["telefono"];
               $valdireccion = $resultModelo["datos"]["direccion"];

            else :
               $this->mensajes[] = [
                  "tipo" => "danger",
                  "mensaje" => "No se pudieron obtener los datos de usuario<br/>({$resultModelo["error"]})"
               ];
            endif;
         }
      }
      //Preparamos un array con todos los valores que tendremos que rellenar en
      //la vista adduser: título de la página y campos del formulario
      $parametros = [
         "tituloventana" => "Base de Datos con PHP y PDO",
         "datos" => [
            "txtnombre" => $valnombre,
            "txtapellido1"  => $valapellido1,
            "txtapellido2"  => $valapellido2,
            "txttelefono"  => $valtelefono,
            "txtdireccion"  => $valdireccion,
 
         ],
         "mensajes" => $this->mensajes,
         "id" => $id
      ];
      //Mostramos la vista perfilUser
      $this->view->show("perfilUser",$parametros);
   }

   



}
