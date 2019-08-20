<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["nombre"]) && isset($_POST["id"])){
		$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
        $id_conductor = mysqli_real_escape_string($con, $_POST["id"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("d/m/Y H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];   
        $sql =$con->query("UPDATE conductor SET  activo = 1 WHERE id_conductor = $id_conductor;");
		if ($sql){
            $arreglo[0] = array("Se Restauro al conductor ". $nombre,$fecha ,$usuario);
            generarCSV($arreglo);
            echo "1";
        }else{
            echo "error";
            $arreglo[0] = array("No se logro restaurar al conductor  ". $nombre . " por algun problema",$fecha,$usuario);
            generarCSV($arreglo);
        }
    }
?>