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
      <a href="#" class="btn btn-success button hvr-pulse hvr-bounce-to-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Salida <i class="fas fa-plane-departure"></i></a>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-danger button hvr-pulse hvr-bounce-to-right">Regreso <i class="fas fa-plane-arrival"></i></button>
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
      <div class="col-md-3">
      <button type="button" class="btn btn-secondary button hvr-pulse hvr-bounce-to-right">Reportar Falla <i class="fas fa-car-side"></i></button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-warning button hvr-pulse hvr-bounce-to-right">Reportar Accidente <i class="fas fa-car-crash"></i></button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-primary button hvr-pulse hvr-bounce-to-right">Registrar Vale <i class="fas fa-gas-pump"></i></button>
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
    <h3>Lavado <i class="fas fa-bath"></i></h3><br>
    <div class="row justify-content-md-center">
      <div class="col-md-3">
      <button type="button" class="btn btn-success button hvr-pulse hvr-bounce-to-right">Salida <i class="fas fa-paper-plane"></i></button>
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-danger button hvr-pulse hvr-bounce-to-right">Regreso <i class="fas fa-paper-plane"></i></button>
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
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
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