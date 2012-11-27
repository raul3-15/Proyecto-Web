<?php	
	$nombre = $_GET["nombre"];
	$correo = $_GET["correo"];
	$mensaje = $_GET["descripcion"];
	
	$to = "ree_ma91@hotmail.com";
	$subject = "Correo Contacto";
	$message = "Contacto" + $nombre + "Correo" + $correo + "Mensaje: " + $mensaje ;
	$from = "rbma91@gmail.com	";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);

?>