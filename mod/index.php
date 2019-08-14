<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../img/icons/l.ico" />
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/air-datepicker-master/css/datepicker.min.css">
    <link rel="stylesheet" href="../vendor/datatable/css/datatables.min.css">
	  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-5.9.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Hover-master/css/hover.css">    
	  <script type="text/javascript" src="../vendor/sweetalert/sweetalert.min.js"></script>
    <title>CDU</title>
</head>
<body  class="fixed-sn light-blue-skin fondo">


    <?php
        session_start();
        if(!isset($_SESSION["user"])){
  
            }else{
                //incluimos la barra de navegacion 
                include "mov/nav_bar.php";
              ?>
                <!-- <a href="../php/conexion/cerrar.php">Cerrar</a> --> 
              <?php  
            }
    ?>


<!-- PARTE DEL CODIGO AL VALIDAR EL USUARIO -->		
<div class="container-fluid" id="Contenedor">
<div id="wrapper" class="container h-100" >
				<div id="page-content-wrapper" class="row h-100 justify-content-center align-items-center" >
					

          <div class="container animated login zoomIn margensuperior">
	<div class="row h-100 justify-content-center align-items-center">   
  
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
        
    <!-- Registrar-->
  <div class="row card-body justify-content-md-center align-items-center text-center">
  <div class="col-md-9">
    <h3>Registrar <i class="fas fa-exchange-alt"></i></h3><br>
    <div class="row justify-content-md-center">
      <div class="col-md-3">
      <a href="#" class="btn btn-success button hvr-pulse hvr-bounce-to-right " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Salida <i class="fas fa-plane-departure"></i></a>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-danger button hvr-pulse hvr-bounce-to-right ">Regreso <i class="fas fa-plane-arrival"></i></button>
      </div>
    </div>
  </div>
</div>
  <!-- Fin de registrar -->
    <!-- Reportes-->
    <div class="row card-body justify-content-md-center align-items-center text-center">
  <div class="col-md-9">
    <h3>Reportes <i class="fas fa-car"></i></h3><br>
    <div class="row justify-content-md-center">
      <div class="col-md-4">
      <button type="button" class="btn btn-secondary button hvr-pulse hvr-bounce-to-right ">Reportar Falla <i class="fas fa-car-side"></i></button>
      </div>
      <div class="col-md-4">
      <button type="button" class="btn btn-warning button hvr-pulse hvr-bounce-to-right ">Reportar Accidente <i class="fas fa-car-crash"></i></button>
      </div>
      <div class="col-md-4">
      <button type="button" class="btn btn-primary button hvr-pulse hvr-bounce-to-right ">Registrar Vale <i class="fas fa-gas-pump"></i></button>
      </div>
    </div>
  </div>
</div>
  <!-- Fin de reportes -->
      <!-- Lavado-->
      <div class="row card-body justify-content-md-center align-items-center text-center">
  <div class="col-md-9">
    <h3>Lavado <i class="fas fa-bath"></i></h3><br>
    <div class="row justify-content-md-center">
      <div class="col-md-3">
      <button type="button" class="btn btn-success button hvr-pulse hvr-bounce-to-right ">Salida <i class="fas fa-paper-plane"></i></button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-danger button hvr-pulse hvr-bounce-to-right ">Regreso <i class="fas fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</div>
  <!-- Fin de Lavado -->
  </div>
</div>
        </div>
	</div></div>
					</div>
				</div>
</div>

</div><!-- Content -->
</div><!-- Wrapper"-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/air-datepicker-master/js/datepicker.js"></script>
    <script src="../vendor/air-datepicker-master/js/i18n/datepicker.en.js"></script>
    <script src="../vendor/air-datepicker-master/js/i18n/datepicker.es.js"></script>
    <script src="../vendor/datatable/js/datatables.min.js"></script>
    <script src="../vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
  	<script src="../js/mdb.min.js"></script>
	  <script src="../vendor/animsition/js/animsition.min.js"></script>
	  <script src="../vendor/bootstrap-4.3.1/js/popper.js"></script>
	  <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/countdowntime/countdowntime.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
//Metodos para agregar datos

