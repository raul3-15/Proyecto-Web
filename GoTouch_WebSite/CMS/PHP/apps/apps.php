<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apps</title>

<link href="../../css/css_generico.css" rel="stylesheet" type="text/css">
<link href="../../css/css_apps.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="../../../jquery.tinyscrollbar.min.js" type="text/javascript"></script>
<script src="../../js/js_apps.js"></script>

<?php include("conexion.php"); ?>

</head>

<body>
<div id="wrapper">

<header>
  	<h1>CMS</h1>
    <menu id="menu_principal">
      <li><a href="../noticias/noticias.php">NOTICIAS</a></li>
      <li><a class="active" href="apps.php">APPS</a></li>
      <li><a href="../Aboutus/aboutus.php">SOBRE NOSOTROS</a></li>
    </menu>
</header>

<div id="content">
  
  <div id = "div_formAgregarApp">
    <h1>Mantenimiento de apps</h1>
    <div id="div_form">
      <form action="mantenimientoApp.php" method='post' enctype='multipart/form-data'>
        <div id="div_listaApps">
         <select id="listaApps" name="listaApps">
           <option value='nueva'>-- Nueva --</option>
           	<?php 
				$consulta=mysql_query("select id_aplicacion, nombre from aplicacion order by nombre");
				while($filas=mysql_fetch_array($consulta))
				{
					$id=$filas['id_aplicacion'];
					$nombre=$filas['nombre'];
					echo "<option value={$id}>{$nombre}</option>";
				}
			?>
         </select>
        </div>
        <div><div>Nombre </div><input id="nombreApp" name="nombreApp" type="text"></div>
        <div id="desc"><div>Descripción </div> <textarea id="descripcionApp" name="descripcionApp" cols="" rows=""></textarea></div>
        <div><div>Icono para el menú </div><input id="iconoApp" name="iconoApp" class="file" type="file" accept="image/x-png"></div>
        <div><div>Imagenes para el slider </div>
          <div id="imgsSlider">
            <input id="img1" name="img1" class="file" type="file" accept="image/x-png">
            <input id="img2" name="img2" class="file" type="file" accept="image/x-png">
            <input id="img3" name="img3" class="file" type="file" accept="image/x-png">
          </div>
        </div>
        <div id="vinculosVideos"><div>Vinculos de videos para el slider </div><input type="text"><input name="" type="button" value="Agregar más"></div>
        <div><div>Achivos para descarga </div><input class="file"type="file" multiple></div>
        <div id="div_guardar"><input name="guardar" type="submit" value="Guardar" onClick="return validarFormArgregarApp()"></div>
      </form>
    </div>
  </div>

</div>

</div>

	<footer>
	  	<div>
			<a href="../../../Public/html/home.html">SALIR</a>
	    </div>
    </footer>
	
</body>

<?php mysql_close($con); ?>

</html>
