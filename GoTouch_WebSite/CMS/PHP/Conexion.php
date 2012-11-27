<?php
	//$con = mysql_connect("terraba.ic-itcr.ac.cr","rmoreno","rmoreno");
	$con = mysql_connect("localhost","root","mau");
	if (!$con){
		die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("gotouch", $con);
?>		
	
