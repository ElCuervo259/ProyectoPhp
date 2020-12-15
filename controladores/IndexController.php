<?php

session_start();



/**
 * Controlador de la página index desde la que se puede hacer el login y el registro
 */

 /**
 * Incluimos todos los modelos que necesite este controlador
 */
require_once MODELS_FOLDER . 'UserModel.php';

class IndexController extends BaseController
{
   public function __construct()
   {
      parent::__construct();

      
   }

   /**
    * Funcion que inicia el proyecto llamando a la ventana de login
    *
    * @return void
    */
   public function index()
   {
      $parametros = [
         "tituloventana" => "Login"
      ];
      $this->view->show("Login",$parametros);
   }

   /**
    * Funcion que nos permitirá acceder a la aplicacion si tenemos un usuario validado y registrado
    *
    * @return void
    */
   public function login()
   {

   //utilidades necesarias para el catcha de google
   $secret = "6LcpqgQaAAAAAFLLOc2FluvGr1MRUsUf3SnPOwRl";
   $response = null;

 // comprueba la clave secreta
 if (isset($_POST['g-recaptcha-response'])) {
   $captcha = $_POST['g-recaptcha-response']; 
   $url = 'https://www.google.com/recaptcha/api/siteverify';
   $data = array(
   'secret' => $secret,
   'response' => $captcha,
   'remoteip' => $_SERVER['REMOTE_ADDR']
   );

   $curlConfig = array(
   CURLOPT_URL => $url,
   CURLOPT_POST => true,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POSTFIELDS => $data
   );

   $ch = curl_init();
   curl_setopt_array($ch, $curlConfig);
   $response = curl_exec($ch);
   curl_close($ch);
   }

   $jsonResponse = json_decode($response);

   //si se pulsa y rellena correctamente el catcha
   if ($jsonResponse->success === true) {

      if (!isset($_POST['submit'])) {
         
         if(empty($_POST['usuario']) || empty($_POST['password'])){

            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "Datos vacios o incorrectos"
            ];

               $parametros = [

                  "mensajes" => $this->mensajes
               ];

            $this->view->show("Login",$parametros);


         }else{

               $usuarios = new UserModel();

               $usuario = $_POST['usuario'];
               $password = $_POST['password'];

               $resultado = $usuarios ->login(['usuario' => $usuario,'password'=> $password]);

            
               //si el rol es 0 es administrador
               if($resultado['correcto']==true && $resultado['datos'][0]['rol_id'] == 0 ){


                  $_SESSION['nombre'] = $_POST['usuario'];
                  $_SESSION['id'] = $resultado['datos'][0]['id'];

                  if(isset($_POST['recuerdo']) && ($_POST['recuerdo']=="on"))
                     {//si seleccionamos recuerda
                        setcookie('usuario',$_POST['usuario'],time()+(15*24*60*60));
                        setcookie('password',$_POST['password'],time()+(15*24*60*60));
                        setcookie('recuerdo',$_POST['recuerdo'],time()+(15*24*60*60));
                     } else{//si no seleccionamos recuerda
                        if(isset($_COOKIE['usuario'])){
                              setcookie('usuario',"");
                        }
                        if(isset($_COOKIE['password'])){
                              setcookie('password',"");
                        }
                        if(isset($_COOKIE['recuerdo'])){
                              setcookie('recuerdo',"");
                        }
                     }

                  $this->view->show("Admin",$resultado);


                  //si el rol es 1 esta activo
               }elseif($resultado['correcto']==true && $resultado['datos'][0]['rol_id'] == 1){

                  

                  $_SESSION['nombre'] = $_POST['usuario'];
                  $_SESSION['id'] = $resultado['datos'][0]['id'];

                  if(isset($_POST['recuerdo']) && ($_POST['recuerdo']=="on"))
                     {//si seleccionamos recuerda
                        setcookie('usuario',$_POST['usuario'],time()+(15*24*60*60));
                        setcookie('password',$_POST['password'],time()+(15*24*60*60));
                        setcookie('recuerdo',$_POST['recuerdo'],time()+(15*24*60*60));
                     } else{//si no seleccionamos recuerda
                        if(isset($_COOKIE['usuario'])){
                              setcookie('usuario',"");
                        }
                        if(isset($_COOKIE['password'])){
                              setcookie('password',"");
                        }
                        if(isset($_COOKIE['recuerdo'])){
                              setcookie('recuerdo',"");
                        }
                     }

                  $this->view->show("User",$resultado);

                  
                  //si el rol es 3 esta inactivo
               }elseif ($resultado['correcto']==true && $resultado['datos'][0]['rol_id']==3){


                  $this->mensajes[] = [
                     "tipo" => "danger",
                     "mensaje" => "El administrador debe confirmar tu contraseña"
                  ];
      
                  $parametros["mensajes"] = $this->mensajes;


               $this->view->show("Login",$resultado);
               
               }else{
                  $this->view->show("Login");
               } 

            }

        }
   
         }else{

            $this->mensajes[] = [
               "tipo" => "danger",
               "mensaje" => "No se pulso captcha"
            ];

            $parametros["mensajes"] = $this->mensajes;

            $this->view->show("Login",$parametros);

         }





         }
      
     
   /**
    * Funcion que nos permitirá acceder a la ventana principal
    *
    * @return void
    */
   public function mostrarIndex(){

      $this->view->show("Login");
   }


   /**
    * Podemos implementar la acción registro de usuarios
    *
    * @return void
    */
   public function mostrarRegistro()
   {
     

      $this->view->show("Nuevo");




   }

   /**
    * Otras acciones que puedan ser necesarias
    */

    /**
     * Funcion para que el administrador regrese a la ventana de inicio
     *
     * @return void
     */
    public function regresoHome()
   {

      
      $this->view->show("Admin");

   }

   


   /**
    * Funcion que nos llevará a la ventana principal del usuario
    *
    * @return void
    */
   public function regresoHomeUser()
   {

      
      $this->view->show("User");

   }

   /**
    * Funcion para mostrar el horario con las actividades
    *
    * @return void
    */
   public function mostrarActividades(){

      $this->view->show("Horario");
   }



}
