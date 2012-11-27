<?php
	session_start();
	$_SESSION['logged'] = 'no';
	echo '<script>window.location="../html/login.html"</script>';
?>