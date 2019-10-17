<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["id_ruta"]) && isset($_POST["id_conductor"])){
		$id_ruta = mysqli_real_escape_string($con, $_POST["id_ruta"]);
        $id_conductor = mysqli_real_escape_string($con, $_POST["id_conductor"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("d/m/Y H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];   
        $sql = $con->query("UPDATE conductor SET  id_ruta = $id_ruta WHERE id_conductor = $id_conductor;");
        $sql = $con->query("UPDATE rutas SET  asignacion = $id_conductor WHERE id_ruta = $id_ruta;");
		if ($sql){
            $arreglo[0] = array("Se asigno la ruta ". $id_ruta  . " al conductor " . $id_conductor,$fecha ,$usuario);
            generarCSV($arreglo);
            echo "1";
        }else{
            echo "error";
            $arreglo[0] = array("No se logro asignar la ruta ". $id_ruta  . " al conductor " . $id_conductor,$fecha,$usuario);
            generarCSV($arreglo);
        }
    }
?>