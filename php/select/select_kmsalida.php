<?php 
	session_start();
	require "../conexion/conexion.php";
	require "../log.php";
	if (isset($_POST["id_unidad"])){
        $id_unidad = mysqli_real_escape_string($con, $_POST["id_unidad"]);
        $usuario = $_SESSION['user'];
		$sql =$con->query("SELECT km_salida FROM movimientos WHERE id_unidad ='$id_unidad' AND estado = 1");
		$num_row = mysqli_num_rows($sql);
		if ($num_row == "1"){
			$data = mysqli_fetch_array($sql);
			$km_salida = $data['km_salida'];
			date_default_timezone_set("America/Mexico_City"); 
        	$fecha= date("d/m/Y H:i:s");
			$arreglo[0] = array("Se selecciono la la unidad ". $id_unidad . " Para dar retorno",$fecha, $usuario);
			generarCSV($arreglo);					
			echo $km_salida;
		}else{
            echo "error";
		}
	}else{
		echo "error";
	}
?>