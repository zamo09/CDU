<!-- Modal de Salida -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="text-center default-text py-3"><i class="fas fa-car-side"></i> Nueva Salida</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row justify-content-md-center">
					<div class="input-group col-md-6">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
						</div>
						<?php
						include "../php/conexion/conexion.php";
						include "../php/log.php";
						$SQL = "SELECT nombre,id_unidad FROM unidades WHERE activo = 1 AND estado = 0 ;";
						$selectDepartamentos = $con->query($SQL);
						echo "<select class='custom-select form-control text-center' id='SelectUnidadSalida'>";
						echo "<option value='' selected>Seleccionar Unidad...</option>";
						while ($fila = $selectDepartamentos->fetch_array()) {
							echo "<option value='" . $fila[1] . "'>" . $fila[0] . "</option>";
						}
						echo "</select>";
						date_default_timezone_set("America/Mexico_City");
						$fecha = date("d/m/Y H:i:s");
						$arreglo[0] = array("Se abrio el formulario de Add_Ruta ", $fecha, $_SESSION['user']);
						generarCSV($arreglo);
						?>
					</div>
					<div class="input-group col-md-6">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
						</div>
						<?php
						$SQL = "SELECT nombre,id_conductor FROM conductor WHERE activo = 1 AND estado = 0;";
						$selectDepartamentos = $con->query($SQL);
						echo "<select class='custom-select form-control text-center' id='ConductorSalida'>";
						echo "<option value='' selected>Asignar Conductor...</option>";
						while ($fila = $selectDepartamentos->fetch_array()) {
							echo "<option value='" . $fila[1] . "'>" . $fila[0] . "</option>";
						}
						echo "</select>";
						?>
					</div>
				</div><br>
				<div class="row justify-content-md-center">
					<div class="input-group col-md-6">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control text-center" placeholder="Fecha de Salida" id="FechaSalida" readonly>
					</div>
					<div class="input-group col-md-6">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						</div>
						<input type="number" class="form-control text-center" placeholder="Kilometraje salida" id="KmSalida" readonly onKeyPress="return soloNumeros(event)">
					</div>
				</div><br>
				<div class="row justify-content-md-center">
					<div class="input-group col-md-6">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
						</div>
						<select class="custom-select form-control text-center" id="SelectEmpresaUbicacion">
							<option value="" selected>Lugar ...</option>
							<option value="Bodega">Bodega</option>
							<option value="CBA">Av. 4</option>
							<option value="CBA">Puebla</option>
						</select>
					</div>
					<div class="input-group col-md-6">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-car-side"></i></span>
						</div>
						<?php
						$SQL = "SELECT nombre,id_actividad FROM Actividades WHERE activo = 1;";
						$selectDepartamentos = $con->query($SQL);
						echo "<select class='custom-select form-control text-center' id='MotivoSalida'>";
						echo "<option value='' selected>Motivo Salida...</option>";
						while ($fila = $selectDepartamentos->fetch_array()) {
							echo "<option value='" . $fila[1] . "'>" . $fila[0] . "</option>";
						}
						echo "</select>";
						$arreglo[0] = array("Se abrio el Registro de Salida", $fecha, $_SESSION['user']);
						generarCSV($arreglo);
						?>
					</div>
				</div>
				<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary"id=RegistrarSalida onClick="RegistrarSalida()">Registrar Salida</button>
			</div>
		</div>
	</div>
</div>