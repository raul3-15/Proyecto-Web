<?php
session_start();
include("../PHP/conexion.php");

//Obtener datos ingresados
if(isset($_POST['login']) && isset($_POST['contrasena'])) {
		
	$user = $_POST['login'];
	$pass = $_POST['contrasena'];
	
	$query = @mysql_query("SELECT idUsuario FROM Usuario WHERE nombreUsuario = '{$user}' AND contrasena = '{$pass}'");
	if($existe = @mysql_fetch_object($query)) {
		$_SESSION['logged'] = 'yes';
		echo '<script>window.location="../PHP/noticias/noticias.php"</script>';
	}
	else {
		echo '</br>El nombre de usuario o contrase&#241;a son incorrectos.';
		echo '</br><a href="login.php">VOLVER</a>';	
	}
}
else {
	echo '<script>window.location="login.html"</script>';
}


?>