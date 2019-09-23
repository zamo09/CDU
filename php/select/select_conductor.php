<?php 
	session_start();
	require "../conexion/conexion.php";
	require "../log.php";
	if (isset($_POST["id_unidad"])){
        $id_unidad = mysqli_real_escape_string($con, $_POST["id_unidad"]);
        $usuario = $_SESSION['user'];
		$sql =$con->query("SELECT id_conductor, id_ruta FROM Conductor WHERE id_unidad ='$id_unidad' AND activo = 1");
		$num_row = mysqli_num_rows($sql);
		if ($num_row == "1"){
			$data = mysqli_fetch_array($sql);
			$id_conductor = $data['id_conductor'];
			$id_ruta = $data['id_ruta'];
			date_default_timezone_set("America/Mexico_City"); 
        	$fecha= date("Y/m/d H:i:s");
			$arreglo[0] = array("Inicio seleciono la unidad  ". $id_unidad . " Para dar una salida",$fecha, $usuario);
			generarCSV($arreglo);
			$_SESSION['motivo_salida'] = $id_ruta;
			echo $id_conductor;			
		}else{
			echo "error";
		}
	}else{
		echo "error";
	}
?>