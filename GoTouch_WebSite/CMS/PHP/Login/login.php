<?php
	include '../session.inc';
	function check_auth($login,$contrasena) {
		if($login = 'administrador' && $contrasena = 'administrador'){
		return 4;}
	}
	if(isset($_POST['login']) &&($_POST['login'] == 'Log in') &&
	($uid = check_auth($_POST['login'],$_POST['password'])))
	{
		$_SESSION['uid'] = $_uid;
		header('Location: ../index.php');
	}else{
?>	
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>

<link href="../../css/css_generico.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="wrapper">

<header>
  	<h1>CMS</h1>
    <menu id="menu_principal">
      <li><a class="active" href="../../html/home.html">INICIO</a></li>
      <li><a href="../../html/noticias.html">NOTICIAS</a></li>
      <li><a href="../apps/apps.php">APPS</a></li>
      <li><a href="../../html/sobreNosotros.html">SOBRE NOSOTROS</a></li>
      <li><a href="../../html/contacto.html">CONTACTO</a></li>
    </menu>
</header>

<div id="content"></div>
	 <div id="div_form">
      <h1> Autenticación </h1>
      	<form action="login.php" method="POST">
        	<div><div>Login</div><input type="text" id="login" name="login"></div>
        	<div><div>Contraseña </div><input type="password"  id="contrasena" name="contrasena"></div>
         
        	<div id="registrarse"><input type="submit"  name="login" value="Log in"></div>
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
<?php
}
?>