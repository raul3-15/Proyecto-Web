<?php
	$con = mysql_connect("terraba.ic-itcr.ac.cr","rmoreno","rmoreno");
	if (!$con){
		die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("rmoreno123", $con);
?>		
	
