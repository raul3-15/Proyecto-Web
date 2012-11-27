<!doctype html>
<html>
    <head>
	    <meta charset="utf-8">
    	<title>Agregar Noticia</title>
    </head>
    <body>

	<?php
        include("../Conexion.php");
        $titulo = $_POST["input_titulo"];
        $contenido = $_POST["input_contenido"];
        $file = $_POST["input_file"];
        $res = mysql_query("INSERT INTO Noticia (Titulo,Contenido)
                                VALUES ('{$titulo}','{$contenido}')", $con);
        if ($res) {
            
            $ultimo_id = mysql_insert_id($con);
                                
            if($_FILES['iconoApp']['name'] != "") {
                $rutaTemporal=$_FILES['iconoApp']['tmp_name'];
                $rutaDestino='../../images/noticias/'.$ultimo_id.'.png';
                move_uploaded_file($rutaTemporal, $rutaDestino);
            }		
			echo '</br>Noticia agregada con éxito';
			echo '</br><a href="noticias.php">VOLVER</a>';	
        }else {
            echo '</br>Error al agregar noticia.';
            echo '</br><a href="noticias.php">VOLVER</a>';
        }
    ?>
	</body>
</html>