<?php

include "conexion.php";

$Id=$_POST["ID"];
$nombre=$_POST["nom"];
$apellidoPa=$_POST["apePa"];
$apellidoMa=$_POST["apeMa"];
$edad=$_POST["edad"];
$curp=$_POST["curp"];


$sql="INSERT INTO personales VALUES ('','$nombre','$apellidoPa','$apellidoMa', '$edad', '$curp')";
$result=mysql_query($sql,$conexion);
if($result){
  echo "datos guardados exitosamente";

}else{
  echo "Error al guardar la información: ".mysql_error();
}
mysql_close($conexion);
?>
