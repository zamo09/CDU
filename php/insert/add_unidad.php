<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["nombre"]) && isset($_POST["conductor"]) && isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["placas"]) && isset($_POST["año"]) && isset($_POST["tipo"]) && isset($_POST["empresa"])){
		$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
        $conductor = mysqli_real_escape_string($con, $_POST["conductor"]);
        $marca =  mysqli_real_escape_string($con, $_POST["marca"]);
        $modelo =  mysqli_real_escape_string($con, $_POST["modelo"]);
        $placas =  mysqli_real_escape_string($con, $_POST["placas"]);
        $año =  mysqli_real_escape_string($con, $_POST["año"]);
        $tipo =  mysqli_real_escape_string($con, $_POST["tipo"]);
        $empresa =  mysqli_real_escape_string($con, $_POST["empresa"]);
        $motor = mysqli_real_escape_string($con, $_POST["motor"]);
        $poliza = mysqli_real_escape_string($con, $_POST["poliza"]);
        $fechapoliza = mysqli_real_escape_string($con, $_POST["fechapoliza"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("Y/m/d H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];
        if($conductor == '1'){
            $sql =$con->query("INSERT INTO Unidades (nombre,activo,marca,modelo,placas,año,tipo,id_usuario,empresa,asignada,numeromotor,numeropoliza,fechapoliza) VALUES ('$nombre',1,'$marca','$modelo','$placas','$año','$tipo',$id,'$empresa',0,'$motor','$poliza','$fechapoliza') ");
        }else{
            $sql =$con->query("INSERT INTO Unidades (nombre,activo,marca,modelo,placas,año,tipo,id_usuario,empresa,asignada,numeromotor,numeropoliza,fechapoliza) VALUES ('$nombre',1,'$marca','$modelo','$placas','$año','$tipo',$id,'$empresa',1,'$motor','$poliza','$fechapoliza') ");
            $sql =$con->query("UPDATE conductor SET id_unidad = (SELECT id_unidad FROM unidades WHERE nombre = '$nombre' AND marca = '$marca' AND empresa = '$empresa') WHERE id_conductor = $conductor;");
        }
		if ($sql){
            if($conductor == '1'){
                $arreglo[0] = array("Se guardo la Unidad ". $nombre,$fecha ,$usuario);
            }else{
                $arreglo[0] = array("Se guardo la Unidad ". $nombre." y se asigno al conductor " . $conductor,$fecha ,$usuario);
            }
            generarCSV($arreglo);
            echo "1";
		}else{
            echo "error";
            $arreglo[0] = array("No se logro guardar la unidad  ". $nombre . " por algun problema",$fecha,$usuario);
            generarCSV($arreglo);
		}
	}
?>