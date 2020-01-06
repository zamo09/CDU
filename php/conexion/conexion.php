<?php
	$con  = new mysqli("10.0.0.180","zamo","1614zamo","controlunidades");
	$con->set_charset("utf8");
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>