<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["id_unidad"]) && isset($_POST["id_conductor"])){
		$id_unidad = mysqli_real_escape_string($con, $_POST["id_unidad"]);
        $id_conductor = mysqli_real_escape_string($con, $_POST["id_conductor"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("d/m/Y H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];   
        $sql = $con->query("UPDATE conductor SET  id_unidad = $id_unidad WHERE id_conductor = $id_conductor;");
        $sql = $con->query("UPDATE unidades SET  asignada = $id_conductor WHERE id_unidad = $id_unidad;");
		if ($sql){
            $arreglo[0] = array("Se asigno la unidad ". $id_unidad  . " al conductor " . $id_conductor,$fecha ,$usuario);
            generarCSV($arreglo);
            echo "1";
        }else{
            echo "error";
            $arreglo[0] = array("No se logro asignar la unidad ". $id_unidad  . " al conductor " . $id_conductor,$fecha,$usuario);
            generarCSV($arreglo);
        }
    }
?>