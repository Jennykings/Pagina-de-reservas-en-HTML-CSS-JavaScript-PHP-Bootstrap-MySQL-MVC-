<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: /RESTAURANTE/views/inicio_sesion/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sabor peruabo</title>

  <!--favicon-->
<link rel="shortcut icon" href="/RESTAURANTE/views/img/utencilios.png" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="/RESTAURANTE/views/inicio_sesion/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/RESTAURANTE/views/inicio_sesion/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="/RESTAURANTE/views/inicio_sesion/dashboard/vendor/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="/RESTAURANTE/views/inicio_sesion/dashboard/vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">      
    
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fa fa-3x fa-utensils" style="color: orange"></i>
          <!-- fa fa-3x fa-utensils text-primary mb-4 -->
         <!--  <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3" style="color: orange">Sabor Peruano<sup></sup></div>
      </a>
 
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Control de registro</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Más opciones
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Modificar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Hacer modificación:</h6>
            <a class="collapse-item" href="/RESTAURANTE/views/PReservas.php">Reservas</a>
            <a class="collapse-item" href="/RESTAURANTE/views/PAdministradores.php">Administradores</a>
          </div>
        </div>
      </li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item"> 
        <a class="nav-link collapsed" href="/RESTAURANTE/views/inicio_sesion/dashboard/visualizar/inicio.php">
          <i class="fas fa-fw fa-eye"></i> 
          <span >Visualizar</span>  
        </a>
       
       </li> 
       
       <li class="nav-item"> 
        <a class="nav-link collapsed" href="https://mail.google.com/mail/u/0/?tab=km#inbox">
        <i class="fas fa-fw fa-envelope"></i> 
          <span >Recibidos</span> 
        </a>
       
       </li> 
       
       <li class="nav-item"> 
        <a class="nav-link collapsed" href="https://app.landbot.io/gui/chats_v4">
          <i class="fas fa-fw fa-headset"></i> 
          <span >Soporte</span> 
        </a> 
       
       </li>  

    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <!-- <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a> -->
              <!-- Dropdown - Messages -->
              <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-warning" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li> -->
 
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["s_usuario"];?></span>

                <img class="img-profile rounded-circle" src="/RESTAURANTE/views/inicio_sesion/dashboard/img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>
 
        </nav>
        <!-- End of Topbar -->
