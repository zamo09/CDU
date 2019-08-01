<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../img/icons/l.ico" />
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-5.9.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="stylesheet" href="../vendor/animate/animate.css">
    
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


<div class="container animated login zoomIn margensuperior">
	<div class="row h-100 justify-content-center align-items-center">   
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
    <!-- Registrar-->
  <div class="row card-body justify-content-md-center align-items-center text-center">
  <div class="col-md-9">
    <h3>Registrar</h3><br>
    <div class="row justify-content-md-center">
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-success">Regreso</button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-danger">Salida</button>
      </div>
    </div>
  </div>
</div>
  <!-- Fin de registrar -->
    <!-- Reportes-->
    <div class="row card-body justify-content-md-center align-items-center text-center">
  <div class="col-md-9">
    <h3>Reportes</h3><br>
    <div class="row justify-content-md-center">
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-success">Reportar Falla</button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-success">Reportar Accidente</button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-success">Registrar Vale</button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-danger">Subir Archivo</button>
      </div>
    </div>
  </div>
</div>
  <!-- Fin de reportes -->
      <!-- Lavado-->
      <div class="row card-body justify-content-md-center align-items-center text-center">
  <div class="col-md-9">
    <h3>Lavado</h3><br>
    <div class="row justify-content-md-center">
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-success">Regreso</button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-outline-danger">Salida</button>
      </div>
    </div>
  </div>
</div>
  <!-- Fin de Lavado -->
  </div>
</div>
        </div>
	</div></div>
    
   




</div><!-- Content -->
</div><!-- Wrapper"-->




    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="../js/mdb.min.js"></script>
	<script src="../vendor/animsition/js/animsition.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/countdowntime/countdowntime.js"></script>
    <script src="../js/datatables.min.js"></script>
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
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