//metodo para añadir al conductor
function agregarunidad(){
				var nombre = $('#NombreUnidad').val();
				var conductor = $('#ConductorUnidad').val();
        var marca = $("#MarcaUnidad").val();
        var modelo = $("#ModeloUnidad").val();
        var placas = $("#PlacasUnidad").val();
        var año = $("#AñoUnidad").val();
        var tipo = $("#TipoUnidad").val();
        var empresa = $("#SelectEmpresaUnidad").val();
        var motor = $("#MotorUnidad").val();
        var poliza = $("#PolizaUnidad").val();
        var fechapoliza = $("#FechaVencimientoPlizaUnidad").val();
				if ($.trim(nombre).length > 0 && $.trim(conductor).length > 0 && $.trim(marca).length > 0 && $.trim(modelo).length > 0 && $.trim(placas).length > 0 && $.trim(año).length > 0 && $.trim(tipo).length > 0 && $.trim(empresa).length > 0 && $.trim(motor).length > 0 && $.trim(poliza).length > 0 && $.trim(fechapoliza).length > 0){
					$.ajax({
						url: "../php/insert/add_unidad.php",
						method: "POST",
						data: {nombre:nombre, conductor:conductor, marca:marca, modelo:modelo, placas:placas, año:año, tipo:tipo, empresa:empresa, motor:motor, poliza:poliza, fechapoliza:fechapoliza},
						cache: "false",
						beforeSend:function(){
							$('#guardarunidad').val("Guardando...");
						},
						success:function(data){
							$('#guardarunidad').val("Guardar");
							if (data=="1"){
								swal("Perfecto!!", ("Ahora la unidad " + nombre + " ya esta en el sistema" ), "success");
                $("#Contenedor").load("Menu/conductor.php");
							}else{
								swal("Tenemos un problema", "No se pudo guardar la unidad" , "error");
							}
						}
					});
				} else {
					swal("No me engañes", "Por favor todos los datos necesarios" , "error");
				};
			};

//metodo para añadir al conductor
function agregarconductor(){
				var nombre = $('#NombreConductor').val();
				var empresa = $('#SelectEmpresaConductor').val();
        var ruta = $("#SelectRutaConductor").val();
        var departamento = $("#SelectDepartamentoConductor").val();
        var tipo = $("#TipoLicenciaConductor").val();
        var fecha = $("#FechaVencimientoConductor").val();
        var unidad = $('#SelectUnidadConductor').val();
				if ($.trim(nombre).length > 0 && $.trim(empresa).length > 0 && $.trim(ruta).length > 0 && $.trim(departamento).length > 0 && $.trim(tipo).length > 0 && $.trim(fecha).length > 0 && $.trim(unidad).length > 0){
					$.ajax({
						url: "../php/insert/add_conductor.php",
						method: "POST",
						data: {nombre:nombre, empresa:empresa, ruta:ruta, departamento:departamento, tipo:tipo, fecha:fecha, unidad:unidad},
						cache: "false",
						beforeSend:function(){
							$('#guardarconductor').val("Guardando...");
						},
						success:function(data){
							$('#guardarconductor').val("Guardar");
							if (data=="1"){
								swal("Perfecto!!", ("Ahora el conductor " + nombre + " ya esta en el sistema" ), "success");
                $("#Contenedor").load("Menu/conductor.php");
							}else{
								swal("Tenemos un problema", "No se pudo guardar el conductor" , "error");
							}
						}
					});
				} else {
					swal("No me engañes", "Por favor todos los datos necesarios" , "error");
				};
			};

//Agregar Ruta
function agregarruta(){
				var nombre = $('#NombreRuta').val();
				var descripcion = $('#DescripcionRuta').val();
        var conductor = $("#ConductorRuta").val();
				if ($.trim(nombre).length > 0 && $.trim(descripcion).length > 0 && $.trim(conductor).length > 0){
					$.ajax({
						url: "../php/insert/add_ruta.php",
						method: "POST",
						data: {nombre:nombre, descripcion:descripcion,conductor:conductor},
						cache: "false",
						beforeSend:function(){
							$('#guardarruta').val("Guardando...");
						},
						success:function(data){
							$('#guardarruta').val("Guardar");
							if (data=="1"){
								swal("Perfecto!!", ("Ahora la ruta " + nombre + " ya esta en el sistema" ), "success");
								document.getElementById("NombreRuta").value = "";
								document.getElementById("DescripcionRuta").value = "";
							}else{
                alert(conductor);
								swal("Tenemos un problema", "La ruta no se pudo guardar" , "error");
							}
						}
					});
				}else{
					swal("No me engañes", "Por favor todos los datos necesarios" , "error");
				};
			};

//Llamado de formularios
      //Agregar Conductor
			$("#addConductor2").click(function(event) {
        $("#Contenedor").load("Add/add_conductor.php");
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });	

      //Agregar Ruta
      $("#addRuta").click(function(event) {
        $("#Contenedor").load("Add/add_ruta.php");
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });	

      //Agregar unidad
      $("#addUnidad").click(function(event) {
        $("#Contenedor").load("Add/add_unidad.php");
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });	

      //Lista de unidades
      $("#listUnidades").click(function(event) {
        $("#Contenedor").load("List/list_unidades.php");
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });	

//Lista de conductores
      $("#listConductores").click(function(event) {
        $("#Contenedor").load("List/list_conductores.php");
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });	
      
      //Modal de salida
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); 
  var recipient = button.data('whatever'); 
  var modal = $(this);
  modal.find('.modal-title').text('New message to ' + recipient);
  modal.find('.modal-body input').val(recipient);
});

    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            // hide sidebar
            $('#sidebar').removeClass('active');
            // hide overlay
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            // open sidebar
            $('#sidebar').addClass('active');
            // fade in the overlay
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });    
</script>
</body>
</html>