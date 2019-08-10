<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["nombre"]) && isset($_POST["descripcion"])){
		$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
        $descripcion = mysqli_real_escape_string($con, $_POST["descripcion"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("d/m/Y H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];
        if(isset($_POST["conductor"])){
            $conductor = mysqli_real_escape_string($con, $_POST["conductor"]);
            $sql =$con->query("INSERT INTO rutas (nombre,descripcion,activo,disponible,id_usuario,asignacion) VALUES ('$nombre','$descripcion',1,0,'$id',$conductor);");
        }else{
            $sql =$con->query("INSERT INTO rutas (nombre,descripcion,activo,disponible,id_usuario) VALUES ('$nombre','$descripcion',1,0,'$id');");
        }
		if ($sql){
            $arreglo[0] = array("Se guardo la ruta ". $nombre,$fecha ,$usuario);
            generarCSV($arreglo);
            echo "1";
		}else{
            echo "error";
            $arreglo[0] = array("No se logro guardar la ruta  ". $nombre . " por algun problema en el conductor",$fecha,$usuario);
            generarCSV($arreglo);
		}
	}else{
        echo "error";
        $arreglo[0] = array("No se logro guardar la ruta  ". $nombre . " por algun problema en el nombre o la descripcion",$fecha,$usuario);
            generarCSV($arreglo);
    };
?>