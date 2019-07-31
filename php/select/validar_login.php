<?php 
	session_start();
	require "../conexion/conexion.php";
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
			echo "1";
		}else{
			echo "error";
		}
	}else{
		echo "error";
	}
?>