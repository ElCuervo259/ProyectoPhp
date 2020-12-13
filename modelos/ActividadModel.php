<?php

/**
 *   Clase 'UserModel' que implementa el modelo de usuarios de nuestra aplicación en una
 * arquitectura MVC. Se encarga de gestionar el acceso a la tabla usuarios
 */
class ActividadModel extends BaseModel
{

   private $id;

   private $nombre;

   private $aforo;

   private $dia;

   private $hora_inicio;

   private $hora_fin;




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

   public function getAforo()
   {
      return $this->aforo;
   }

   public function setAforo($aforo)
   {
      $this->aforo = $aforo;
   }

   public function getdia()
   {
      return $this->dia;
   }

   public function setdia($dia)
   {
      $this->dia = $dia;
   }

   public function getHora_inicio()
   {
      return $this->hora_inicio;
   }

   public function setHora_Inicio($hora_inicio)
   {
      $this->hora_inicio = $hora_inicio;

   }

   public function getHora_fin()
   {
      return $this->hora_fin;
   }


/**
 * Funcion que listará el horario en la tabla de horario de actividades
 *
 * @return void
 */
   public function listadoHorario()
    {
       $return = [
          "correcto" => FALSE,
          "datos" => NULL,
          "error" => NULL
       ];
       //Realizamos la consulta...
       try {  //Definimos la instrucción SQL  
          $sql = "SELECT * FROM actividades";
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
     * Funcion que nos permitirá eliminar una actividad ya programa
     *
     * @param [type] $id
     * @return void
     */
    public function delActividad($id)
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
             $sql = "DELETE FROM actividades WHERE id=:id";
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



    public function actActividad($datos)
    {
       $return = [
          "correcto" => FALSE,
          "error" => NULL
       ];
 
       try {
          //Inicializamos la transacción
          $this->db->beginTransaction();
          //Definimos la instrucción SQL parametrizada 
          $sql = "UPDATE actividades SET nombre=:nombre, aforo=:aforo, dia =:dia,
                                    hora_inicio =:hora_inicio WHERE id=:id";
          $query = $this->db->prepare($sql);
          $query->execute([
             'id' => $datos["id"],
             'nombre' => $datos["nombre"],
             'aforo' => $datos["aforo"],
             'dia' => $datos["dia"],
             'hora_inicio' => $datos["hora_inicio"],
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


    public function addActividad($datos){
      $return = [
         "correcto" => FALSE,
         "error" => NULL
      ];

      try {
         //Inicializamos la transacción
         $this->db->beginTransaction();
         //Definimos la instrucción SQL parametrizada 
         $sql = "INSERT INTO actividades(nombre,aforo,dia,
                                      hora_inicio)
                         VALUES (:nombre,:aforo,:dia,:hora_inicio)";
         // Preparamos la consulta...
         $query = $this->db->prepare($sql);
        

         // y la ejecutamos indicando los valores que tendría cada parámetro
         $query->execute([
            
            'nombre' => $datos ["nombre"],
            'aforo' => $datos ["aforo"],
            'dia' => $datos ["dia"],
            'hora_inicio' => $datos["hora_inicio"],
            
            
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



    /**
 * Funcion que listará el horario en la tabla de horario de actividades
 *
 * @return void
 */
   public function comprobarHorario($datos)
   {
      $return = [
         "correcto" => FALSE,
         "error" => NULL
      ];
      //Realizamos la consulta...
      try {  //Definimos la instrucción SQL  
         $sql = "SELECT * FROM actividades WHERE dia =:dia
                                                 AND hora_inicio =:hora_inicio";
         $query = $this->db->prepare($sql);                                                 
         
         $query->execute (['dia' =>$datos['dia'],'hora_inicio' =>$datos['hora_inicio']]);
         //Supervisamos si la inserción se realizó correctamente... 
         if ($query) :

            $numActividad = $query -> fetchAll();

            if(count($numActividad)>0){
               $return["correcto"] = FALSE;
               
            }else{
               $return["correcto"] = TRUE;

            }

         endif; // o no :(
      } catch (PDOException $ex) {
         $return["error"] = $ex->getMessage();
      }

      return $return;
   }

}   