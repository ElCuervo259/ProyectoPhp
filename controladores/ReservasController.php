<?php

session_start();


/**
 * Incluimos los modelos que necesite este controlador
 */
require_once MODELS_FOLDER . 'ReservasModel.php';

require_once MODELS_FOLDER . 'ActividadModel.php';




/**
 * Controlador de la página de entrada al portal desde la que se pueden hacer las funciones que te permita tu rol
 */
class ReservasController extends BaseController
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
      $this->modelo = new ReservasModel();
      $this->mensajes = [];
   }



   public function apuntarseActividad(){



    $parametros = [
        "tituloventana" => "Base de Datos con PHP y PDO",
        "datos" => NULL,
        "mensajes" => []
     ];

    $resultModelo = $this->modelo->apuntarseActividad([

        "idActividad" => $_GET['id'], 
        "idUsuario" => $_SESSION['id']

     ]);

      if($resultModelo["correcto"]==FALSE){

         $this->mensajes[] = [
            "tipo" => "danger",
            "mensaje" => "El usuario ya se registro en la actividad"
         ];

         $resultModeloDatos = New ActividadModel();
         $listado = $resultModeloDatos-> listadoHorario();

        
         $parametros['datos']= $listado["datos"];
         $parametros["mensajes"] = $this->mensajes;

         $this->view->show("UserHorarioReservas",$parametros);

      }else{

         if ($resultModelo["correcto"]) :
            $this->mensajes[] = [
               "tipo" => "success",
               "mensaje" => "El usuario se apunto a la actividad correctamente"
            ];
    
    
         else :
            
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "El usuario no pudo registarse a la actividad />({$resultModelo["error"]})"
            ];
         endif;
    
    
        $resultModeloDatos = New ActividadModel();
    
        $listado = $resultModeloDatos-> listadoHorario();
    
        $parametros['datos']= $listado["datos"];
        $parametros["mensajes"] = $this->mensajes;
    
        $this->view->show("UserHorarioReservas",$parametros);
      }



   }


   public function listadoReservas()
    {
       // Almacenamos en el array 'parametros[]'los valores que vamos a mostrar en la vista
       $parametros = [
          "tituloventana" => "Base de Datos con PHP y PDO",
          "datos" => NULL,
          "mensajes" => []
       ];
       // Realizamos la consulta y almacenamos los resultados en la variable $resultModelo
       $resultModelo = $this->modelo->listarReservas();
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
       $this->view->show("ListadoReservasAdmin", $parametros);
       
    }

    public function delReserva()
   {
      // verificamos que hemos recibido los parámetros desde la vista de listado 
      if (isset($_GET['id']) && (is_numeric($_GET['id']))) {
         $id = $_GET["id"];
         //Realizamos la operación de suprimir el usuario con el id=$id
         $resultModelo = $this->modelo->borrarReservas($id);
         //Analizamos el valor devuelto por el modelo para definir el mensaje a 
         //mostrar en la vista listado
         if ($resultModelo["correcto"]) :
            $this->mensajes[] = [
               "tipo" => "success",
               "mensaje" => "Se elimino correctamente la reserva $id"
            ];
         else :
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "La eliminación de la reserva no se realizó correctamente<br/>({$resultModelo["error"]})"
            ];
         endif;
      } else { //Si no recibimos el valor del parámetro $id generamos el mensaje indicativo:
         $this->mensajes[] = [
            "tipo" => "danger",
            "mensaje" => "No se pudo acceder al id del usuario a eliminar!! :("
         ];
      }
      //Realizamos el listado de los usuarios
      $this->listadoReservas();
   }

   
   public function misReservas()
    {
       // Almacenamos en el array 'parametros[]'los valores que vamos a mostrar en la vista
       $parametros = [
          "tituloventana" => "Base de Datos con PHP y PDO",
          "datos" => NULL,
          "mensajes" => []
       ];
       // Realizamos la consulta y almacenamos los resultados en la variable $resultModelo
       $resultModelo = $this->modelo->listarMisReservas();
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
       $this->view->show("misReservas", $parametros);
       
    }


    public function delReservaUser()
   {
      // verificamos que hemos recibido los parámetros desde la vista de listado 
      if (isset($_GET['id']) && (is_numeric($_GET['id']))) {
         $id = $_GET["id"];
         //Realizamos la operación de suprimir el usuario con el id=$id
         $resultModelo = $this->modelo->borrarReservas($id);
         //Analizamos el valor devuelto por el modelo para definir el mensaje a 
         //mostrar en la vista listado
         if ($resultModelo["correcto"]) :
            $this->mensajes[] = [
               "tipo" => "success",
               "mensaje" => "Se elimino correctamente la reserva $id"
            ];
         else :
            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "La eliminación de la reserva no se realizó correctamente<br/>({$resultModelo["error"]})"
            ];
         endif;
      } else { //Si no recibimos el valor del parámetro $id generamos el mensaje indicativo:
         $this->mensajes[] = [
            "tipo" => "danger",
            "mensaje" => "No se pudo acceder al id del usuario a eliminar!! :("
         ];
      }
      //Realizamos el listado de los usuarios
      $this->misReservas();
   }




}