<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>

<link href="../css/css_generico.css" rel="stylesheet" type="text/css">
 <link href="../css/css_contacto.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

</head>
<script>
	function validarContenido(){

		var string = document.getElementById("nombre").value;
		var string1 = document.getElementById("correo").value;
		var string2 = document.getElementById("mensaje").value;
		if(string == "nombre"){
			alert("Debe de ingresar un nombre");	
			}	
		else if (string1 == "correo")
		{	
			alert("Debe de ingresar un correo");	
		}
		else if (string2 == "mensaje")
		{
			alert("Debe de ingresar un mensaje");	
		}
		}

</script>
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
  <div id="div_form">
                    <form id="formulario_nombre" action="contactosllenarinfo.php" method="post">
                        <ul id="contactform">
                            <li>
                                <label></label>
                                <span class="fieldbox"><input type="text" name="nombre" id="nombre" value=" nombre"/></span>
                            </li>	
                            <li>
                                <label></label>
                                </br>
                                <span class="fieldbox"><input type="text" name="correo" id="correo" value=" correo electronico"/></span>
                            </li>
                      </ul>
   				 	 </form>
    				<form id="formulario_mensaje" action="contactosllenarinfo.php" method="post">
                     	<ul id="contactform">
                            <li>
                                <label></label>
                                <span class="msgbox"><textarea class="area" id="mensaje" name="mensaje" rows="8" cols="30"> mensaje</textarea>		 			                   				 </span>
                            </li>
                        
                        </ul>
                        <input type="submit" value="enviar" id="sendbutton" name="sendbutton" onclick="validarContenido();"/>
         			</form>
                    </br>
                    </br>
 
            

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
