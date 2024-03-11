<?php 
class Conexion{

  public function conexion(){

    $host = 'localhost';
    $dbname = 'hermeszone';
    $usuario ='root';
    $password ='';

          $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario,$password);
          $conexion -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //EVITA QUE SE GENEREN EMULACIONES
          $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //MUESTRA MENSAJES DE ERROR.
          return $conexion;

  }

}

?>