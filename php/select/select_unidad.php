<?php 

	session_start();
	require "../conexion/conexion.php";
	require "../log.php";
	if (isset($_POST["id_unidad"])){
        $id_unidad = mysqli_real_escape_string($con, $_POST["id_unidad"]);
        $usuario = $_SESSION['user'];
			date_default_timezone_set("America/Mexico_City"); 
        	$fecha= date("d/m/Y H:i:s");
			$arreglo[0] = array("Se selecciono la la unidad ". $id_unidad . " Para dar Modificar",$fecha, $usuario);
			generarCSV($arreglo);
			$sql =$con->query("SELECT * FROM unidades WHERE id_unidad =  '$id_unidad' AND activo = 1");
			$num_row = mysqli_num_rows($sql);
			if ($num_row == "1"){
				$data = mysqli_fetch_array($sql);
                $nombre = $data['nombre'];
                $marca = $data['marca'];
                $modelo = $data['modelo'];
                $placa = $data['placas'];
                $año = $data['año'];
                $tipo = $data['tipo'];
                $empresa = $data['empresa'];
                $id_conductor = $data['asignada'];
                $motor = $data['numeromotor'];
                $poliza = $data['numeropoliza'];
                $fechapol = $data['fechapoliza'];
				$imprimir = $nombre . "-" . $marca . "-" . $modelo . "-" . $placa . "-" . $año  . "-" . $tipo . "-" . $empresa . "-" . $id_conductor . "-" . $motor . "-" . $poliza . "-" . $fechapol;	
			}else{
				$imprimir = "error";	
			}					
			echo $imprimir;		
	}else{
		echo "error";
	}
?>