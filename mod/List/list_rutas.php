<div class="container-fluid animated login zoomIn">    
	<div class="row ">   
		<div class="col-md-12">                 	
			<div class="card">
				<div class="card-body">
                <button class="btn btn-warning" id ="exportar" style="position: absolute;">Exportar</button>
                    <h3 class="text-center default-text py-3"><i class="far fa-list-alt"></i> Lista de Conductores</h3> 
<?php
include("../../php/conexion/conexion.php");	
include "../../php/log.php";
$selectunidades = $con->query("SELECT R.id_ruta, R.nombre, R.descripcion, C.nombre, U.nombre FROM rutas R, conductor C, usuarios U WHERE R.id_ruta = C.id_ruta AND R.asignacion = C.id_conductor AND R.id_usuario = U.id_usuario;");
?>
 
                        <table id="tbUnidades" class="display table">
						<thead class="thead-dark">
							<tr>
								<th class="text-center">Nombre</th>
                                <th class="text-center">Descripcion</th>
                                <th class="text-center">Conductor</th>
                                <th class="text-center">Alta</th>
								<th class="text-center">Accion</th>
                            </tr>
						</thead>
							<?php
							while ($fila = $selectunidades->fetch_row()){
								echo '<tr >';
                                echo '<td class="text-center">' . $fila[1] . '</td>';
                                echo '<td class="text-center">' . $fila[2] . '</td>';
                                echo '<td class="text-center">' . $fila[3] . '</td>';
                                echo '<td class="text-center">' . $fila[4] . '</td>';
								echo '<td class="text-center"><a onClick="eliminarEmpleado('.$fila[0].')" id="eliminarempleado" class="text-light btn btn-success btn-sm"><i class="fas fa-address-book"></i> Borrar</a>
								<a onClick="modEmpleado('.$fila[0].')" id="modificarusuario" class="text-light btn btn-info btn-sm"><i class="fas fa-edit"></i> Modificar</a>
								</td>';
								echo '</tr>';
                            }
                            date_default_timezone_set("America/Mexico_City"); 
													$fecha= date("d/m/Y H:i:s");
													session_start();
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
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
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
<style>
    .swal-overlay {
    background-color: rgba(216, 44, 44, 0.4);
</style>