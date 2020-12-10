<?php

/**
 *   Clase 'UserModel' que implementa el modelo de usuarios de nuestra aplicación en una
 * arquitectura MVC. Se encarga de gestionar el acceso a la tabla usuarios
 */
class UserModel extends BaseModel
{

   private $id;

   private $nif;

   private $nombre;

   private $apellido1;

   private $apellido2;

   private $imagen;

   private $login;

   private $password;

   private $email;

   private $telefono;

   private $direccion;

   private $rol_id;

   public function __construct()
   {
      // Se conecta a la BD
      parent::__construct();
      $this->table = "usuarios";  
   }

   public function getId()
   {
      return $this->id;
   }

   public function setId($id)
   {
      $this->id = $id;
   }

   public function getNombre()
   {
      return $this->nombre;
   }

   public function setNombre($nombre)
   {
      $this->nombre = $nombre;
   }

   public function getApellido1()
   {
      return $this->apellido1;
   }

   public function setApellido1($apellido1)
   {
      $this->apellido1 = $apellido1;
   }

   public function getApellido2()
   {
      return $this->apellido2;
   }

   public function setApellido2($apellido2)
   {
      $this->apellido1 = $apellido2;
   }

   public function getImagen()
   {
      return $this->imagen;
   }

   public function setImagen($imagen)
   {
      $this->imagen= $imagen;

   }

   public function getLogin()
   {
      return $this->login;
   }

   public function setLogin($login)
   {
      $this->login= $login;
   }


   public function getPassword()
   {
      return $this->password;
   }

   public function setPassword($password)
   {
      $this->password = $password;
   }

   public function getEmail()
   {
      return $this->email;
   }

   public function setEmail($email)
   {
      $this->email = $email;
   }

   public function getTelefono()
   {
      return $this->telefono;
   }

   public function setTelefono($telefono)
   {
      $this->telefono = $telefono;
   }

   public function getDireccion()
   {
      return $this->direccion;
   }

   public function setDireccion($direccion)
   {
      $this->direccion = $direccion;
   }

   public function getRol_Id()
   {
      return $this->rol_id;
   }

   public function setRol_id($rol_id)
   {
      $this->rol_id = $rol_id;
   }

   /**
    * Función que realiza el listado de todos los usuarios registrados
    * Devuelve un array asociativo con tres campos:
    * -'correcto': indica si el listado se realizó correctamente o no.
    * -'datos': almacena todos los datos obtenidos de la consulta.
    * -'error': almacena el mensaje asociado a una situación errónea (excepción) 
    * @return type
    */
    public function listado()
    {
       $return = [
          "correcto" => FALSE,
          "datos" => NULL,
          "error" => NULL
       ];
       //Realizamos la consulta...
       try {  //Definimos la instrucción SQL  
          $sql = "SELECT * FROM usuarios";
          // Hacemos directamente la consulta al no tener parámetros
          $resultsquery = $this->db->query($sql);
          //Supervisamos si la inserción se realizó correctamente... 
          if ($resultsquery) :
             $return["correcto"] = TRUE;
             $return["datos"] = $resultsquery->fetchAll(PDO::FETCH_ASSOC);
          endif; // o no :(
       } catch (PDOException $ex) {
          $return["error"] = $ex->getMessage();
       }
 
       return $return;
    }
 
    /**
     * Método que elimina el usuario cuyo id es el que se le pasa como parámetro 
     * @param $id es un valor numérico. Es el campo clave de la tabla
     * @return boolean
     */
    public function deluser($id)
    {
       // La función devuelve un array con dos valores:'correcto', que indica si la
       // operación se realizó correctamente, y 'mensaje', campo a través del cual le
       // mandamos a la vista el mensaje indicativo del resultado de la operación
       $return = [
          "correcto" => FALSE,
          "error" => NULL
       ];
       //Si hemos recibido el id y es un número realizamos el borrado...
       if ($id && is_numeric($id)) {
          try {
             //Inicializamos la transacción
             $this->db->beginTransaction();
             //Definimos la instrucción SQL parametrizada 
             $sql = "DELETE FROM usuarios WHERE id=:id";
             $query = $this->db->prepare($sql);
             $query->execute(['id' => $id]);
             //Supervisamos si la eliminación se realizó correctamente... 
             if ($query) {
                $this->db->commit();  // commit() confirma los cambios realizados durante la transacción
                $return["correcto"] = TRUE;
             } // o no :(
          } catch (PDOException $ex) {
             $this->db->rollback(); // rollback() se revierten los cambios realizados durante la transacción
             $return["error"] = $ex->getMessage();
          }
       } else {
          $return["correcto"] = FALSE;
       }
 
       return $return;
    }
 
