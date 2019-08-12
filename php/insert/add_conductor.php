<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["nombre"]) && isset($_POST["empresa"]) && isset($_POST["ruta"]) && isset($_POST["departamento"]) && isset($_POST["tipo"]) && isset($_POST["fecha"])){
		$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
        $empresa = mysqli_real_escape_string($con, $_POST["empresa"]);
        $ruta =  mysqli_real_escape_string($con, $_POST["ruta"]);
        $departamento =  mysqli_real_escape_string($con, $_POST["departamento"]);
        $tipo =  mysqli_real_escape_string($con, $_POST["tipo"]);
        $fechalic =  mysqli_real_escape_string($con, $_POST["fecha"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("Y/m/d H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];
            $sql =$con->query("INSERT INTO conductor (nombre,activo,departamento,id_ruta,empresa,id_usuario,fecha,tipolic,fechalic) VALUES ('$nombre',1,'$departamento',$ruta,'$empresa',$id,'$fecha','$tipo','$fechalic');");
            if($ruta == "1"){

            }else{
                  $sql =$con->query("UPDATE rutas SET asignacion = (SELECT id_conductor FROM conductor WHERE nombre = '$nombre' AND empresa = '$empresa' and departamento = $departamento) , disponible = 1 where id_ruta = $ruta ; ");
            }
		if ($sql){
            $arreglo[0] = array("Se guardo al conductor ". $nombre." y se asigno la ruta " . $ruta,$fecha ,$usuario);
            generarCSV($arreglo);
            echo "1";
		}else{
            echo "error";
            $arreglo[0] = array("No se logro guardar al conductor  ". $nombre . " por algun problema",$fecha,$usuario);
            generarCSV($arreglo);
		}
	}
?>