<?php
	include("../Conexion.php");
 	$nombreMiembro = $_GET["nombreMiembro"];
	$puestoMiembro = $_GET["puestoMiembro"];
	$descripcionMiembro = $_GET["descripcionMiembro"];

$sql = "insert into MiembroEquipo (Nombre,Puesto,Descripcion) values('{$nombreMiembro}','{$puestoMiembro}','{$descripcionMiembro}')";
	$result = mysql_query($sql);
	if(mysql_affected_rows($con) == 1)
	{
	echo mysql_insert_id($con);
	}
	else echo "error";

?>