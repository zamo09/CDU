<?php 
session_start();
if (isset($_SESSION["user"])){
	header("location:mod/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio Sesion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/icons/l.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5.9.0/css/all.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="img/company_logo2.png" alt="IMG">
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
						Control de Unidades
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Ingresa tu nombre de usuario">
                        <input class="input100" type="text" name="user" id="user" placeholder="Usuario">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Contraseña Requerida">
                        <input class="input100" type="password" name="pass" id="pass" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login" id="login">
							Inicio
						</button>
                    </div><br>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
							Vista de Operadores
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                   
	

                   
                </div>
                <div class="container">
		<div class="row justify-content-center align-items-center alerta_error">
			<span id="result"></span>
		</div>
	</div>
            </div>
            
        </div>
        
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
	</script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
<script>

$(document).ready(function(){
			$('#login').click(function(){
				var user = $('#user').val();
				var pass = $('#pass').val();
				if ($.trim(user).length > 0 && $.trim(pass).length > 0){
					$.ajax({
						url: "php/select/validar_login.php",
						method: "POST",
						data: {user:user, pass:pass},
						cache: "false",
						beforeSend:function(){
							$('#login').val("Validando...");
						},
						success:function(data){
							$('#login').val("Continuar");
							if (data=="1"){
								$(location).attr('href','mod');
							}else{
								$('#result').html("<div class='error-btn'>Usuario o contraseña incorrectas.</div>");
							}
						}
					});
				}else{
					$('#result').html("<div class='error-btn'>Ingresa un usuario o contraseña</div>");
				};
			});
		});
	</script>

</html>