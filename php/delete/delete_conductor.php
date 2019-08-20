<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["nombre"]) && isset($_POST["id"]) && isset($_POST["pass"])){
		$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
        $id_conductor = mysqli_real_escape_string($con, $_POST["id"]);
        $pass = mysqli_real_escape_string($con, $_POST["pass"]);
        date_default_timezone_set("America/Mexico_City"); 
        $fecha= date("d/m/Y H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];   
        $sql =$con->query("SELECT nombre, tipo FROM usuarios WHERE id_usuario = '$id' AND contrasena='$pass' AND activo = 1 AND tipo = 'root'");
        $num_row = mysqli_num_rows($sql);
		if ($num_row == "1"){
            $sql =$con->query("DELETE FROM conductor WHERE id_conductor = $id_conductor;");
            if ($sql){
                $arreglo[0] = array("Se Elimino Permanentemente al conductor ". $nombre,$fecha ,$usuario);
                generarCSV($arreglo);
                echo "1";
            }else{
                echo "error";
                $arreglo[0] = array("No se logro eliminar permanentemente al conductor  ". $nombre . " por algun problema",$fecha,$usuario);
                generarCSV($arreglo);
            }
        }else{
            echo "error";
                $arreglo[0] = array("No se logro borrar al conductor  ". $nombre . " por ingreso incorrecto de contraseña",$fecha,$usuario);
                generarCSV($arreglo);
        }
        
        
    }
?>