<?php
	include("../Conexion.php");
 	$nombreMiembro = $_GET["nombreMiembro"];
	$puestoMiembro = $_GET["puestoMiembro"];
	$dMiembro = $_GET["descripcionMiembro"];

$sql = "insert into MiembroEquipo (Nombre,Puesto,Descripcion) values('{$nombreMiembro}','{$puestoMiembro}','{$dMiembro}')";
	$result = mysql_query($sql);
	
	if($result)
	{
		$ultimo_id =  mysql_insert_id($con);
				print $ultimo_id;		
					
			if($_FILES["fotoMiembro"]["error"] > 0) 
			{
				echo "Error: " . $_FILES["fotoMiembro"]["error"] . "<br>";
				}
				else
				{
				$rutaTemporal= $_FILES['fotoMiembro']['tmp_name'];
				$rutaDestino='"../../CMS/images/Miembros/'.$ultimo_id.'.png';
				print $_FILES['fotoMiembro']['name'];
				move_uploaded_file($rutaTemporal, $rutaDestino);
			}			
	}


?>