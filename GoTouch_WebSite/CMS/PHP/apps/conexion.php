<?php

	$con = mysql_connect("localhost", "root", "mau");
	
	if (!$con)
	{
  		die('Could not connect: ' . mysql_error());
		echo '</br><a href="apps.php">VOLVER</a>';
  	}
	
	$db = mysql_select_db('gotouch', $con)or die('no existe la base de datos.');

?>