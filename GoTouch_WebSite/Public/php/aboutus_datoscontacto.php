<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>

<link href="../css/css_generico.css" rel="stylesheet" type="text/css">
<link href="../css/css_sobrenosotros.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="wrapper">

<header>
  <div id="div_logo"><img src="../../images/logoGoTouch_Oficial.png"></div>
    <menu id="menu_principal">
      <li><a class="active" href="home.html">INICIO</a></li>
      <li><a href="noticias.html">NOTICIAS</a></li>
      <li><a href="../php/apps.php">APPS</a></li>
      <li><a href="sobreNosotros.html">SOBRE NOSOTROS</a></li>
      <li><a href="contacto.html">CONTACTO</a></li>
    </menu>
</header>

<div id="content"></div>
<?php
	include("../../CMS/PHP/Conexion.php");
	
	if(isset($_GET['miembro'])){
		$id_miembro = $_GET['miembro'];
		$consulta = mysql_query("select Nombre,Puesto,Descripcion from MiembroEquipo where idMiembroEquipo = ".$id_miembro);
		$filas = mysql_fetch_array($consulta);
		$nombre = $filas['Nombre'];
		$puesto = $filas['Puesto'];
		$descripcion = $filas['Descripcion'];
	}
	else {
		$consulta = mysql_query("select Nombre,Puesto,Descripcion from MiembroEquipo order by Nombre limit 1");
		$filas = mysql_fetch_array($consulta);
		$nombre = $filas['Nombre'];
		$puesto = $filas['Puesto'];
		$descripcion = $filas['Descripcion'];
	}
	
	

?>
    <div id="div_imagen">
   <h1><?php print ($nombre);?></h1>
	<h2><?php print ($puesto);?></h2>
	<img src="../../images/Pagina_sobrenosotros/foto_equipo.jpg" id="imagen_equipo">   
    </div>
    
    <p id="parrafo1">
    <?php print ($descripcion); ?>    	
    </p>
    
    
     

	<div id="div_contenido_slider">
                 <h3> NUESTRO EQUIPO </h3>
                <div id="div_slider_equipo">
                    <ul class="slides">
                        <li><img src="../../images/Pagina_sobrenosotros/foto_equipo.jpg" alt="img1" /></li>
                        <li><img src="../../images/Pagina_sobrenosotros/Equipo1.jpg" alt="img2" /></li>
                        <li><img src="../../images/Pagina_sobrenosotros/foto_equipo.jpg" alt="img3" /></li>
                        <li><img src="../../images/Pagina_sobrenosotros/foto_equipo.jpg" alt="img4" /></li>
                    </ul>
                    
                    <span class="flecha siguiente"></span>
                    <span class="flecha anterior"></span>
                </div>
      </div>

    </div>



    <!-- Se inicia el slider-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="../js/about-us/slider.js"></script>



</body>
</html>
