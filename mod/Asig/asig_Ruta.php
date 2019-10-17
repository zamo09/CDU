<div class="container animated login zoomIn">
	<div class="row h-100 justify-content-center align-items-center">   
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
					<h3 class="text-center default-text py-3"><i class="fas fa-map-marker-alt"></i> Asignar Ruta</h3> 
						<div class="row justify-content-md-center">
                        <div class="input-group col-md-6">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
                                <?php		
                                include "../../php/conexion/conexion.php";		
								include "../../php/log.php";
								session_start();	
						                    		$SQL = "Select nombre, id_ruta FROM rutas WHERE activo = 1 and asignacion = 1 AND id_ruta <> 1;";
													$selectDepartamentos = $con->query($SQL);
													echo "<select class='custom-select form-control text-center' id='SelectRutaAsignar'>";
													echo "<option value='' selected>Asignar Ruta ...</option>";
													while ($fila = $selectDepartamentos->fetch_array()) {
														echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
													}
													echo "</select>";
													
								?>
							</div>	    
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
								<?php		
						                    		$SQL = "SELECT nombre,id_conductor FROM conductor WHERE activo = 1 AND id_ruta = 1 AND id_conductor <> 1;";
													$selectDepartamentos = $con->query($SQL);
													echo "<select class='custom-select form-control text-center' id='ConductorAsigRuta'>";
													echo "<option value='' selected>Asignar Conductor...</option>";
													while ($fila = $selectDepartamentos->fetch_array()) {
														echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
													}
													echo "</select>";
													date_default_timezone_set("America/Mexico_City"); 
													$fecha= date("d/m/Y H:i:s");
													$arreglo[0] = array("Se abrio el formulario de Asig_Ruta ",$fecha ,$_SESSION['user']);
													generarCSV($arreglo);
								?>
							</div>                        					                     	
						</div>
						<br>
						<div class="row justify-content-md-center">
							<div class="col-lg-4 col-md-12 col-sm-12 text-right">
								<button type="" class="btn btn-danger btn-lg btn-block" onClick="salida()"><i class="fas fa-times-circle "></i> Cancelar</button>
							</div><br>              
							<div class="col-lg-4 col-md-12 col-sm-12 text-left">
								<button type="submit" id="asignarRuta" class="btn btn-success btn-lg btn-block" onClick="asignarRuta()"><i class="fas fa-save"></i> Asignar</button>
							</div>
						</div> 
						<br>              	
				</div>
			</div>
		</div>
	</div>
</div>				

