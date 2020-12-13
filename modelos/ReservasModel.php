<?php

/**
 *   Clase 'UserModel' que implementa el modelo de usuarios de nuestra aplicación en una
 * arquitectura MVC. Se encarga de gestionar el acceso a la tabla usuarios
 */
class ReservasModel extends BaseModel
{

   public function __construct()
   {
      // Se conecta a la BD
      parent::__construct();
      $this->table = "reservas";  
   }




   public function apuntarseActividad($datos){

    $return = ['correcto' => FALSE ];

      
      try {
         

         $sql2 = "SELECT * FROM reservas WHERE idActividad =:idActividad AND idUsuario =:idUsuario";

         
         $query2 = $this->db->prepare($sql2);

         $query2 ->execute(['idActividad' => $datos['idActividad'],'idUsuario' =>$datos['idUsuario']]);

         $numReservas = $query2 -> fetchAll();


         if(count($numReservas) > 0){

            $return["correcto"] = FALSE;

         }else{

            $sql = "INSERT into reservas VALUES (NULL,:idActividad,:idUsuario,current_date())";
            $query = $this->db->prepare($sql);

            //modificar
         $query->execute(['idActividad'=> $datos['idActividad'],'idUsuario' => $datos['idUsuario']]);
         
         
         if ($query) {

            $return["correcto"] = TRUE;

      }
         }
         

         //Supervisamos que la consulta se realizó correctamente... 
          // o no :(
      } catch (PDOException $ex) {
         $return["error"] = $ex->getMessage();
         //die();
      }

      return $return;

    }


public function listarReservas(){
    $return = [
      "correcto" => FALSE,
      "datos" => NULL,
      "error" => NULL
   ];
   //Realizamos la consulta...
   try {  //Definimos la instrucción SQL  
      $sql = "SELECT reservas.id,usuarios.login,actividades.nombre,actividades.dia,actividades.hora_inicio,reservas.fecha_reserva FROM reservas  JOIN  usuarios ON usuarios.id = reservas.idUsuario
                                                                                                           JOIN  actividades ON actividades.id = reservas.idActividad";
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


public function borrarReservas($id){
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
            $sql = "DELETE FROM reservas WHERE id=:id";
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


   public function listarMisReservas(){
      $return = [
        "correcto" => FALSE,
        "datos" => NULL,
        "error" => NULL
     ];
     //Realizamos la consulta...
     try {  //Definimos la instrucción SQL  
        $sql = "SELECT reservas.id,usuarios.login,actividades.nombre,actividades.dia,actividades.hora_inicio,reservas.fecha_reserva FROM reservas  JOIN  usuarios ON usuarios.id = reservas.idUsuario
                                                                                                             JOIN  actividades ON actividades.id = reservas.idActividad
                                                                                                             WHERE usuarios.id = usuarios.id";
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


}


   




