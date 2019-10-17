<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["id_unidad"]) && isset($_POST["lugar"]) && isset($_POST["km_retorno"]) && isset($_POST["fechaRetorno"])){
		$id_unidad = mysqli_real_escape_string($con, $_POST["id_unidad"]);
        $ubicacion = mysqli_real_escape_string($con, $_POST["lugar"]);
        $km_retorno = mysqli_real_escape_string($con, $_POST["km_retorno"]);
        $fechaRetorno = mysqli_real_escape_string($con, $_POST["fechaRetorno"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("d/m/Y H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];   
        $sql = $con->query("UPDATE movimientos SET  hora_retorno= '$fechaRetorno', km_retorno = $km_retorno, ubicacion = '$ubicacion' WHERE id_unidad = $id_unidad AND estado =1;");
        $sql = $con->query("UPDATE unidades SET  estado = 0 WHERE id_unidad = $id_unidad;");
        $sql = $con->query("UPDATE conductor SET  estado = 0 WHERE id_unidad = $id_unidad;");
		if ($sql){
            $arreglo[0] = array("Se realizo el regreso de la unidad $id_unidad ",$fecha ,$usuario);
            generarCSV($arreglo);
            echo "1";
        }else{
            echo "error";
            $arreglo[0] = array("No se logro  regresar la unida $id_unidad",$fecha,$usuario);
            generarCSV($arreglo);
        }
    }
?>