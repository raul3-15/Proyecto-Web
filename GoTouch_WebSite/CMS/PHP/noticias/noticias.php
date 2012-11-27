<?php
	include '../session.inc';
	check_login();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Noticias | CMS</title>
        
        <link href="../../css/css_generico.css" rel="stylesheet" type="text/css">
        <link href="../../css/css_noticias.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>    
        <script src="../../js/js_noticias.js"></script>
        <?php include("agregarNoticia.php"); ?>
    </head>

    <body>
        <div id="wrapper">
            <header>
                <h1>CMS</h1>
                <menu id="menu_principal">
                    <li><a href="../../html/generico.html">INICIO</a></li>
                    <li><a class="active" href="noticias.php">NOTICIAS</a></li>
                    <li><a href="../apps/apps.php">APPS</a></li>
                    <li><a href="../Aboutus/aboutus.php">SOBRE NOSOTROS</a></li>
                </menu>
            </header>
        
	        <div id="content">
                <div id="div_form">
                    <h1> Agregar Noticia</h1>
                    <form action="agregarNoticia.php" method="post" enctype="multipart/form-data">
                        <div><div>Titulo </div><input id="input_titulo" type="text"></div>
                        <div id="desc"><div>Contenido </div> <textarea id="input_contenido" cols="" rows=""></textarea></div>
                        <div>Imagen <input id="input_file" class="file" type="file" accept="image/*"></div>
                        <div id="guardar"><input name="" type="submit" value="Guardar" onClick="return validarForm(this.form);"></div>
                    </form>
                </div>
           </div>
        </div>
            
        <footer>
            <div>
                <a href="../../../Public/html/home.html">SALIR</a>
            </div>
        </footer>    
    </body>
</html>
