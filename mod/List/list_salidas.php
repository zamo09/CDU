<div class="container-fluid animated login zoomIn">    
	<div class="row ">   
		<div class="col-md-12">                 	
			<div class="card">
				<div class="card-body">
                <button class="btn btn-warning" id ="exportar" style="position: absolute;">Exportar</button>
                    <h3 class="text-center default-text py-3"><i class="far fa-list-alt"></i> Lista de Movimientos</h3> 
<?php
include("../../php/conexion/conexion.php");	
include "../../php/log.php";
session_start();
$selectunidades = $con->query("SELECT M.id_movimiento, U.nombre, C.nombre, M.hora_salida, M.hora_retorno, M.km_salida, M.km_retorno,M.ubicacion, A.nombre, M.estado FROM unidades U, conductor C, movimientos M, actividades A
WHERE U.id_unidad = M.id_unidad AND C.id_conductor = M.id_conductor AND A.id_actividad = M.id_actividad Order By M.estado DESC, M.hora_retorno;");
?>
 
                        <table id="tbUnidades" class="tablasamy" >
						<thead >
							<tr>
								<th class="text-center">Unidad</th>
                                <th class="text-center">Conductor</th>
                                <th class="text-center">Hr Salida</th>
                                <th class="text-center">Hr Retorno</th>
                                <th class="text-center">Km Salida</th>
                                <th class="text-center">Km Retorno</th>
                                <th class="text-center">Recorrido</th>
                                <th class="text-center">Ubicacion</th>
                                <th class="text-center">Actividad</th>
								<th class="text-center">Accion</th>
                            </tr>
						</thead>
							<?php
							while ($fila = $selectunidades->fetch_row()){
                                if($fila[9] == 1){
                                    echo '<tr class="filaVerde">';
                                }else{
                                    echo '<tr class="filaRoja">';
                                }								
                                echo '<td class="text-center celdasamy">' . $fila[1] . '</td>';
                                echo '<td class="text-center celdasamy">' . $fila[2] . '</td>';
                                echo '<td class="text-center celdasamy">' . $fila[3] . '</td>';
                                echo '<td class="text-center celdasamy">' . $fila[4] . '</td>';
                                echo '<td class="text-center celdasamy">Km ' . $fila[5] . '</td>';
                                echo '<td class="text-center celdasamy">Km ' . $fila[6] . '</td>';
                                if ($fila[6] == ""){
                                    echo '<td class="text-center celdasamy">En Proceso</td>';
                                }else{
                                    echo '<td class="text-center celdasamy">Km ' . ($fila[6] - $fila[5]) . '</td>';
                                }
                               
                                echo '<td class="text-center celdasamy">' . $fila[7] . '</td>';
                                echo '<td class="text-center celdasamy">' . $fila[8] . '</td>';
								echo '<td class="text-center celdasamy"><a onClick="EliminarConductor('.$fila[0].',\''.$fila[1].'\')" id="eliminarconductor" class="text-light btn btn-danger btn-sm"><i class="fas fa-address-book"></i> Borrar</a>
								<a onClick="modEmpleado('.$fila[0].')" id="modificarusuario" class="text-light btn btn-info btn-sm"><i class="fas fa-edit"></i> Modificar</a>
								</td>';
								echo '</tr>';
                            }
                            date_default_timezone_set("America/Mexico_City"); 
													$fecha= date("d/m/Y H:i:s");
													$arreglo[0] = array("Se abrio la lista de Conductores ",$fecha ,$_SESSION['user']);
													generarCSV($arreglo);

							?> 
					</table>
				</div>
			</div>

		</div>
	</div>
		</div>
    <script>
        $(document).ready(function () {

            $('#tbUnidades').DataTable( {
                "ordering": false //evita que la tabla se ordene por el nombre del conductor
    } );
        });

        function download_csv(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV FILE
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // We have to create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Make sure that the link is not displayed
    downloadLink.style.display = "none";

    // Add the link to your DOM
    document.body.appendChild(downloadLink);

    // Lanzamos
    downloadLink.click();
}

function export_table_to_csv(html, filename) {
	var csv = [];
	var rows = document.querySelectorAll("table tr");
	
    for (var i = 0; i < rows.length; i++) {
		var row = [], cols = rows[i].querySelectorAll("td, th");
		
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
		csv.push(row.join(","));		
	}

    // Download CSV
    download_csv(csv.join("\n"), filename);
}

document.querySelector("#exportar").addEventListener("click", function () {
    var html = document.querySelector("table").outerHTML;

    swal({
  title: "De verdad quieres Exportar?",
  text: "Escribe el nombre del archivo que crearas",
  icon: "info",
  buttons: {
    cancel: true,
    confirm: "Confirm",
  },
  content: {
    element: "input",
    attributes: {
      placeholder: "Nombre del archivo a generar",
      type: "text",
    },
  },
})
.then((value) => {
    if(value == null){
        swal({
    title: "Exportacion Cancelada",
    text: "No se realizo ninguna exportacion",
    icon: "warning",
  });
    }else{
        export_table_to_csv(html, value + ".csv");
    }    
    });
});    
</script>