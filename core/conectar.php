<?php
class Conectar{




public function con(){
    $username="aplicacion";
    $passeword="1102714833juan";
    $host ="localhost";
    $basededatos="tamales";

    try{
        $conexion = new PDO("mysql:host=$host;dbname=$basededatos",$username, $passeword);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        echo "Conexión realizada Satisfactoriamente";
        return $conexion;
    }catch(Exception $e){
        echo $e->getMessage();
    }
   
   
   



}
}



?>