<script type="text/javascript">

$('.minMaxExample').datepicker({
    language: 'en',
    minDate: new Date() // Now can select only dates, which goes after today
});
</script>
<div class="container animated login zoomIn">
	<div class="row h-100 justify-content-center align-items-center">   
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
					<h3 class="text-center default-text py-3"><i class="fas fa-user-plus"></i> Agregar Conductor</h3> 
						<div class="row justify-content-md-center">
							<div class="input-group col-md-5">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control text-center" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" id="nombre" >
							</div>	    
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
								<select class="custom-select form-control text-center" id="inputGroupSelect01">
									<option selected>Empresa...</option>
									<option value="CBC">CBC</option>
									<option value="CBA">CBA</option>
								</select>
							</div>                   					                     	
						</div><br>
						<div class="row justify-content-md-center">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-industry"></i></label>
								</div>
								<select class="custom-select form-control text-center" id="inputGroupSelect01">
									<option selected>Departamento...</option>
									<!-- Aqui se llena con los departamentos de la base de datos -->
									<option value="CBC">Sistemas</option>
									<option value="CBA">Ventas</option>
								</select>
							</div>
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-address-card"></i></label>
								</div>
								<select class="custom-select form-control text-center" id="inputGroupSelect01">
									<option selected>Tipo de Licencia...</option>
									<!-- Aqui se llena con los departamentos de la base de datos -->
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
								</div>
								<input type="text"  class="form-control text-center minMaxExample"  data-language='es' placeholder="Fecha de Vencimiento" >
							</div>	 
						</div>
						<br>
						<div class="row justify-content-md-center">
							<div class="col-lg-4 col-md-12 col-sm-12 text-right">
								<button type="" class="btn btn-danger btn-lg btn-block" onClick="salida()"><i class="fas fa-times-circle "></i> Cancelar</button>
							</div><br>              
							<div class="col-lg-4 col-md-12 col-sm-12 text-left">
								<button type="submit" id="guardarpapeleria" class="btn btn-success btn-lg btn-block" onClick="agregarpapeleria()"><i class="fas fa-save"></i> Guardar</button>
							</div>
						</div> 
						<br>              	
				</div>
			</div>
		</div>
	</div>
</div>				

