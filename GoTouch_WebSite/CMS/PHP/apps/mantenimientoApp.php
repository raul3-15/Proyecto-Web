<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agregar App</title>
</head>
<body>

<?php

	include("conexion.php");
	
	if($_POST['listaApps'] == "nueva") {
		
		echo "</br><h2>Mantenimiento de apps</h2>";
	
		$res = mysql_query("INSERT INTO aplicacion (nombre, descripcion)
							VALUES ('{$_POST['nombreApp']}', '{$_POST['descripcionApp']}')", $con);
					
		if ($res) {
			
			$ultimo_id = mysql_insert_id($con);
								
			if($_FILES['iconoApp']['name'] != "") {
				$rutaTemporal=$_FILES['iconoApp']['tmp_name'];
				$rutaDestino='../../images/iconos/'.$ultimo_id.'.png';
				move_uploaded_file($rutaTemporal, $rutaDestino);
			}			
						
			if($_FILES['img1']['name'] != "") {
				$rutaTemporal=$_FILES['img1']['tmp_name'];
				$rutaDestino='../../images/slider/'.$ultimo_id.'1.png';
				move_uploaded_file($rutaTemporal, $rutaDestino);
			}
			
			if($_FILES['img2']['name'] != "") {
				$rutaTemporal=$_FILES['img2']['tmp_name'];
				$rutaDestino='../../images/slider/'.$ultimo_id.'2.png';
				move_uploaded_file($rutaTemporal, $rutaDestino);
			}
			
			if($_FILES['img3']['name'] != "") {
				$rutaTemporal=$_FILES['img3']['tmp_name'];
				$rutaDestino='../../images/slider/'.$ultimo_id.'3.png';
				move_uploaded_file($rutaTemporal, $rutaDestino);
			}
			
			echo '</br>Aplicación agregada con éxito';
			echo '</br><a href="apps.php">VOLVER</a>';
		}
		else {
			echo '</br>No se puedo insertar';
			echo '</br><a href="apps.php">VOLVER</a>';
		}
	}
	else {
		
		$id_app = $_POST['listaApps'];
		
		if($_POST['nombreApp'] != "") {
			$res = mysql_query("UPDATE aplicacion SET nombre = '{$_POST['nombreApp']}' where id_aplicacion = {$id_app}", $con);
			if ($res) {
				echo '</br>El nombre de la aplicación ha sido modificado correctamente';
			}
			else {
				echo '</br>Hubo un error al modificar el nombre de la aplicación';
			}
		}
		
		if($_POST['descripcionApp'] != "") {
			$res = mysql_query("UPDATE aplicacion SET descripcion = '{$_POST['descripcionApp']}' where id_aplicacion = {$id_app}", $con);
			if ($res) {
				echo '</br>La descripción de la aplicación ha sido modificada correctamente';
			}
			else {
				echo '</br>Hubo un error al modificar la descripción de la aplicación';
			}
		}
		
		if($_FILES['iconoApp']['name'] != "") {
			$rutaTemporal = $_FILES['iconoApp']['tmp_name'];
			$rutaDestino = '../../images/iconos/'.$id_app.'.png';
			if(file_exists($rutaDestino)) {
				unlink($rutaDestino);
			}
			move_uploaded_file($rutaTemporal, $rutaDestino);
			echo '</br>El ícono de la aplicación ha sido modificado correctamente';
		}
		
		if($_FILES['img1']['name'] != "") {
			$rutaTemporal = $_FILES['img1']['tmp_name'];
			$rutaDestino = '../../images/slider/'.$id_app.'1.png';
			if(file_exists($rutaDestino)) {
				unlink($rutaDestino);
			}
			move_uploaded_file($rutaTemporal, $rutaDestino);
			echo '</br>La primer imagen del slider de la aplicación ha sido modificada correctamente';
		}
		
		if($_FILES['img2']['name'] != "") {
			$rutaTemporal = $_FILES['img2']['tmp_name'];
			$rutaDestino = '../../images/slider/'.$id_app.'2.png';
			if(file_exists($rutaDestino)) {
				unlink($rutaDestino);
			}
			move_uploaded_file($rutaTemporal, $rutaDestino);
			echo '</br>La segunda imagen del slider de la aplicación ha sido modificada correctamente';
		}
		
		if($_FILES['img3']['name'] != "") {
			$rutaTemporal=$_FILES['img3']['tmp_name'];
			$rutaDestino='../../images/slider/'.$id_app.'3.png';
			if(file_exists($rutaDestino)) {
				unlink($rutaDestino);
			}
			move_uploaded_file($rutaTemporal, $rutaDestino);
			echo '</br>La tercer imagen del slider de la aplicación ha sido modificada correctamente';
		}
				
		echo '</br>Operación finalizada';
		echo '</br><a href="apps.php">VOLVER</a>';
	}
	
	mysql_close($con);
	
?>


</body>
</html>