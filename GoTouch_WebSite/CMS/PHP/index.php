<?php
	//include 'session.inc';
	//check_login();
	session_start();
	if($_SESSION['logged'] != 'yes') {
		echo '<script>window.location="../html/login.html"</script>';
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio</title>

		<link href="../css/css_generico.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div id="wrapper">
			<header>
				<h1>CMS</h1>
				<menu id="menu_principal">
				  <li><a class="active" href="../html/generico.html">INICIO</a></li>
				  <li><a href="noticias/noticias.php">NOTICIAS</a></li>
				  <li><a href="apps/apps.php">APPS</a></li>
				  <li><a href="Aboutus/aboutus.php">SOBRE NOSOTROS</a></li>
				</menu>
			</header>
			<div id="content"></div>
		</div>

		<footer>
			<div>	
				<a href="../../Public/html/generico.html">SALIR</a>
				<form action="salir.php">
					<input type="submit" value="Salir">
				</form>
			</div>
	  
		</footer>
	</body>
</html>
