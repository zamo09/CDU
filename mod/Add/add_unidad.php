<div class="container animated login zoomIn">
	<div class="row h-100 justify-content-center align-items-center">   
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
					<h3 class="text-center default-text py-3"><i class="fas fa-car-side"></i> Agregar Unidad</h3> 
						<div class="row justify-content-md-center">
							<div class="input-group col-md-5">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="far fa-map"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Nombre de la ruta" aria-label="Nombre" aria-describedby="basic-addon1" id="NombreRuta" >
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
													echo "<option value='' selected>Asignar Ruta ...</option>";
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
						</div><br>
						<div class="row justify-content-md-center">
							<div class="input-group col-md-12">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
                                </div>
                                <textarea type="text" class="form-control text-center" placeholder="Descripcion sobre la ruta"  aria-describedby="basic-addon1" id="DescripcionRuta" ></textarea>
							</div>
						</div>
						<br>
						<div class="row justify-content-md-center">
							<div class="col-lg-4 col-md-12 col-sm-12 text-right">
								<button type="" class="btn btn-danger btn-lg btn-block" onClick="salida()"><i class="fas fa-times-circle "></i> Cancelar</button>
							</div><br>              
							<div class="col-lg-4 col-md-12 col-sm-12 text-left">
								<button type="submit" id="guardarruta" class="btn btn-success btn-lg btn-block" onClick="agregarruta()"><i class="fas fa-save"></i> Guardar</button>
							</div>
						</div> 
						<br>              	
				</div>
			</div>
		</div>
	</div>
</div>				

