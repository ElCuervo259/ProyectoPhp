<?php

session_start();
use Spipu\Html2Pdf\Html2Pdf;




/**
 * Incluimos los modelos que necesite este controlador
 */
require_once MODELS_FOLDER . 'ActividadModel.php';




/**
 * Controlador de la página de entrada al portal desde la que se pueden hacer las funciones que te permita tu rol
 */
class HomeController extends BaseController
{

   

   // El atributo $modelo es de la 'clase modelo' y será a través del que podremos 
   // acceder a los datos y las operaciones de la base de datos desde el controlador
   private $modelo;
   //$mensajes se utiliza para almacenar los mensajes generados en las tareas, 
   //que serán posteriormente transmitidos a la vista para su visualización
   private $mensajes;

   public function __construct()
   {
      parent::__construct();
      $this->modelo = new ActividadModel();
      $this->mensajes = [];
   }

   /**
    * Funcion para invocar a la ventana principald de nuestra aplicacion
    *
    * @return void
    */
   public function index()
   {
      $parametros = [
         "tituloventana" => "Home de la aplicacion"
      ];
      
      $this->view->show("Principal", $parametros);
   }


   /**
    * Funcion para llamar a la vista para listar los usuarios de nuestra base de datos
    *
    * @return void
    */
   public function listarUsuarios(){
      $this->view->show("listausuarios");
   }


/**
 * Funcion para cerrar la sesion de nuestro usuario destruyendo su sesion
 *
 * @return void
 */
   public function cerrarSesion()
   {
      //script para finalizar la session
      session_start();
      session_unset();
      session_destroy();
      
      $this->redirect("Index","Index");

   }



    /**
    * Método que obtiene de la base de datos el listado de actividades y envía dicha
    * infomación a la vista correspondiente para su visualización
    */
    public function listadoActividades()
    {
       // Almacenamos en el array 'parametros[]'los valores que vamos a mostrar en la vista
       $parametros = [
          "tituloventana" => "Base de Datos con PHP y PDO",
          "datos" => NULL,
          "mensajes" => []
       ];
       // Realizamos la consulta y almacenamos los resultados en la variable $resultModelo
       $resultModelo = $this->modelo->listadoHorario();
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
       $this->view->show("Horario", $parametros);
       
    }

    /**
    * Método que obtiene de la base de datos el listado de actividades disponibles para los usuarios y envía dicha
    * infomación a la vista correspondiente para su visualización
    */
    public function listadoActividadesUsuarios()
    {
       // Almacenamos en el array 'parametros[]'los valores que vamos a mostrar en la vista
       $parametros = [
          "tituloventana" => "Base de Datos con PHP y PDO",
          "datos" => NULL,
          "mensajes" => []
       ];
       // Realizamos la consulta y almacenamos los resultados en la variable $resultModelo
       $resultModelo = $this->modelo->listadoHorario();
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
       $this->view->show("UserHorario", $parametros);
       
    }

    /**
     * Funcion que nos muestra el listado de actividades de la base de datos para el usuario con la opcion de apuntarse 
     * a las actividades disponibles
     *
     * @return void
     */
    public function listadoActividadesUsuariosInscripcion()
    {
       // Almacenamos en el array 'parametros[]'los valores que vamos a mostrar en la vista
       $parametros = [
          "tituloventana" => "Base de Datos con PHP y PDO",
          "datos" => NULL,
          "mensajes" => []
       ];
       // Realizamos la consulta y almacenamos los resultados en la variable $resultModelo
       $resultModelo = $this->modelo->listadoHorario();
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
       $this->view->show("UserHorarioReservas", $parametros);
       
    }



