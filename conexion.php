<?php
$server="mysql.hostinger.mx";
$usuario="u330732779_laura";
$password="ana2224421266";
$baseDatos="u330732779_pc";


//$server="localhost";
//$usuario="root";
//$password="";
//$baseDatos="pc";

$conexion=mysql_connect($server, $usuario, $password) or die("Error al conectarse al servidor de base de datos".mysql_error());
mysql_select_db($baseDatos,$conexion);
?>
