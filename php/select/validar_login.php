<?php 
	session_start();
	require "../conexion/conexion.php";
	require "../log.php";
	if (isset($_POST["user"]) && isset($_POST["pass"])){
		$user = mysqli_real_escape_string($con, $_POST["user"]);
		$pass = mysqli_real_escape_string($con, $_POST["pass"]);
		$sql =$con->query("SELECT nombre, tipo, usuario, id_usuario FROM usuarios WHERE usuario = '$user' AND contrasena='$pass' AND activo = 1");
		$num_row = mysqli_num_rows($sql);
		if ($num_row == "1"){
			$data = mysqli_fetch_array($sql);
			$_SESSION['user'] = $data['usuario'];
			$_SESSION['tipo'] = $data['tipo'];
			$_SESSION['nombre'] = $data['nombre'];
			$_SESSION['id_usuario'] = $data['id_usuario'];
			date_default_timezone_set("America/Mexico_City"); 
        	$fecha= date("d/m/Y H:i:s");
			$arreglo[0] = array("Inicio Sesion el usuario ". $_SESSION['nombre'],$fecha, $_SESSION['user']);
            generarCSV($arreglo);
			echo "1";
		}else{
			echo "error";
		}
	}else{
		echo "error";
	}
?>