    /**
     * Funcion para borrar la actividad seleccionada en nuestro horario de actividades
     *
     * @return void
     */
    public function borrarActividad(){
 
         // verificamos que hemos recibido los parámetros desde la vista de listado 
         if (isset($_GET['id']) && (is_numeric($_GET['id']))) {
            $id = $_GET["id"];
            
            //Realizamos la operación de suprimir el usuario con el id=$id
            $resultModelo = $this->modelo->delActividad($id);
            //Analizamos el valor devuelto por el modelo para definir el mensaje a 
            //mostrar en la vista listado
            if ($resultModelo["correcto"]) :
               $this->mensajes[] = [
                  "tipo" => "success",
                  "mensaje" => "Se eliminó correctamente la Actividad $id"
               ];
            else :
               $this->mensajes[] = [
                  "tipo" => "danger",
                  "mensaje" => "La eliminación del usuario no se realizó correctamente!<br/>({$resultModelo["error"]})"
               ];
            endif;
         } else { //Si no recibimos el valor del parámetro $id generamos el mensaje indicativo:
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "No se pudo acceder al id de la actividad a eliminar"
            ];
         }
         //Realizamos el listado de los usuarios
         $this->listadoActividades();
      }
    


      /**
       * Funcion que nos permite actualizar cualquier actividad disponible en nuestra base de datos
       *
       * @return void
       */
      public function actualizarActividad(){
            // Array asociativo que almacenará los mensajes de error que se generen por cada campo
            $errores = array();
            // Inicializamos valores de los campos de texto
            $valnombre = "";
            $valaforo = "";
            $valdia = "";
            $valhora_inicio = "";
      
            // Si se ha pulsado el botón actualizar...
            if (isset($_POST['submit'])) { //Realizamos la actualización con los datos existentes en los campos
               $id = $_POST['id']; //Lo recibimos por el campo oculto
               $nuevonombre = $_POST['txtnombre'];
               $nuevoaforo  = $_POST['txtaforo'];
               $nuevodia = $_POST['selectDia'];
               $nuevohora_inicio = $_POST['selectHora_inicio'];

               //Llamada al modelo que comprobará si ya existe una actividad en el horario
               $resultModeloActividad = $this -> modelo ->comprobarHorario([

                  'dia' => $nuevodia,
                  'hora_inicio' => $nuevohora_inicio,

               ]);

               //si la consulta contiene una actividad ya existente
               if($resultModeloActividad['correcto']== FALSE ){

                  $this->mensajes[] = [
                     "tipo" => "danger",
                     "mensaje" => "La actividad no pudo actualizarse<br/>({$resultModeloActividad["error"]})"
                  ];

                  $parametros = [
                  "mensajes" => $this->mensajes,
                  ];
                  

                  $this->view->show("actActividad",$parametros);



               }else{


                   //Ejecutamos la instrucción de actualización a la que le pasamos los valores
                   $resultModelo = $this->modelo->actActividad([
                     'id' => $id,
                     'nombre' => $nuevonombre,
                     'aforo' => $nuevoaforo,
                     'dia' => $nuevodia,
                     'hora_inicio' => $nuevohora_inicio,
                  ]);

                  //Analizamos cómo finalizó la operación de registro y generamos un mensaje
                  //indicativo del estado correspondiente
                  if ($resultModelo["correcto"]) :
                     $this->mensajes[] = [
                        "tipo" => "success",
                        "mensaje" => "La actividad se actualizó correctamente"
                     ];
                  else :
                     $this->mensajes[] = [
                        "tipo" => "danger",
                        "mensaje" => "La actividad no pudo actualizarse<br/>({$resultModelo["error"]})"
                     ];
                  endif;
               
      
               // Obtenemos los valores para mostrarlos en los campos del formulario
               $valnombre = $nuevonombre;
               $valaforo = $nuevoaforo;
               $valdia = $nuevodia;
               $valhora_inicio = $nuevohora_inicio;

               }

            } else { //Estamos rellenando los campos con los valores recibidos del listado
               if (isset($_GET['id']) && (is_numeric($_GET['id']))) {
                  $id = $_GET['id'];
                  //Ejecutamos la consulta para obtener los datos del usuario #id
                  $resultModelo = $this->modelo->listadoHorario($id);
                  //Analizamos si la consulta se realiz´correctamente o no y generamos un
                  //mensaje indicativo
                  if ($resultModelo["correcto"]) :
                     $this->mensajes[] = [
                        "tipo" => "success",
                        "mensaje" => "Los datos de la actividad se obtuvieron correctamente"
                     ];

                     
                     $valnombre = $resultModelo["datos"][0]["nombre"];
                     $valaforo = $resultModelo["datos"][0]["aforo"];
                     $valdia = $resultModelo["datos"][0]["dia"];
                     $valhora_inicio = $resultModelo["datos"][0]["hora_inicio"];

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
                  "txtaforo"  => $valaforo,
                  "selectDia"  => $valdia,
                  "selectHora_inicio"  => $valhora_inicio,

               ],
               "mensajes" => $this->mensajes,
               "id" => $id
            ];
            //Mostramos la vista actActividad
            $this->view->show("actActividad",$parametros);
         }



      
         /**
          * Funcion para añadir nuevas actividades a nuestra base de datos
          */
         public function añadirActividad(){
             // Array asociativo que almacenará los mensajes de error que se generen por cada campo
         $errores = array();
      
      // Si se ha pulsado el botón guardar...
         if (isset($_POST) && !empty($_POST['txtnombre']) && isset($_POST['submit'])) { // y hemos recibido las variables del formulario y éstas no están vacías...
         

         $nombre = $_POST['txtnombre'];
         $aforo = $_POST['txtaforo'];
         $dia = $_POST['selectDia'];
         $hora_inicio = $_POST['selectHora_inicio'];


         // Si no se han producido errores realizamos el registro de la actividad
         if (count($errores) == 0) {
            
            //comprobaremos con esta funcion de su modelo si ya existe alguna clase en ese tramo horario o dia
            $resultModeloActividad = $this->modelo->comprobarHorario([

               'dia' =>$dia,
               'hora_inicio' => $hora_inicio,
 
            ]);

            if($resultModeloActividad["correcto"] == FALSE){

               $this ->mensajes[] = [
                  "tipo" => "danger",
                  "mensaje" => "La actividad no se ingreso correctamente"
                  ];

               $parametros = [
                  "mensajes" => $this->mensajes
               ];

               $this->view->show("addActividad",$parametros);

            }else{

               //llamamos al modelo para añadir la actividad
               $resultModelo = $this->modelo->addActividad([

                  'nombre' => $nombre,
                  'aforo' => $aforo,
                  'dia' =>$dia,
                  'hora_inicio' => $hora_inicio,
    
               ]);

               if ($resultModelo["correcto"]) :
                  $this->mensajes[] = [
                     "tipo" => "success",
                     "mensaje" => "La actividad se ingreso correctamente"
                  ];
   
               else :               
                  $this->mensajes[] = [
                     "tipo" => "danger",
                     "mensaje" => "La actividad no pudo registrarse <br />({$resultModelo["error"]})"
                  ];
               endif;
            }

         } else {
                  $this->mensajes[] = [
                     "tipo" => "danger",
                     "mensaje" => "Datos de incorrectos"
                  ];
               }  
         }
    
         $parametros = [
            "tituloventana" => "Base de Datos con PHP y PDO",
            "datos" => [
               "txtnombre" => isset($nombre) ? $nombre : "",
               "txtaforo" => isset($aforo) ? $aforo : "",
               "selectDia" => isset($dia) ? $dia : "",
               "selectHora_inicio" => isset($hora_inicio) ? $hora_inicio : "",
             ],
            "mensajes" => $this->mensajes
         ];
         
            $this->view->show("addActividad",$parametros);
    
      }


}
