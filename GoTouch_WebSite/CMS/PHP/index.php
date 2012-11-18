<?php
	include 'session.inc';
	check_login();
?>
<!doctype html>
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
      <li><a class="active" href="home.html">INICIO</a></li>
      <li><a href="noticias.html">NOTICIAS</a></li>
      <li><a href="apps.html">APPS</a></li>
      <li><a href="sobreNosotros.html">SOBRE NOSOTROS</a></li>
      <li><a href="contacto.html">CONTACTO</a></li>
    </menu>
</header>

<div id="content"></div>

</div>

<footer>

  <div>	
  <a href="../../Public/html/generico.html">SALIR</a>
  </div>
  
</footer>


</body>
</html>
