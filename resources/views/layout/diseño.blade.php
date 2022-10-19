<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <title>@yield('tituloPagina')</title>
  </head>


  <body>

    <!-- Navigation Bar-->
    <header id="topnav">

      <!-- Topbar Start -->
      <div class="navbar-custom">
          <div class="container-fluid">
              <ul class="list-unstyled topnav-menu float-right mb-0">

                  <li class="dropdown notification-list">
                      <!-- Mobile menu toggle-->
                      <a class="navbar-toggle nav-link">
                          <div class="lines">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>
                      </a>
                      <!-- End mobile menu toggle-->
                  </li>

                  <li class="dropdown notification-list">
                      <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                          <i class="fe-settings noti-icon"></i>
                      </a>
                  </li>

              </ul>

              <!-- LOGO -->
              <div class="logo-box">
                  <a href="{{ route('index') }}" class="logo text-center">
                      <span class="logo-lg">
                          <img src="assets/images/taxi.jpg" alt="" height="50" width="80">
                          <!-- <span class="logo-lg-text-dark">Xeria</span> -->
                      </span>
                      <span class="logo-sm">
                          <!-- <span class="logo-sm-text-dark">X</span> -->
                          <img src="assets/images/taxi.jpg" alt="" height="18">
                      </span>
                  </a>
              </div>

              
              <div class="clearfix"></div>
          </div>
      </div>
      <!-- end Topbar -->

      <div class="topbar-menu">
          <div class="container-fluid">
              <div id="navigation">
                  <!-- Navigation Menu-->
                  <ul class="navigation-menu">

                      <li class="has-submenu">
                          <a href="#">
                              <i class="la la-dashboard"></i>Opciones <div class="arrow-down"></div></a>
                          <ul class="submenu">
                              <li>
                                  <a href="{{ route('index') }}">Home</a>
                              </li>
                              <li>
                                  <a href="{{ route('personas.index') }}">Conductores</a>
                              </li>
                              <li>
                                  <a href="{{ route('vehiculos.index') }}">Vehiculos</a>
                              </li>
                              <li>
                                  <a href="{{ route('personasVehiculos.index') }}">Asignaciones</a>
                              </li>
                          </ul>
                      </li>           
                  <!-- End navigation menu -->

                  <div class="clearfix"></div>
              </div>
              <!-- end #navigation -->
          </div>
          <!-- end container -->
      </div>
      <!-- end navbar-custom -->

  </header>
  <!-- End Navigation Bar-->

  <!-- ============================================================== -->
  <!-- Start Page Content here -->
  <!-- ============================================================== -->

    <div class="container">
        @yield('cuerpo')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

<!-- Right Sidebar -->
<div class="right-bar">
  <div class="rightbar-title">
      <a href="javascript:void(0);" class="right-bar-toggle float-right">
          <i class="mdi mdi-close"></i>
      </a>
      <h5 class="m-0 text-white">Configuracion</h5>
  </div>
  
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Third Party js-->
<script src="assets/libs/peity/jquery.peity.min.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>

<!-- Dashboard init -->
<script src="assets/js/pages/dashboard-1.init.js"></script>

<!-- App js-->
<script src="assets/js/app.min.js"></script>

  </body>
</html>