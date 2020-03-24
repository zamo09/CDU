<?php 
	session_start();
    require "../conexion/conexion.php";
    require "../log.php";
	if (isset($_POST["id_uni"]) &&isset($_POST["nombre"]) && isset($_POST["conductor"]) && isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["placas"]) && isset($_POST["año"]) && isset($_POST["tipo"]) && isset($_POST["empresa"])){
        $id_uni =  mysqli_real_escape_string($con, $_POST["id_uni"]);
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
        $fecha= date("d/m/Y H:i:s");
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['user'];
        $sql_inicial =$con->query("SELECT * FROM unidades WHERE id_unidad =  $id_uni AND activo = 1");
        $num_row = mysqli_num_rows($sql_inicial);
        if ($num_row == "1"){
            $Unidad = mysqli_fetch_array($sql_inicial);
        }
        $find_nombre = $con ->query("SELECT id_unidad from unidades where nombre = '$nombre' or placas = '$placas' or asignada = '$conductor' or numeromotor = '$motor' or numeropoliza = '$poliza' and id_unidad !=  ; $id_uni");
        if(!empty($find_nombre) AND mysqli_num_rows($find_nombre) > 0){
                // el dato ya existe en la base de datos
        }else{
            $actualizacion = "UPDATE unidades SET  nombre = '$nombre', placas = '$placas', marca = '$marca',  modelo='$modelo', año='$año', tipo='$tipo', empresa ='$empresa', asignada = $conductor, numeromotor='$motor', numeropoliza='$poliza', fechapoliza='$fechapoliza' WHERE id_unidad = $id_uni;";
                $sql =$con->query($actualizacion);
                if($conductor == 1){
                    $sql =$con->query("UPDATE conductor SET id_unidad = 1 WHERE id_conductor =". $Unidad[10].";");
                }else{
                    $sql =$con->query("UPDATE conductor SET id_unidad = $id_uni WHERE id_conductor =". $conductor.";");
                }
            if ($sql == TRUE){
                $arreglo[0] = array("Se Actualizaron los datos de la Unidad ". $nombre, $fecha,$usuario);
                generarCSV($arreglo);
                echo "1";
            }else{
                echo "error";
                $arreglo[0] = array("No se logro actualizar la unidad  ". $nombre . " por algun problema",$fecha,$usuario);
                generarCSV($arreglo);
            }
        }
        
	}
?>