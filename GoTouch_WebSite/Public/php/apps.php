<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apps</title>

<link href="../css/css_generico.css" rel="stylesheet" type="text/css">
<link href="../css/bjqs.css" rel="stylesheet" type="text/css">
<link href="../css/css_slider.css" rel="stylesheet" type="text/css">
<link href="../css/css_apps.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="../../jquery.tinyscrollbar.min.js" type="text/javascript"></script>
<script src="../../bjqs-1.3.min.js"></script>
<script src="../js/js_apps.js"></script>


<?php 

	include("../../CMS/PHP/apps/conexion.php");
	
	if(isset($_GET['app'])){
		$id_app = $_GET['app'];
		$consulta = mysql_query("select nombre, descripcion from aplicacion where id_aplicacion = ".$id_app);
		$filas = mysql_fetch_array($consulta);
		$nombre = $filas['nombre'];
		$descripcion = $filas['descripcion'];
	}
	else {
		$consulta = mysql_query("select id_aplicacion, nombre, descripcion from aplicacion order by nombre limit 1");
		$filas = mysql_fetch_array($consulta);
		$id_app = $filas['id_aplicacion'];
		$nombre = $filas['nombre'];
		$descripcion = $filas['descripcion'];
	}
?>

</head>

<body>

<div id="wrapper">

<header>
  <div id="div_logo"><img src="../../images/logoGoTouch_Oficial.png"></div>
    <menu id="menu_principal">
      <li><a href="../html/home.html">INICIO</a></li>
      <li><a href="../html/noticias.html">NOTICIAS</a></li>
      <li><a class="active" href="apps.php">APPS</a></li>
      <li><a href="../html/aboutus.html">SOBRE NOSOTROS</a></li>
      <li><a href="../html/contactos.html">CONTACTO</a></li>
    </menu>
</header>

<div id="content">

  <div id="div_sliderMenuApps">
  	
  		<?php 
			
			echo "<select id='listaApps' name='listaApps'>";
			
			$consulta=mysql_query("select id_aplicacion, nombre from aplicacion order by nombre");
			while($filas=mysql_fetch_array($consulta))
			{
				echo "<option value={$filas['id_aplicacion']}>{$filas['nombre']}</option>";
			}
			
			echo "</select><input id='btnCargarApp' type='button' onClick='cargarApp()' value='Ver'>";
			
			$ruta = "../../CMS/images/iconos/".$id_app.".png";
			if(file_exists($ruta)) {
				echo "<img src='{$ruta}' style='float:right; margin:5px;'>";
			}
			
		?>
    
  </div>
  <div id="div_contentTop">
  
    <div id="div_sliderApp">
      <!--<img src="../images/musician.png"> -->
      <!-- start Basic Jquery Slider -->
      <ul class="bjqs">
      	<?php
			$ruta = "../../CMS/images/slider/".$id_app."1.png";
			if(file_exists($ruta)) {
				echo "<li><img src='{$ruta}'></li>";
			}
			$ruta = "../../CMS/images/slider/".$id_app."2.png";
			if(file_exists($ruta)) {
				echo "<li><img src='{$ruta}'></li>";
			}
			$ruta = "../../CMS/images/slider/".$id_app."3.png";
			if(file_exists($ruta)) {
				echo "<li><img src='{$ruta}'></li>";
			}
		?>
      </ul>
      <!-- end Basic jQuery Slider -->
    </div>
    
    <div id="div_infoApp">
    
      <div id="div_textoApp">
      <h1><?php echo "{$nombre}"; ?>
      </h1>
      <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport">
          <div class="overview">
            <p><?php echo "{$descripcion}"; ?></p>
          </div>
        </div>
      </div>
    
      <div id="div_tiendasDisponibles">
        <img src="../../images/appstore.png">
      </div>
    
    </div>
    
  </div>
  
  <div id="div_contentBottom">
  
    <div id="div_comentariosApp">
    
      <div id="div_tituloComentarios">
        <img src="../../images/rayita3.png">
        <h1>COMENTARIOS</h1>
        <img src="../../images/rayita4.png">
      </div>
      
      <div id="div_formComentarios">
        <form action="" method="get">
            <input id="txt_nombre" name="" type="text" value="nombre">
            <input id="txt_mail" name="" type="text" value="correo electrónico">
            <textarea id="area_mensaje" name="" cols="" rows="">mensaje</textarea>
            <div id="div_Enviar">
              <input id="btn_Enviar" type="button" value="enviar">
            </div>
        </form>
      </div>
      
      <img src="../../images/pico1.png">
      
    </div>
    
    <div id="div_descargasApp">
    
      <div id="div_tituloDescargas">
        <img src="../../images/rayita3.png">
        <h1>DESCARGAS</h1>
        <img src="../../images/rayita4.png">
      </div>
      
      <ul id="ul_listaDescargas">
        <li><a href="">Musician_Wallpaper_1</a></li>
        <li><a href="">Musician_Wallpaper_2</a></li>
        <li><a href="">Musician_Video_1</a></li>
        <li><a href="">Musician_Video_2</a></li>
        <li><a href="">Musician_Musica_1</a></li>
      </ul>
      <p>&nbsp;</p>
      
    </div>
    
  </div>

</div>
</div>

<footer>

  <div id="div_tituloFooter">
    <img src="../../images/rayita1.png">
    <p>Programa GoTouch del Tecnológico de Costa Rica</p>
    <img src="../../images/rayita2.png">
  </div>
  
  <div id="div_iconosFooter">
  
    <div class="div_icono">
      <p><img src="../../images/teléfono.png"/><span>8569-84572</span></p>
    </div>
    
    <div class="div_separadorIconoFooter">
      <img src="../../images/punto.png"/>
    </div>
    
    <div class="div_icono">   
      <p><img src="../../images/mail.png"/><span>gotouch.tec@gmail.com</span></p>
    </div>
    
    <div class="div_separadorIconoFooter">
      <img src="../../images/punto.png"/>
    </div>
    
    <div class="div_icono">    
      <p><a href="http://www.facebook.com/gotouch.tec?fref=ts" target="new"><img src="../../images/fb.png"/></a><span><a href="http://www.facebook.com/gotouch.tec?fref=ts" target="new">/gotouch.tec</a></span></p>
    </div>
  </div>
  
</footer>

</body>
</html>
