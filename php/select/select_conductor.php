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
        	$fecha= date("d/m/Y H:i:s");
			$arreglo[0] = array("Se selecciono la la unidad ". $id_unidad . " Para dar una salida",$fecha, $usuario);
			generarCSV($arreglo);
			$sql2 =$con->query("SELECT km_retorno, Ubicacion FROM Movimientos WHERE id_unidad = $id_unidad AND estado = 1;");
			$num_row2 = mysqli_num_rows($sql2);
			if ($num_row2 == "1"){
				$data2 = mysqli_fetch_array($sql2);
				$km = $data2['km_retorno'];
				$ubi = $data2['Ubicacion'];
				$imprimir = $id_conductor. "-" . $id_ruta . "-" . $km . "-" . $ubi;	
			}else{
				$imprimir = $id_conductor. "-" . $id_ruta ;	
			}
					
			echo $imprimir;
		}else{


			date_default_timezone_set("America/Mexico_City"); 
        	$fecha= date("d/m/Y H:i:s");
			$arreglo[0] = array("Se selecciono la la unidad ". $id_unidad . " Para dar una salida",$fecha, $usuario);
			generarCSV($arreglo);
			$sql2 =$con->query("SELECT km_retorno, Ubicacion FROM Movimientos WHERE id_unidad = $id_unidad AND estado = 1;");
			$num_row2 = mysqli_num_rows($sql2);
			if ($num_row2 == "1"){
				$data2 = mysqli_fetch_array($sql2);
				$km = $data2['km_retorno'];
				$ubi = $data2['Ubicacion'];
				$imprimir = "SinConductor-SinRuta-" . $km . "-" . $ubi;	
			}else{
				$imprimir = "error";	
			}
					
			echo $imprimir;
		}
	}else{
		echo "error";
	}
?>