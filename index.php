<?php

require_once("core/conectar.php");
try{
    $conexion = new Conectar();

$con = $conexion->con();

$sql = "SELECT * FROM user";

 $stm = $con->prepare($sql);
 $stm->execute();
 $result = $stm->fetchAll(PDO::FETCH_OBJ);

 echo json_encode($result);


}catch(Exception $e){
    echo $e->getMessage();
}
?>