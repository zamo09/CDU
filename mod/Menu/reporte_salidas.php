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
					<h3 class="text-center default-text py-3"><i class="fas fa-car-side"></i> Reporte de Salidas</h3> 
						<div class="row justify-content-md-center">
                        <div class="input-group col-md-4">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
								<?php	
								include "../../php/conexion/conexion.php";		
								include "../../php/log.php";
								session_start();		
						                    		$SQL = "SELECT nombre,id_unidad FROM unidades WHERE activo = 1 AND asignada = 1;";
													$selectDepartamentos = $con->query($SQL);
													echo "<select class='custom-select form-control text-center' id='SelectUnidadConductor'>";
													echo "<option value='' selected>Seleccionar Unidad ...</option>";
													while ($fila = $selectDepartamentos->fetch_array()) {
														echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
													}
													echo "</select>";
													date_default_timezone_set("America/Mexico_City"); 
													$fecha= date("d/m/Y H:i:s");
													$arreglo[0] = array("Se abrio el formulario de Add_conductor ",$fecha ,$_SESSION['user']);
													generarCSV($arreglo);
								?>
							</div>    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
								<?php		
						                    		$SQL = "SELECT nombre,id_conductor FROM conductor WHERE activo = 1 AND id_unidad = 1;";
													$selectDepartamentos = $con->query($SQL);
													echo "<select class='custom-select form-control text-center' id='ConductorUnidad'>";
													echo "<option value='' selected>Asignar Conductor...</option>";
													while ($fila = $selectDepartamentos->fetch_array()) {
														echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
													}
													echo "</select>";
													date_default_timezone_set("America/Mexico_City"); 
													$fecha= date("d/m/Y H:i:s");
													$arreglo[0] = array("Se abrio el formulario de Reporte de salidas ",$fecha ,$_SESSION['user']);
													generarCSV($arreglo);
								?>
							</div>     
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
								</div>
								<input type="text"  class="form-control text-center datepicker-here" data-timepicker="true" data-time-format='hh:ii aa' data-language='es' placeholder="Fecha de Salida" id="FechaSalidaReporte">
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
<script>
    // Create start date
    var start = new Date(),
        prevDay,
        startHours = 7;

    // 07:00 AM
    start.setHours(7);
    start.setMinutes(0);

    // If today is Saturday or Sunday set 10:00 AM
    if ([6, 0].indexOf(start.getDay()) != -1) {
        start.setHours(10);
        startHours = 10
    }

    $('#FechaSalidaReporte').datepicker({
        timepicker: true,
        language: 'en',
        startDate: start,
        minHours: startHours,
        maxHours: 22,
        onSelect: function (fd, d, picker) {
            // Do nothing if selection was cleared
            if (!d) return;

            var day = d.getDay();

            // Trigger only if date is changed
            if (prevDay != undefined && prevDay == day) return;
            prevDay = day;

            // If chosen day is Saturday or Sunday when set
            // hour value for weekends, else restore defaults
            if (day == 6 || day == 0) {
                picker.update({
                    minHours: 10,
                    maxHours: 16
                })
            } else {
                picker.update({
                    minHours: 7,
                    maxHours: 22
                })
            }
        }
    })
</script>
