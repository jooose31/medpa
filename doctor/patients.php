﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: MedPa-paciente ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="../assets/css/main.css" rel="stylesheet">
<!-- Custom Css -->

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Por favor espere...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="#" class="mfb-component__button--main g-bg-cyan">
      <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i>
      <i class="mfb-component__main-icon--active zmdi zmdi-close"></i>
    </a>
    <ul class="mfb-component__list">

      <li>
        <a href="patients.php" data-mfb-label="Lista de pacientes" class="mfb-component__button--child bg-orange">
          <i class="zmdi zmdi-account-o mfb-component__child-icon"></i>
        </a>
      </li>

      <li>

      </li>
    </ul>
  </li>
</ul>
<!-- #Float icon -->
<!-- Morphing Search  -->
<div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Búsqueda..." class="form-control morphsearch-input" />
            <button class="morphsearch-submit" type="submit">Búsqueda</button>
        </div>
    </form>
    <div class="morphsearch-content">
        <div class="dummy-column">
            <h2>Personas</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
        <div class="dummy-column">
            <h2>Populares</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a> </div>
        <div class="dummy-column">
            <h2>Recientes</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="../assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
    </div>
    <!-- /morphsearch-content -->
    <span class="morphsearch-close"></span> </div>
<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="container-fluid">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="inicio.php">MedPa</a> </div>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="../assets/images/random-avatar7.jpg" alt=""> </div>
            <div class="admin-action-info"> <span>Bienvenido</span>

              <?php
              $user= "postgres";
              $password = "root";
              $dbname = "pacidoc";
              $port = "5432";
              $host = "localhost";

              $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

              $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

              //fin de la conexion -------------------------------------------------------------------------


              session_start();
              $scorreo=$_SESSION['correo'];

              $query = "SELECT nombre
                        FROM doctores
                        WHERE correod = '$scorreo'";
            $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error());
            $line = pg_fetch_array($result);
            $doc = $line["nombre"];

            echo "<h3>$doc</h3>";

              //fin de la conexion a la bd------------------------------------------------------------
              pg_close($link);



               ?>

                <ul>
                    <!--<li><a data-placement="bottom" title="Ir a bandeja de entrada" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>-->
                    <li><a data-placement="bottom" title="Ir a pacientes" href="patients.php"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="log out" href="logout.php" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Navegación Principal</li>
                <li><a href="inicio.php"><i class="zmdi zmdi-home"></i><span>Tablero</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Cita</span> </a>
                    <ul class="ml-menu">

                        <li><a href="book-appointment.php">Reservar cita</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Reportes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="receta.php">Agregar receta</a></li>
                        <!--<li><a href="add-doctor.html">Agregar Doctor</a></li>-->
                        <li><a href="examen.php">Agregar examen</a></li>
                    </ul>
                </li>
                <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Pacientes</span> </a>
                    <ul class="ml-menu">
                        <li class="active"><a href="patients.php">Todos los pacientes</a></li>
                        <li><a href="add-patient.php">Agregar Paciente</a></li>
                        <!--<li><a href="patient-profile.html">Perfil del Paciente</a></li>
                        <!--<li><a href="patient-invoice.html">Patient Invoice</a></li>-->
                    </ul>
                </li>

    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Colores</a></li>
            <!--<li role="presentation"><a href="#chat" data-toggle="tab">Chat</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">Setting</a></li>-->
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Rojo</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Morado</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Azul</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Turquesa</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Verde</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Anaranjado</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Gris azul</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Negro</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Rosado morado</span> </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Búsqueda..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Recent</h6>
                    <ul>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="../assets/images/random-avatar4.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="../assets/images/random-avatar5.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="../assets/images/random-avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Contacts</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="../assets/images/random-avatar4.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="../assets/images/random-avatar5.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img class="media-object " src="../assets/images/random-avatar6.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>

<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Todos los Pacientes</h2>
            <small class="text-muted">Bienvenidos a MedPa</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> Lista de pacientes</h2>
                        <ul class="header-dropdown m-r--5">

                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>correo</th>
                                <th>historial</th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php
                              $user= "postgres";
                              $password = "root";
                              $dbname = "pacidoc";
                              $port = "5432";
                              $host = "localhost";

                              $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                              $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                              //fin de la conexion -------------------------------------------------------------------------


                              // session_start();
                              // $scorreo=$_SESSION['correo'];
                              $query5 = "SELECT D.correop,P.nombre, P.edad
                              FROM pacdoc D, paciente P
                              WHERE D.correod = '$scorreo' and D.correop = P.correop";
                              $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());
                              $count=1;
                              while ($line = pg_fetch_array($result5)) {
                                $nombre = $line['nombre'];
                                $correo = $line['correop'];
                                $edad = $line['edad'];

                                echo "<tr>";
                                echo "<td>$count</td>";
                                echo "<td>$nombre</td>";
                                echo "<td>$edad</td>";
                                echo "<td>$correo</td>";
                                echo "<td><a href="."historial.php?correop=$correo". "><span class="."label label-danger".">Historial</span> </td>";

                                echo "</tr>";
                                $count++;



                              }



                              //fin de la conexion a la bd------------------------------------------------------------
                              pg_close($link);


                               ?>





                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row clearfix">
            <div class="col-xs-12 text-center">
                <a href="add-patient.php" class="btn btn-raised g-bg-cyan">AGREGAR PACIENTE</a>
            </div>
        </div>
        </div>
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="../assets/js/morphing.js"></script><!-- Custom Js -->


</body>
</html>
