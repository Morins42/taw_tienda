<?php 

//conexion a la bd
require 'conexion.php';

//clase que maneja los cruds de la informacion
class Datos{
  
    //funcion de select en general
    public function select($query){
      //variable que recibe la respuesta de la sentencia
      $res = $this->con->query($query);
      return $res;
    }

    //funcion para eliminar
    public function delete($id, $table){
     //sentencia para eliminar
      $sql = "DELETE FROM $table WHERE id = ?";
      echo " -  - - - " . $sql ."<br>";
      //se prepara la sentencia para ser ejecutada
      $stmt = $this->con->prepare($sql);
      //se coloca el valor del parametro
      $stmt->bindValue(1, $id, PDO::PARAM_INT);
      //se ejecuta la sentencia
      $stmt->execute();
   }
   
  //funcion para traer un solo registrocon el id
  
  public function single($table, $id){
  
    //sentencia para eliminar
    
    $sql = "SELECT * FROM $table WHERE id = $id";
    
    //se realiza la consulta
    
    $res = $this->con->query($sql);
    
    return $res;
    
  }

  
  
  
  //funcion para actualizar un registro
  
  public function update($id, $nombre, $posicion, $carrera, $email, $table, $idP){

    
    
    $sql = "UPDATE $table SET id=$id, nombre='$nombre', posicion='$posicion', carrera='$carrera', email='$email' WHERE id='$idP'";
    
    
    
    //se prepara la sentencia
    
    $stmt = $this->con->prepare($sql);
    
    echo " - - - " . $sql;
    
    $stmt->execute();
    
  }

  
  
  //funcion para insertar un registro
  
  public function create($id, $nombre, $posicion, $carrera, $email, $table){
  
    //sentencia de insertar
    
    $sql = "INSERT INTO $table(id, nombre, posicion, carrera, email) VALUES ($id, '$nombre', '$posicion', '$carrera', '$email')";
    
    echo "------ ". $sql;
    
    //se prepara la sentencia
    
    $stmt = $this->con->prepare($sql);
    
    //se ejecuta el update
    
    $stmt->execute();
    
  }
  
  
}





?>