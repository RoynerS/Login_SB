<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="imagenes/fav-icon.png" />
    <title>Steffy Beautty Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    </div>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="imagenes/fav-icon.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="imagenes/fotoperfil.jpg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item  d-none d-lg-flex">
              <a class="nav-link" href="#">
                Calendario
              </a>
            </li>
            <li class="nav-item  d-none d-lg-flex">
              <a class="nav-link" href="#">
                Empleados
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-flex  mr-2">
              <a class="nav-link" href="#">
                Ayuda
              </a>
            </li>
            <li class="nav-item dropdown d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="typcn typcn-message-typing"></i>
                <span class="count bg-success">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Mensajes</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Venus Hidalgo
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      La reunion está cancelada
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Luis Robledo
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      Lanzamiento de nuevo producto
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Yienth Palacios
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      Próxima reunión de la junta directiva
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown  d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="typcn typcn-bell mr-0"></i>
                <span class="count bg-danger">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notificaciones</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="typcn typcn-info-large mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Error de la aplicación</h6>
                    <p class="font-weight-light small-text mb-0">
                      Justo ahora
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="typcn typcn-cog mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Ajustes</h6>
                    <p class="font-weight-light small-text mb-0">
                      Mensajes privados
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="typcn typcn-user-outline mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Registro de nuevo usuario</h6>
                    <p class="font-weight-light small-text mb-0">
                      hace 2 días
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                <i class="typcn typcn-user-outline mr-0"></i>
                <span class="nav-profile-name">Mayra Lloreda</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                <i class="typcn typcn-cog text-primary"></i>
                Ajustes
                </a>
                <a class="dropdown-item">
                <i class="typcn typcn-power text-primary"></i>
                Cerrar sesión
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
              <div class="sidebar-profile-image">
                <img src="imagenes/fotoperfil.jpg" alt="image">
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                  Mayra Lloreda
                </p>
                <p class="sidebar-designation">
                  Bienvenido/a.
                </p>
              </div>
            </div>
            <div class="nav-search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Escribe para buscar..." aria-label="search" aria-describedby="search">
                <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                </div>
              </div>
            </div>
            <p class="sidebar-menu-title">Menú</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Panel <span class="badge badge-primary ml-3">Nuevo</span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Elementos de formulario</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">Tablas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">Páginas de Admin.</span>
              <i class="menu-arrow"></i>
            </a>
  
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="typcn typcn-globe-outline menu-icon"></i>
              <span class="menu-title">Páginas de error</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.php"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cerrar.php">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">cerrar sessión</span>
            </a>
          </li>
        </ul>
        <ul class="sidebar-legend">
          <li>
            <p class="sidebar-menu-title">Categorías</p>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">#Ventas</a></li>
          <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
          <li class="nav-item"><a href="#" class="nav-link">#Crecimiento</a></li>
        </ul>
      </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0 font-weight-bold">Mayra Lloreda</h3>
                <p>Su último acceso hace: 21 horas desde Colombia.</p>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="mb-3 mb-xl-0 pr-1">
                      <div class="dropdown">
                        <button class="btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="typcn typcn-calendar-outline mr-2"></i>Los últimos 7 días
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" data-x-placement="top-start">
                          <h6 class="dropdown-header">Los últimos 14 días</h6>
                          <a class="dropdown-item" href="#">Los últimos 21 días</a>
                          <a class="dropdown-item" href="#">Los últimos 28 días</a>
                        </div>
                      </div>
                  </div>
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i>Exportar</button>
                  </div>
                  <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>Información</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row  mt-3">
              <div class="col-xl-5 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Porcentaje de ventas</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-lg-6">
                            <div id="circleProgress6" class="progressbar-js-circle rounded p-3"></div>
                          </div>
                          <div class="col-lg-6">
                            <ul class="session-by-channel-legend">
                              <li>
                                <div>Plan básico</div>
                                <div>(100%)</div>
                              </li>
                              <li>
                                <div>Plan platino</div>
                                <div>(80%)</div>
                              </li>
                              <li>
                                <div>Plan premium</div>
                                <div>(50%)</div>
                              </li>
                              <li>
                                <div>Peinados</div>
                                <div>(100%)</div>
                              </li>
                              <li>
                                <div>Maquillaje</div>
                                <div>(95%)</div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Reseñas de clientes</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="d-flex justify-content-between mb-4">
                              <div>Tiempo</div>
                              <div class="text-muted">Atención rápida</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div>Realización del servicio</div>
                              <div class="text-muted">Excelente</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div>Atención al cliente</div>
                              <div class="text-muted">Buena</div>
                            </div>
                            <div class="progress progress-md mt-4">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Gestión de empleados</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="d-flex justify-content-between mb-4">
                              <div class="font-weight-medium">Nombre del empleado</div>
                              <div class="font-weight-medium">Este mes</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div class="text-secondary font-weight-medium">Mayra Lloreda</div>
                              <div class="small">$ 7959</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div class="text-secondary font-weight-medium">Angeline Cuesta</div>
                              <div class="small">$ 5850</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div class="text-secondary font-weight-medium">Aura Martínez</div>
                              <div class="small">$ 4909</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div class="text-secondary font-weight-medium">Luvis Correa</div>
                              <div class="small">$857</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div class="text-secondary font-weight-medium">Dilys Nagle</div>
                              <div class="small">$612	</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Análisis de ventas</h4>
                      <button type="button" class="btn btn-sm btn-light">Mes</button>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="d-md-flex mb-4">
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-globe-outline mr-1"></i>Ventas</h5>
                            <h2 class="text-primary mb-1 font-weight-bold">23,342</h2>
                          </div>
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-archive mr-1"></i>Crecimiento</h5>
                            <h2 class="text-secondary mb-1 font-weight-bold">13,221</h2>
                          </div>
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-tags mr-1"></i>Marketing</h5>
                            <h2 class="text-warning mb-1 font-weight-bold">1,542</h2>
                          </div>
                        </div>
                        <canvas id="salesanalyticChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Gestión financiera</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="mb-5">
                          <div class="mr-1">
                            <div class="text-info mb-1">
                              Total ingresos
                            </div>
                            <h2 class="mb-2 mt-2 font-weight-bold">287,493$</h2>
                            <div class="font-weight-bold">
                              1.4% desde el mes pasado
                            </div>
                          </div>
                          <hr>
                          <div class="mr-1">
                            <div class="text-info mb-1">
                              Total gastos
                            </div>
                            <h2 class="mb-2 mt-2  font-weight-bold">87,493$</h2>
                            <div class="font-weight-bold">
                              5.43% desde el mes pasado
                            </div>
                          </div>
                        </div>
                        <canvas id="barChartStacked"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © Mayra Lloreda 2024</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>