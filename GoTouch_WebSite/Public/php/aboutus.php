<?php
	include("../Conexion.php");
?>
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

<div id="content">
		  <div class="div_iniciativa">        
            	<table id="tabla_acercanosotros" >
					<tr>
					<td>						
						<br>Iniciativa           GoTouch                        
						<br>												
				</td>
				</tr>
				</table>
                </br>
                 <p id="iniciativagt">
                        GoTouch es una iniciativa cuyo objetivo es desarrollar juegos y aplicaciones educativas para la plataformas 	    					    					moviles iOS y Android. Se pretende que sean desarrollos de primer nivel, que colaboren en la promocion a nivel    	  						nacional e internacional de la Escuela de Computacion del ITCR, del Centro de Investigaciones de Computacion    		 						(CIC) y del Tecnologico de Costa Rica (TEC); como centro de enseñanza y desarrollo de excelencia en las ciencias  del    					continente Americano. Se busca que las aplicaciones resuelvan ciertas necesidades del pueblo costarricense, y que    					  						los juegos promuevan el aprendizaje autodidacta.
                  </p>
              
              </div>
               
           
            <div class="div_escuelacomputacion">
            <table id="tabla_acercanosotrosec" >
					<tr>
					<td>						
						<br>Escuela de           Computacion                       
						<br>												
				</td>
				</tr>
				</table>
                </br>
                 <p id="iniciativagt">
                     La Escuela de Ingenieria en Computacion ha creado una solida reputacion como centro de excelencia en la 					 				    enseñanza y en la investigacion aplicada. Ofrece opciones academicas en la Sede Central y en la Sede Regional	   					  					de San Carlos. Cuenta ademas con el Centro de Investigaciones en Computacion (CIC), como una entidad cuyo  	 					   					proposito es contribuir con la solucion de problemas en la region Centroamericana y del Caribe mediante la 	 			 			   					realizacion de actividades orientadas a la generacion, adaptacion, incorporacion y
                    difusion de conocimientos informaticos.
                    
                    Director: Master Freddy Ramirez Mora.
                  </p>
            </div>
            
           
            <div class="div_cic">
              <table id="tabla_acercanosotroscic" >
					<tr>
					<td>						
						<br>Centro de Investigacion         en computacion                      
						<br>												
				</td>
				</tr>
				</table>
                </br>
                 <p id="iniciativagt">
                    El Centro de Investigaciones en Computacion (CIC) es una entidad adscrita a la Escuela de Ingenieria en Computacion del        			Instituto Tecnologico de Costa Rica. El CIC fue creado en 1992 y se apoya en el solido prestigio logrado por la     		  					Escuela en sus 35 años de existencia. El proposito del CIC es el de contribuir a la solucion de problemas en la  region     				Centroamericana y del Caribe mediante la realizacion de actividades orientadas a la generacion, adaptacion, incorporacion  					y difusion de conocimientos informaticos.
                  </p>
            </div>
            
            
            
</div>
<?php
	$consulta=mysql_query("select idMiembroEquipo, Nombre from MiembroEquipo order by Nombre");
				
?>

	<div id="div_contenido_slider">
                 <h3> NUESTRO EQUIPO </h3>
                <div id="div_slider_equipo">
                    <ul class="slides">
<?php
			while($filas=mysql_fetch_array($consulta))
	{
		$idMiembro = $filas['idMiembroEquipo'];
		$idMiembro;
		$ruta = "../../CMS/images/Miembros/".$idMiembro.".png";
		if(file_exists($ruta)) {
				echo "<li><img src={'$ruta'} alt='img1' /></li>";
			}
		 
	}
?>
                    </ul>
                    
                    <span class="flecha siguiente"></span>
                    <span class="flecha anterior"></span>
               <form action="aboutus_datoscontacto.php">
					<input type="submit" value="Salir">
				</form>
         </div>
      </div>


</div>


    <!-- Se inicia el slider-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="../js/about-us/slider.js"></script>


</body>
</html>
