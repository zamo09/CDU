<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="../img/icons/l.ico" />
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../vendor/air-datepicker-master/css/datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="../vendor/datatable/css/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-5.9.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="../css/style3.css">
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="../vendor/Hover-master/css/hover.css">
  <script type="text/javascript" src="../vendor/sweetalert/sweetalert.min.js"></script>
  <title>CDU</title>
</head>

<body class="fixed-sn light-blue-skin fondo">
  <?php
  session_start();
  if (!isset($_SESSION["user"])) { } else {
    //incluimos la barra de navegacion 
    include "mov/nav_bar.php";
    $_SESSION['motivo_salida']="";
    ?>
  <!-- <a href="../php/conexion/cerrar.php">Cerrar</a> -->
  <?php
  }
  ?>
  <!-- PARTE DEL CODIGO AL VALIDAR EL USUARIO -->
  <div class="container-fluid" id="Contenedor">
    <div id="wrapper" class="container h-100">
      <div id="page-content-wrapper" class="row h-100 justify-content-center align-items-center">
        <?php
        include "menu/conductor.php";
        ?>
      </div>
    </div>
  </div>
  </div><!-- Content -->
  </div><!-- Wrapper"-->
  <?php
  include "modal/modal_salida.php";
  include "modal/modal_retorno.php";
  include "modal/modal_falla.php";
  ?>
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
    function agregarunidad() {
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
      if ($.trim(nombre).length > 0 && $.trim(conductor).length > 0 && $.trim(marca).length > 0 && $.trim(modelo).length > 0 && $.trim(placas).length > 0 && $.trim(año).length > 0 && $.trim(tipo).length > 0 && $.trim(empresa).length > 0 && $.trim(motor).length > 0 && $.trim(poliza).length > 0 && $.trim(fechapoliza).length > 0) {
        $.ajax({
          url: "../php/insert/add_unidad.php",
          method: "POST",
          data: {
            nombre: nombre,
            conductor: conductor,
            marca: marca,
            modelo: modelo,
            placas: placas,
            año: año,
            tipo: tipo,
            empresa: empresa,
            motor: motor,
            poliza: poliza,
            fechapoliza: fechapoliza
          },
          cache: "false",
          beforeSend: function() {
            $('#guardarunidad').val("Guardando...");
          },
          success: function(data) {
            $('#guardarunidad').val("Guardar");
            if (data == "1") {
              swal("Perfecto!!", ("Ahora la unidad " + nombre + " ya esta en el sistema"), "success");
              $("#Contenedor").load("Menu/conductor.php");
            } else {
              swal("Tenemos un problema", "No se pudo guardar la unidad", "error");
            }
          }
        });
      } else {
        swal("No me engañes", "Por favor todos los datos necesarios", "error");
      };
    };
    //metodo para añadir al conductor
    function agregarconductor() {
      var nombre = $('#NombreConductor').val();
      var empresa = $('#SelectEmpresaConductor').val();
      var ruta = $("#SelectRutaConductor").val();
      var departamento = $("#SelectDepartamentoConductor").val();
      var tipo = $("#TipoLicenciaConductor").val();
      var fecha = $("#FechaVencimientoConductor").val();
      var unidad = $('#SelectUnidadConductor').val();
      if ($.trim(nombre).length > 0 && $.trim(empresa).length > 0 && $.trim(ruta).length > 0 && $.trim(departamento).length > 0 && $.trim(tipo).length > 0 && $.trim(fecha).length > 0 && $.trim(unidad).length > 0) {
        $.ajax({
          url: "../php/insert/add_conductor.php",
          method: "POST",
          data: {
            nombre: nombre,
            empresa: empresa,
            ruta: ruta,
            departamento: departamento,
            tipo: tipo,
            fecha: fecha,
            unidad: unidad
          },
          cache: "false",
          beforeSend: function() {
            $('#guardarconductor').val("Guardando...");
          },
          success: function(data) {
            $('#guardarconductor').val("Guardar");
            if (data == "1") {
              swal("Perfecto!!", ("Ahora el conductor " + nombre + " ya esta en el sistema"), "success");
              $("#Contenedor").load("Menu/conductor.php");
            } else {
              swal("Tenemos un problema", "No se pudo guardar el conductor", "error");
            }
          }
        });
      } else {
        swal("No me engañes", "Por favor todos los datos necesarios", "error");
      };
    };
    //Agregar Ruta
    function agregarruta() {
      var nombre = $('#NombreRuta').val();
      var descripcion = $('#DescripcionRuta').val();
      var conductor = $("#ConductorRuta").val();
      if ($.trim(nombre).length > 0 && $.trim(descripcion).length > 0 && $.trim(conductor).length > 0) {
        $.ajax({
          url: "../php/insert/add_ruta.php",
          method: "POST",
          data: {
            nombre: nombre,
            descripcion: descripcion,
            conductor: conductor
          },
          cache: "false",
          beforeSend: function() {
            $('#guardarruta').val("Guardando...");
          },
          success: function(data) {
            $('#guardarruta').val("Guardar");
            if (data == "1") {
              swal("Perfecto!!", ("Ahora la ruta " + nombre + " ya esta en el sistema"), "success");
              document.getElementById("NombreRuta").value = "";
              document.getElementById("DescripcionRuta").value = "";
            } else {
              alert(conductor);
              swal("Tenemos un problema", "La ruta no se pudo guardar", "error");
            }
          }
        });
      } else {
        swal("No me engañes", "Por favor todos los datos necesarios", "error");
      };
    };
     //Asignar Unidad
     function asignarUnidad() {
      var id_unidad = $('#SelectUnidadAsignar').val();
      var id_conductor = $('#ConductorAsig').val();
      var unidad = $('#SelectUnidadAsignar').find('option:selected').text();
      var conductor = $('#ConductorAsig').find('option:selected').text();
      if ($.trim(id_unidad).length > 0 && $.trim(id_conductor).length > 0) {
        $.ajax({
          url: "../php/update/asignar_unidad.php",
          method: "POST",
          data: {
            id_unidad: id_unidad,
            id_conductor: id_conductor
          },
          cache: "false",
          beforeSend: function() {
            $('#asignarUnidad').val("Asignando...");
          },
          success: function(data) {
            $('#asignarUnidad').val("Asignar");
            if (data == "1") {
              swal("Perfecto!!", ("Ahora la Unidad " + unidad+ " ya esta asignada al conductor " + conductor), "success");
              $("#Contenedor").load("Menu/conductor.php");
            } else {
              swal("Tenemos un problema", "La Unidad no se pudo asignar", "error");
            }
          }
        });
      } else {
        swal("No me engañes", "Por favor selecciona los datos necesarios", "error");
      };
    };
    //metodos de eliminacion
    //elminar Conductor
    function EliminarConductor(id, nombre) {
      swal({
          title: "Vas a eliminar un Conductor",
          text: "Estas seguro que deseas eliminar al conductor " + nombre,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              url: "../php/update/delete_conductor.php",
              method: "POST",
              data: {
                nombre: nombre,
                id: id
              },
              cache: "false",
              beforeSend: function() {},
              success: function(data) {
                if (data == "1") {
                  swal("Eliminado", ("Ahora la Conductor " + nombre + " ya no esta en el sistema"), "success");
                  $("#Contenedor").load("List/list_conductores.php");
                } else {
                  swal("Tenemos un problema", "El conductor no fue eliminado", "error");
                }
              }
            });
          }
        });
    };
    //elminar Conductor Definitivamente del sistema
    function EliminarConductorF(id, nombre) {
      swal({
          title: "Vas a eliminar un Conductor Definitivamente",
          text: "Estas seguro que deseas eliminar al conductor " + nombre + " Ya no estara en el sistema ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal({
                title: "Eliminar a " + nombre,
                text: "Escribe por favor tu contraseña para eliminar",
                icon: "warning",
                buttons: {
                  cancel: true,
                  confirm: "Confirm",
                },
                content: {
                  element: "input",
                  attributes: {
                    placeholder: "Contraseña del usuario logeado",
                    type: "password",
                  },
                },
              })
              .then((value) => {
                if (value == null) {
                  swal({
                    title: "Eliminacion Cancelada",
                    text: "No se realizo ninguna eliminacion",
                    icon: "warning",
                  });
                } else {
                  $.ajax({
                    url: "../php/delete/delete_conductor.php",
                    method: "POST",
                    data: {
                      nombre: nombre,
                      id: id,
                      pass: value
                    },
                    cache: "false",
                    beforeSend: function() {},
                    success: function(data) {
                      if (data == "1") {
                        swal("Eliminado", ("Ahora la Conductor " + nombre + " ya no esta en el sistema"), "success");
                        $("#Contenedor").load("List/pape_conductores.php");
                      } else {
                        swal("Tenemos un problema", "El conductor no fue eliminado", "error");
                      }
                    }
                  });
                }
              });
          }
        });
    };
    //elminar Conductor
    function RestaurarConductor(id, nombre) {
      swal({
          title: "Vas a Restaurar un Conductor",
          text: "Estas seguro que deseas restaurar al conductor " + nombre,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              url: "../php/update/restaurar_conductor.php",
              method: "POST",
              data: {
                nombre: nombre,
                id: id
              },
              cache: "false",
              beforeSend: function() {},
              success: function(data) {
                if (data == "1") {
                  swal("Restaurado", ("Ahora la Conductor " + nombre + " ya esta en el sistema Nuevamente"), "success");
                  $("#Contenedor").load("List/pape_conductores.php");
                } else {
                  swal("Tenemos un problema", "El conductor no fue Restaurado", "error");
                }
              }
            });
          }
        });
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
     //Asignar unidad
     $("#asigUnidad").click(function(event) {
      $("#Contenedor").load("Asig/asig_Unidad.php");
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
    //Lista de Rutas
    $("#listRutas").click(function(event) {
      $("#Contenedor").load("List/list_rutas.php");
      $('#sidebar').removeClass('active');
      $('.overlay').removeClass('active');
    });
    //Papelera de conductores
    $("#papeleraconductores").click(function(event) {
      $("#Contenedor").load("List/pape_conductores.php");
      $('#sidebar').removeClass('active');
      $('.overlay').removeClass('active');
    });
    //menu principal
    $("#menuprincipal").click(function(event) {
      $("#Contenedor").load("menu/conductor.php");
      $('#sidebar').removeClass('active');
      $('.overlay').removeClass('active');
    });
    //Metodo para buscar en un select
    function buscarSelect(nombre, valor) {
      
      var select = document.getElementById(nombre); // creamos un variable que hace referencia al select
      var buscar = valor; // obtenemos el valor a buscar
      for (var i = 1; i < select.length; i++) { // recorremos todos los valores del select
        if (select.options[i].value == buscar) { // seleccionamos el valor que coincide
          select.selectedIndex = i;
        }
      }
    };
   //Metodo al seleccionar una unidad en la salida 
    $("#SelectUnidadSalida").change(function() {
      var sel = $(this).val();
      var id = sel;
    
      $.ajax({
        url: "../php/select/select_conductor.php",
        method: "POST",
        data: {
          id_unidad: sel
        },
        cache: "false",
        beforeSend: function() {},
        success: function(data) {
          if (data == "error") {
          } else{
              if(data == "1"){
                var nombre = "ConductorSalida";
                var sin = "1";
                buscarSelect(nombre, sin);
              } else{
                var nombre = "ConductorSalida";                
                buscarSelect(nombre, data);
                var id_ruta= "<?php echo $_SESSION['motivo_salida']; ?>";
                alert(id_ruta);
                if (id_ruta != 1){
                  buscarSelect("SelectMotivoSalida", "Ruta");
                }
              }        
          }
        }
      });
});
 

    //Modal de salida
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var recipient = button.data('whatever');
      var modal = $(this);
      var fecha = new Date();
      document.getElementById("FechaSalida").value = fecha.getFullYear() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getDate() + " " + fecha.getHours() + ":" + fecha.getMinutes() + ":" + fecha.getSeconds();
    });
    //Modal de Retorno
    $('#ModalRetorno').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var recipient = button.data('whatever');
      var modal = $(this);
    });
    //Modal de Ralla
    $('#ModalFalla').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var recipient = button.data('whatever');
      var modal = $(this);
    });
    //Funcion que da movilidad al Menu
    $(document).ready(function() {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });
      $('#dismiss, .overlay').on('click', function() {
        // hide sidebar
        $('#sidebar').removeClass('active');
        // hide overlay
        $('.overlay').removeClass('active');
      });
      $('#sidebarCollapse').on('click', function() {
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