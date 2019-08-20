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
        $sql =$con->query("SELECT  id_ruta, id_unidad FROM conductor WHERE id_conductor = '$id_conductor'  AND activo = 1");
		$num_row = mysqli_num_rows($sql);
		if ($num_row == "1"){
			$data = mysqli_fetch_array($sql);
			$id_ruta = $data['id_ruta'];
			$id_unidad = $data['id_unidad'];
            $sql =$con->query("UPDATE conductor SET  activo = 0, id_unidad = 1 WHERE id_conductor = $id_conductor;");
            if ($id_ruta == "1"){
                if($id_unidad == "1"){
                    $arreglo[0] = array("Se elimino al conductor ". $nombre,$fecha ,$usuario);
                    generarCSV($arreglo);
                    echo "1";
                }else{
                    $sql =$con->query("UPDATE unidades SET  asignada = 1 WHERE id_unidad = $id_unidad;");
                    $arreglo[0] = array("Se guardo la ruta ". $nombre,$fecha ,$usuario);
                    generarCSV($arreglo);
                    echo "1";       
                }
            }else{
                $sql =$con->query("UPDATE rutas SET  asignacion = 1 WHERE id_ruta = $id_ruta;");
                if($id_unidad == "1"){

                }else{
                    $sql =$con->query("UPDATE unidades SET  asignada = 1 WHERE id_unidad = $id_unidad;");
                    $arreglo[0] = array("Se Elimino al conductor ". $nombre,$fecha ,$usuario);
                    generarCSV($arreglo);
                    echo "1";
                }
            }
		}else{
            echo "error";
            $arreglo[0] = array("No se logro eliminar al conductor  ". $nombre . " por algun problema",$fecha,$usuario);
            generarCSV($arreglo);
        }
    }
?>