    /**
     * 
     * @param type $datos
     * @return type
     */
    public function adduser($datos)
    {
       $return = [
          "correcto" => FALSE,
          "error" => NULL
       ];
 
       try {
          //Inicializamos la transacción
          $this->db->beginTransaction();
          //Definimos la instrucción SQL parametrizada 
          $sql = "INSERT INTO usuarios(nif,nombre,apellido1,apellido2,
                                       login,password,email,telefono,
                                       direccion,imagen,rol_id)
                          VALUES (:nif,:nombre,:apellido1,:apellido2,:usuario,
                          :password,:email,:telefono,:direccion,:imagen, :rol_id)";
          // Preparamos la consulta...
          $query = $this->db->prepare($sql);

          // y la ejecutamos indicando los valores que tendría cada parámetro
          $query->execute([
             'nif' => $datos ["nif"],
             'nombre' => $datos ["nombre"],
             'apellido1' => $datos ["apellido1"],
             'apellido2' => $datos ["apellido2"],
             'usuario' => $datos["usuario"],
             'password' => $datos["password"],
             'email' => $datos["email"],
             'telefono' => $datos["telefono"],
             'direccion' => $datos["direccion"],
             'imagen' => $datos["imagen"],
             'rol_id' => $datos["rol_id"]
          ]); //Supervisamos si la inserción se realizó correctamente... 
          if ($query) {
             $this->db->commit(); // commit() confirma los cambios realizados durante la transacción
             $return["correcto"] = TRUE;
          } // o no :(
       } catch (PDOException $ex) {
          $this->db->rollback(); // rollback() se revierten los cambios realizados durante la transacción
          $return["error"] = $ex->getMessage();
          //die();
       }
 
       return $return;
    }
 
    public function actuser($datos)
    {
       $return = [
          "correcto" => FALSE,
          "error" => NULL
       ];
 
       try {
          //Inicializamos la transacción
          $this->db->beginTransaction();
          //Definimos la instrucción SQL parametrizada 
          $sql = "UPDATE usuarios SET nombre= :nombre, email= :email, imagen= :imagen WHERE id=:id";
          $query = $this->db->prepare($sql);
          $query->execute([
             'id' => $datos["id"],
             'nombre' => $datos["nombre"],
             'email' => $datos["email"],
             'imagen' => $datos["imagen"]
          ]);
          //Supervisamos si la inserción se realizó correctamente... 
          if ($query) {
             $this->db->commit();  // commit() confirma los cambios realizados durante la transacción
             $return["correcto"] = TRUE;
          } // o no :(
       } catch (PDOException $ex) {
          $this->db->rollback(); // rollback() se revierten los cambios realizados durante la transacción
          $return["error"] = $ex->getMessage();
          //die();
       }
 
       return $return;
    }
 
    public function listausuario($id)
    {
       $return = [
          "correcto" => FALSE,
          "datos" => NULL,
          "error" => NULL
       ];
 
       if ($id && is_numeric($id)) {
          try {
             $sql = "SELECT * FROM usuarios WHERE id=:id";
             $query = $this->db->prepare($sql);
             $query->execute(['id' => $id]);
             //Supervisamos que la consulta se realizó correctamente... 
             if ($query) {
                $return["correcto"] = TRUE;
                $return["datos"] = $query->fetch(PDO::FETCH_ASSOC);
             } // o no :(
          } catch (PDOException $ex) {
             $return["error"] = $ex->getMessage();
             //die();
          }
       }
 
       return $return;
    }

   
    public function login($datos){

      $return = ['correcto' => FALSE ];

      try {
         $sql = "SELECT * FROM usuarios WHERE login =:usuario and password =:password";
         $query = $this->db->prepare($sql);

         //modificar
         $query->execute(['usuario'=> $datos['usuario'],'password' => $datos['password']]);

         //Supervisamos que la consulta se realizó correctamente... 
         if ($query) {

            $numUsuarios = $query ->fetchAll();

            
            if (count($numUsuarios)>0 ){

               /*SE GUARDAN DATOS DEL USUARIO*/

               $return["correcto"] = TRUE;
               $return['datos'] = $numUsuarios; 
            }


         } // o no :(
      } catch (PDOException $ex) {
         $return["error"] = $ex->getMessage();
         //die();
      }

      return $return;

    }


 }
 




  