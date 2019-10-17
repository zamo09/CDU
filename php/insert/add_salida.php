<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["id_unidad"]) && isset($_POST["id_conductor"]) && isset($_POST["fecha"]) && isset($_POST["km"]) && isset($_POST["ubi"]) && isset($_POST["activ"])){
		$id_unidad = mysqli_real_escape_string($con, $_POST["id_unidad"]);
        $id_conductor = mysqli_real_escape_string($con, $_POST["id_conductor"]);
        $fecha =  mysqli_real_escape_string($con, $_POST["fecha"]);
        $km =  mysqli_real_escape_string($con, $_POST["km"]);
        $ubi =  mysqli_real_escape_string($con, $_POST["ubi"]);
        $activ =  mysqli_real_escape_string($con, $_POST["activ"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("Y/m/d H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];
        $sql =$con->query("UPDATE Movimientos SET estado =0 where id_unidad = $id_unidad AND estado = 1;");
            $sql =$con->query("INSERT INTO movimientos (id_usuario, id_unidad, id_conductor, id_actividad, hora_salida, km_salida, activo, estado,ubicacion) VALUES ($id,$id_unidad,$id_conductor,$activ,'$fecha',$km,1,1,'$ubi');");
            $sql =$con->query("UPDATE Conductor SET estado = 1 where id_conductor = $id_conductor AND estado = 0;");
            $sql =$con->query("UPDATE Unidades SET estado = 1 where id_unidad = $id_unidad AND estado = 0;");
		if ($sql){
                $arreglo[0] = array("La unidad  ". $id_unidad . " Salio correctamente",$fecha ,$usuario);
            generarCSV($arreglo);
            echo "1";
		}else{
            echo "error";
            $arreglo[0] = array("No se logro sacar la unidad  ". $id_unidad . " por algun problema",$fecha,$usuario);
            generarCSV($arreglo);
		}
	}
?>