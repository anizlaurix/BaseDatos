<?php

include "conexion.php";
$id=$_POST["ID"];

$sql="SELECT * FROM personales where Id= '$id'";

$res=mysql_query ($sql, $conexion);

	if($res){
	$datos= array();
	$i=0;
	while($fila=mysql_fetch_assoc($res)){
		$datos[$i]=$fila;
		$i=$i+1;
		}
	}else{
		echo"No se produjo ninguna respuesta: ".mysql_error();
		}
	echo json_encode($datos);
	mysql_close($conexion);


?>