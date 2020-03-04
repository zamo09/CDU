<script type="text/javascript">

$('.minMaxExample2').datepicker({
    language: 'en',
    minDate: new Date() // Now can select only dates, which goes after today
});
function miFuncion(id_unidad) {
		$.ajax({
		url: "../php/select/select_unidad.php",
        method: "POST",
        data: {id_unidad:id_unidad},
        cache: "false",
        beforeSend: function() {},
        success: function(data) {
          if (data == "error") {
            alert("no entra");
          } else{
				arreglo = data.split(".");
				document.getElementById("NombreUnidad").value = arreglo[0];
				document.getElementById("MarcaUnidad").value = arreglo[1];
				document.getElementById("ModeloUnidad").value = arreglo[2];
				document.getElementById("PlacasUnidad").value = arreglo[3];
				document.getElementById("AñoUnidad").value = arreglo[4];
				document.getElementById("MotorUnidad").value = arreglo[8];
				document.getElementById("PolizaUnidad").value = arreglo[9];
				document.getElementById("TipoUnidad").value = arreglo[5];		
				fecha =  convertDateFormat(arreglo[10]);
				document.getElementById("FechaVencimientoPlizaUnidad").value =fecha;		
				buscarSelect("ConductorUnidad", arreglo[7]);	
				buscarSelect("SelectEmpresaUnidad", arreglo[6]);
          }
        }
      });
};

function convertDateFormat(string) {
        var info = string.split('-').join('/');
        return info;
   };
</script>
<div class="container animated login zoomIn" >
	<div class="row h-100 justify-content-center align-items-center">   
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
					<h3 class="text-center default-text py-3"><i class="fas fa-car-side"></i> Modificar Unidad</h3> 
						<div class="row justify-content-md-center">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Nombre de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="NombreUnidad" title="Nombre de unidad">
							</div>	    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
								<?php		
								
								session_start();
								include "../../php/conexion/conexion.php";		
								include "../../php/log.php";	
						                    		$SQL = "SELECT nombre,id_conductor FROM conductor WHERE activo = 1 ;";
													$selectDepartamentos = $con->query($SQL);
													echo "<select class='custom-select form-control text-center' id='ConductorUnidad' title='Conductor de la unidad'>";
													echo "<option value='' selected>Asignar Conductor...</option>";
													while ($fila = $selectDepartamentos->fetch_array()) {
														echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
													}
													echo "</select>";
													date_default_timezone_set("America/Mexico_City"); 
													$fecha= date("d/m/Y H:i:s");
													$arreglo[0] = array("Se abrio el formulario de mod_Unidad ",$fecha ,$_SESSION['user']);
                                                    generarCSV($arreglo);
                                                    $id_unidad_modificar = $_POST['id_unidad'];
                                                    echo "<script>";
                                                    echo "miFuncion($id_unidad_modificar);";
                                                    echo "</script>";
								?>
							</div>     
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Marca de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="MarcaUnidad" title="Marca de la unidad">
							</div>	            					                     	
						</div><br>
						<div class="row justify-content-md-center">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Modelo de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="ModeloUnidad" title="Modelo de la unidad">
							</div>	    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Placas de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="PlacasUnidad" title="Placas de la unidad">
							</div>   
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Año de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="AñoUnidad" title="Año de la Unidad ">
							</div>	            					                     	
						</div><br>
						<div class="row justify-content-md-center">
						<div class="input-group col-md-4">
								<div class="input-group-prepend"> 
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Numero de motor " aria-label="Nombre" aria-describedby="basic-addon1" id="MotorUnidad" title="Numero del motor">
							</div> 
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Poliza de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="PolizaUnidad" title="Poliza de la unidad">
							</div> 
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
								</div>
								<input type="text"  class="form-control text-center minMaxExample2"   data-date-format="yyyy/m/d" data-language='es' placeholder="Vencimiento poliza" id="FechaVencimientoPlizaUnidad" title="Fecha de Vencimiento de la poliza">
							</div>	 
						</div><br>
						<div class="row justify-content-md-center">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Tipo de unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="TipoUnidad" title="Tipo de unidad">
							</div>	    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<select class="custom-select form-control text-center" id="SelectEmpresaUnidad" title="Empresa de la unidad">
									<option value="" selected>Empresa...</option>
									<option value="CBC">CBC</option>
									<option value="CBA">CBA</option>
								</select>
							</div>   	            					                     	
						</div><br>
						<br>
						<div class="row justify-content-md-center">
							<div class="col-lg-4 col-md-12 col-sm-12 text-right">
								<button type="" class="btn btn-danger btn-lg btn-block" onClick="salida()"><i class="fas fa-times-circle "></i> Cancelar</button>
							</div><br>              
							<div class="col-lg-4 col-md-12 col-sm-12 text-left">
								<button type="submit" id="guardarruta" class="btn btn-success btn-lg btn-block" onClick="agregarunidad()"><i class="fas fa-save"></i> Guardar</button>
							</div>
						</div> 
						<br>              	
				</div>
			</div>
		</div>
	</div>
</div>				

