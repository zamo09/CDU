<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>
        <div class="sidebar-header">
            <h3><a href="#" id="menuprincipal">Control de unidades</a></h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-car"></i> &nbsp;Unidades</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a id="addUnidad" href="#"><i class="fas fa-car-side"></i> Agregar Unidad</a>
                    </li>
                    <li>
                        <a href="#" id="listUnidades"><i class="far fa-list-alt"></i> Lista de unidades</a>
                    </li>
                    <li>
                        <a href="#"id="asigUnidad"><i class="fas fa-check-double"></i> Asignar unidad</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#ConductorSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-address-card"></i> Condutores</a>
                <ul class="collapse list-unstyled" id="ConductorSubMenu">
                    <li>
                        <a id="addConductor2" href="#"><i class="fas fa-user-cog"></i> Agregar Conductor</a>
                    </li>
                    <li>
                        <a id="listConductores" href="#"><i class="far fa-list-alt"></i> Lista de Conductores</a>
                    </li>
                    <?php
                    if ($_SESSION['tipo'] == "root") {
                        ?>
                    <li>
                        <a id="papeleraconductores" href="#"><i class="fas fa-trash"></i> Papelera de Conductores</a>
                    </li>
                    <?php
                    }
                    ?>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-address-card"></i> Asignar Conductor</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a id="asigRutasConductor" href="#"><i class="fas fa-map-marker-alt"></i></i> Asignar Ruta</a>
                            </li>
                            <li>
                                <a id="asigUnidadConductor" href="#"><i class="fas fa-angle-double-right"></i> Asignar Unidad</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#ptrpSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fab fa-black-tie"></i> Administrar</a>
                <ul class="collapse list-unstyled" id="ptrpSubmenu">
                    <li>
                        <a id="addRuta" href="#"><i class="fas fa-route"></i> Agregar Ruta</a>
                    </li>
                    <li>
                        <a id="listRutas" href="#"><i class="far fa-list-alt"></i> Lista de rutas</a>
                    </li>
                    <li>
                        <a id="asigRutas" href="#"><i class="fas fa-map-marker-alt"></i> Asignar Ruta</a>
                    </li>
                </ul>
            </li>
            <?php
                    if ($_SESSION['tipo'] == "root" or $_SESSION['tipo'] == "Admi") {
             ?>
              <li>
                <a href="#SMmovimientos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-road"></i> Movimientos</a>
                <ul class="collapse list-unstyled" id="SMmovimientos">
                    <li>
                    <a id="listSalidas" href="#"><i class="fas fa-list-alt"></i> Mostrar Salidas</a>
                    </li>
                    <li>
                        <a id="reporteEsp" href="#"><i class="fas fa-clipboard-list"></i> Reporte Salidas</a>
                    </li>
                </ul>
            </li>
            <?php
                    }
                    ?>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>

        </ul>
    </nav>
    <!-- Page Content -->
    <div id="content fondo">
        <div class="wrapper  ">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="sidebar-header">
                    <h3>CDU</h3>
                </div>
            </nav>
            <!-- NavBar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Reportes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notificaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="addConductor">Cambiar Contraseña</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../php/conexion/cerrar.php">Cerrar Sesion</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Dark Overlay element -->
            <div class="overlay"></div>
        </div>