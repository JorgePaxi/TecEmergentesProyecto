<!doctype html>
<html lang="en">
<head>
    <title>CLINICA CAM-DENT</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/css/fontawesome.min.css">
    <link rel="stylesheet" href="librerias/css/bsadmin.css">
    <link rel="stylesheet" href="librerias/css/odonto-lib-upea.css">
    <link rel="stylesheet" href="librerias/css/hora-lib-upea.css">
    
</head>
<body>

<nav class="navbar navbar-expand navbar-dark" style="background-color: #05153F;">
    <a class="sidebar-toggle text-light mr-3">
        <i><img src="img/iconos/menu_25px.png"></i>
    </a>

    <a class="navbar-brand"  href="#">
        <i><img src="img/iconos/dental_25px.png"></i> CLINICA ODONTOLOGICA CAM-DENT
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <i><img src="img/iconos/usuario_25px.png"></i> Username
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Cerrar Sesion</a>
                    <a class="dropdown-item" href="#">Another</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <!-- INICIO MENU LATERAL SIDEBAR-->
    <nav class="sidebar" style="background-color: #05153F;">
        <ul class="list-unstyled">
            <li><a href="index.php"><i><img src="img/logos/DentalLogin.png" alt="" width="220px"></i></a></li>
            <li><a href="index.php"><i><img src="img/iconos/principal_25px.png"></i> Inicio</a></li>
            <li><a href="pacientes.php"><i><img src="img/iconos/paciente_25px.png"></i> Pacientes</a></li>
            <li>
                <a href="#submenu1" data-toggle="collapse"><i><img src="img/iconos/paciente_25px.png"></i> Pacientes</a>
                <ul id="submenu1" class="list-unstyled collapse">
                    <li><a href="pacientes.php">Paciente</a></li>
                    <li><a href="pacientes-edit.php">Nuevo Paciente</a></li>
                    <li><a href="expedido.php">Expedido</a></li>
                    <li><a href="sexo.php">Sexo</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Doctores</a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li><a href="doctores.php">Doctor</a></li>
                    <li><a href="docotres-edit.php">Nuevo Doctor</a></li>
                    <li><a href="Especialidad.php">Especialidad</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu3" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Usuarios</a>
                <ul id="submenu3" class="list-unstyled collapse">
                    <li><a href="roles.php">Roles</a></li>
                    <li><a href="roles-edit.php">Nuevo Rol</a></li>
                    <li><a href="usuarios.php">Usuarios</a></li>
                    <li><a href="usuarios-edit.php">Usuarios</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-fw fa-angle-right"></i> Odontograma</a></li>
            <li><a href="#"><i class="fa fa-fw fa-link"></i> Sidebar Link</a></li>
            <li><a href="#"><i class="fa fa-fw fa-link"></i> Sidebar Link</a></li>
          
        </ul>
    </nav>
    <!-- FIN MENU LATERAL SIDEBAR-->

    <!-- contenido inicio -->
    <div class="content p-4">
        <!-- contenido central -->