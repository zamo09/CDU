<script type="text/javascript">

$('.minMaxExample2').datepicker({
    language: 'en',
    minDate: new Date() // Now can select only dates, which goes after today
});
</script>
<div class="container animated login zoomIn">
	<div class="row h-100 justify-content-center align-items-center">   
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
					<h3 class="text-center default-text py-3"><i class="fas fa-car-side"></i> Agregar Unidad</h3> 
						<div class="row justify-content-md-center">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Nombre de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="NombreUnidad" >
							</div>	    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
								<?php		
								include "../../php/conexion/conexion.php";		
								include "../../php/log.php";	
						                    		$SQL = "SELECT nombre,id_conductor FROM conductor WHERE activo = 1 AND id_ruta = 1;";
													$selectDepartamentos = $con->query($SQL);
													echo "<select class='custom-select form-control text-center' id='ConductorRuta'>";
													echo "<option value='' selected>Asignar Conductor...</option>";
													while ($fila = $selectDepartamentos->fetch_array()) {
														echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
													}
													echo "</select>";
													date_default_timezone_set("America/Mexico_City"); 
													$fecha= date("d/m/Y H:i:s");
													session_start();
													$arreglo[0] = array("Se abrio el formulario de Add_Unidad ",$fecha ,$_SESSION['user']);
													generarCSV($arreglo);
								?>
							</div>     
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Marca de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="MarcaUnidad" >
							</div>	            					                     	
						</div><br>
						<div class="row justify-content-md-center">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Modelo de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="ModeloUnidad" >
							</div>	    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Placas de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="PlacasUnidad" >
							</div>   
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Año de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="AñoUnidad" >
							</div>	            					                     	
						</div><br>
						<div class="row justify-content-md-center">
						<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Numero de motor " aria-label="Nombre" aria-describedby="basic-addon1" id="MotorUnidad" >
							</div> 
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Poliza de la unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="PolizaUnidad" >
							</div> 
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
								</div>
								<input type="text"  class="form-control text-center minMaxExample2"   data-date-format="yyyy/m/d" data-language='es' placeholder="Vencimiento poliza" id="FechaVencimientoPlizaUnidad">
							</div>	 
						</div><br>
						<div class="row justify-content-md-center">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Tipo de unidad" aria-label="Nombre" aria-describedby="basic-addon1" id="TipoUnidad" >
							</div>	    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
								</div>
								<select class="custom-select form-control text-center" id="SelectEmpresaUnidad">
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

