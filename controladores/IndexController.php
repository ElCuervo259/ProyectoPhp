<?php



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


   public function index()
   {
      $parametros = [
         "tituloventana" => "Login"
      ];
      $this->view->show("Login",$parametros);
   }

   /**
    * Podemos implementar la acción login
    *
    * @return void
    */
   public function login()
   {
      
      

      if (!isset($_POST['submit'])) {
         
         if(empty($_POST['usuario']) || empty($_POST['password'])){
          
            $this->view->show("Login");
         }else{

            $usuarios = new UserModel();

            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            $resultado = $usuarios ->login(['usuario' => $usuario,'password'=> $password]);

           
            //si el rol es 0 es administrador
            if($resultado['correcto']==true && $resultado['datos'][0]['rol_id'] == 0 ){

               session_start();

               $_SESSION['nombre'] = $_POST['usuario'];
               

               $this->view->show("Principal",$resultado);


               //si el rol es 1 esta activo
            }elseif($resultado['correcto']==true && $resultado['datos'][0]['rol_id'] == 1){

               

               $_SESSION['nombre'] = $_POST['usuario'];

               $this->view->show("HomeUser",$resultado);


               
               //si el rol es 3 esta inactivo
            }elseif ($resultado['correcto']==true && $resultado['datos'][0]['rol_id']==3){

            $this->view->show("Login");
            
            }else{
               $this->view->show("Login");
            } 

         }



         }
      
     
   }

   /**
    * Podemos implementar la acción registro de usuarios
    *
    * @return void
    */
   public function mostrarRegistro()
   {
     
    var_dump($_POST);
    var_dump($_POST);
    var_dump($_POST);
      $this->view->show("Nuevo");




   }

   /**
    * Otras acciones que puedan ser necesarias
    */
}
