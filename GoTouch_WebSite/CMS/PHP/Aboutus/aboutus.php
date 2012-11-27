<html>
<head>
	<meta charset="utf-8">
	<title>Inicio</title>	
	<link href="../../css/css_generico.css" rel="stylesheet" type="text/css">
	<link href="../../css/css_aboutus.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

</head>
<!-- Script para agregar miembro -->
<script>
	function agregarMiembro()
	{
		var nombreMiembro = document.getElementById("nombreMiembro").value;
		var puestoMiembro = document.getElementById("puestoMiembro").value;
		var deM = document.getElementById("descripcionMiembro").value;
		
		if(nombreMiembro != "")
		{
			if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
  					xmlhttp=new XMLHttpRequest();
				 }
			else{// code for IE6, IE5
  					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
					xmlhttp.onreadystatechange=function()
					{
  						if (xmlhttp.readyState==4 && xmlhttp.status==200)
    					{
xmlhttp.open("GET","agregarMiembro.php?nombre="+nombreMiembro+"&puestoMiembro="+puestoMiembro+"&dMiembro="+deM,true); 
							xmlhttp.send();
						
					}}
		}
	}
	
		function validarContenido(){

		var string = document.getElementById("nombreMiembro").value;
		var string1 = document.getElementById("puestoMiembro").value;
		var string2 = document.getElementById("descripcionMiembro").value;
		if(string == ""){
			alert("Debe de ingresar un nombre de miembro");	
			}	
		else if (string1 == "")
		{	
			alert("Debe de ingresar un puesto de miembro");	
		}
		else if (string2 == "")
		{
			alert("Debe de ingresar una descripcion de miembro");	
		}
		}		
	

	

</script>
<body>
	<div id="wrapper">

<header>
  	<h1>CMS</h1>
    <menu id="menu_principal">
      <li><a href="../noticias/noticias.php">NOTICIAS</a></li>
      <li><a href="../apps/apps.php">APPS</a></li>
      <li><a  class="active" href="aboutus.php">SOBRE NOSOTROS</a></li>
    </menu>
</header>

<div id="content"></div>
	  <div id="div_form">
    	  <h1> Agregar nuevo miembro </h1>
      		<form action="agregarMiembro.php">
        		<div><div>Nombre </div><input type="text" id="nombreMiembro" name="nombreMiembro"></div>
        		<div><div>Puesto </div><input type="text" id="puestoMiembro" name="puestoMiembro"></div>
            	<div id="desc"><div>Descripción </div>
                 <textarea cols="" rows="" name="descripcionMiembro" id="descripcionMiembro"></textarea></div>
        		<div><div>Foto </div>
          		<input id="fotoMiembro" name="fotoMiembro" class="file" type="file" accept="image/x-png">
        		<div id="guardar"><input name="" type="submit" value="Guardar" onclick="validarContenido();"></div>
      		</form>
    	</div>
</div>

<footer>

  <div>	
	  <a href="../../../Public/html/generico.html">SALIR</a>
  </div>
  
</footer>
</body>
</html>

