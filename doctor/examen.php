<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: MedPa-exámenes ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"><!-- Favicon-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!--WaitMe Css-->
<link href="../assets/plugins/waitme/waitMe.css" rel="stylesheet" />
<!-- Custom Css -->
<link href="../assets/css/main.css" rel="stylesheet">
<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
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
          <i class="zmdi zmdi-balance-wallet mfb-component__child-icon"></i>
        </a>
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
            <!-- Notifications -->
            <!--<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i> <span class="label-count">7</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green"><i class="zmdi zmdi-account-add"></i></div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-cyan"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-orange"><i class="zmdi zmdi-edit"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue-grey"><i class="zmdi zmdi-comment-alt-text"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green"><i class="zmdi zmdi-refresh-alt"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"><i class="zmdi zmdi-settings"></i></div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>-->
            <!-- #END# Notifications -->
            <!-- Tasks -->
            <!--<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i><span class="label-count">9</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks">
                            <li> <a href="javascript:void(0);">
                                <h4> Task 1 <small>32%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4>Task 2 <small>45%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4>Task 3 <small>54%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Task 4 <small>65%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> </div>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
                </ul>
            </li>-->
            <!-- #END# Tasks -->
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
                <h3>Doctor</h3>
                <ul>
                    <!--<li><a data-placement="bottom" title="Ir a bandeja de entrada" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>-->
                    <li><a data-placement="bottom" title="Ir a pacientes" href="patients.php"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Pantalla completa" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
            <!--<div class="quick-stats">
                <h5>Reporte de hoy</h5>
                <ul>
                    <li><span>0<i>Pacientes</i></span></li>
                    <li><span>0<i>Pendientes</i></span></li>
                    <li><span>0<i>Visitas</i></span></li>
                </ul>
            </div>-->
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
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Reportes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="receta.php">Agregar recetas</a></li>
                        <!--<li><a href="add-doctor.html">Agregar Doctor</a></li>-->
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Pacientes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patients.php">Todos los pacientes</a></li>
                        <li><a href="add-patient.php">Agregar paciente</a></li>
                        <!--<li><a href="patient-profile.html">Perfil del paciente</a></li>
                        <!--<li><a href="patient-invoice.html">Patient Invoice</a></li>-->
                    </ul>
                </li>
                <!--<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Pagos</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="payments.html">Pagos</a></li>
                        <li> <a href="add-payments.html">Agregar Pagos</a></li>
                        <!--<li> <a href="patient-invoice.html">Patient Invoice</a></li>
                    </ul>
                </li>-->
                <!--<li class="active open"><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reportes</span></a></li>
                <!--<li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a></li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="sign-in.html">Sign In</a> </li>
                        <li> <a href="sign-up.html">Sign Up</a> </li>
                        <li> <a href="forgot-password.html">Forgot Password</a> </li>
                        <li> <a href="404.html">Page 404</a> </li>
                        <li> <a href="500.html">Page 500</a> </li>
                        <li> <a href="page-offline.html">Page Offline</a> </li>
                        <li> <a href="locked.html">Locked Screen</a> </li>
                        <li> <a href="blank.html">Blank Page</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="typography.html">Typography</a> </li>
                        <li> <a href="helper-classes.html">Helper Classes</a></li>
                        <li> <a href="alerts.html">Alerts</a> </li>
                        <li> <a href="animations.html">Animations</a> </li>
                        <li> <a href="badges.html">Badges</a> </li>
                        <li> <a href="breadcrumbs.html">Breadcrumbs</a> </li>
                        <li> <a href="buttons.html">Buttons</a> </li>
                        <li> <a href="collapse.html">Collapse</a> </li>
                        <li> <a href="colors.html">Colors</a> </li>
                        <li> <a href="dialogs.html">Dialogs</a> </li>
                        <li> <a href="icons.html">Icons</a> </li>
                        <li> <a href="labels.html">Labels</a> </li>
                        <li> <a href="list-group.html">List Group</a> </li>
                        <li> <a href="media-object.html">Media Object</a> </li>
                        <li> <a href="modals.html">Modals</a> </li>
                        <li> <a href="notifications.html">Notifications</a> </li>
                        <li> <a href="pagination.html">Pagination</a> </li>
                        <li> <a href="preloaders.html">Preloaders</a> </li>
                        <li> <a href="progressbars.html">Progress Bars</a> </li>
                        <li> <a href="range-sliders.html">Range Sliders</a> </li>
                        <li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                        <li> <a href="tabs.html">Tabs</a> </li>
                        <li> <a href="thumbnails.html">Thumbnails</a> </li>
                        <li> <a href="tooltips-popovers.html">Tooltips & Popovers</a> </li>
                        <li> <a href="waves.html">Waves</a> </li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li>
            </ul>
        </div>-->
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Colores</a></li>
            <!--li role="presentation"><a href="#chat" data-toggle="tab">Chat</a></li>
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
            <!--<div role="tabpanel" class="tab-pane fade" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
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
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
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
    </aside>-->
    <!-- #END# Right Sidebar -->
</section>

<section class="content home">
  <div class="container-fluid">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs m-t-20" role="tablist">
            <li role="presentation" class="active"><a href="#income" data-toggle="tab"><i class="zmdi zmdi-file-text"></i>  <span>Exámenes</span>
			<!--<button type="button" class="btn btn-default btn-sm">
			<span class="glyphicon glyphicon-arrow-down" aria-hidden="true" title="del más reciente al más antiguo"></span>
			</button>
			<button type="button" class="btn btn-default btn-sm">
			<span class="glyphicon glyphicon-arrow-up" aria-hidden="true" title="del más antiguo al más reciente"></span>
			</button></a></a></li>
			                <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Ingresar correo electónico">
                                    </div><br>
									<input type="text" placeholder="tipo de examen">
                                </div>
                            </div>-->


			                 <!--<div class="col-xs-12">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Enviar</button>
                                <button type="submit" class="btn btn-raised">Cancelar</button>
                            </div>-->
            <!--<li role="presentation"><a href="#sales" data-toggle="tab"> <i class="zmdi zmdi zmdi-case-download"></i><span>PDFs</span></a></li>-->
        </ul>
        <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="income">
                <div class="row clearfix">
				<!--<button type="button" class="btn btn-raised btn-default waves-effect"><input type="file"> </button>-->
                <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box-3 bg-green">
                            <div class="icon">
                                <div class="chart chart-bar">6,8,6,8,10,2,11,4</div>
                            </div>
                            <div class="content">
                                <div class="text">Total Income</div>
                                <div class="number">$127 526</div>
                            </div>
                        </div>
                    </div>-->
                    <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box-3 bg-blush">
                            <div class="icon">
                                <div class="chart chart-bar">6,7,3,8,10,5,3,4</div>
                            </div>
                            <div class="content">
                                <div class="text">Unique Patients</div>
                                <div class="number">457</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box-3 bg-blue">
                            <div class="icon"> <span class="chart chart-line">9,4,6,5,6,4,7,3</span> </div>
                            <div class="content">
                                <div class="text">Monthly Income</div>
                                <div class="number">$125</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box-3 bg-blue-grey">
                            <div class="icon">
                                <div class="chart chart-bar">4,6,-3,-1,2,-2,4,6</div>
                            </div>
                            <div class="content">
                                <div class="text">Net Profit</div>
                                <div class="number">$1 063</div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <!--<div class="card">
                            <div class="header">
                                <h2>Hospital Budget</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="line_chart" height="70"></canvas>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="header">
                                <h2>Income Analysis <small >18% High then last month</small></h2>
                                <!--<ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="stats-report">
                                  <div class="stat-item">
                                    <h5>Overall</h5>
                                    <b class="col-indigo">70.40%</b></div>
                                  <div class="stat-item">
                                    <h5>Montly</h5>
                                    <b class="col-indigo">25.80%</b></div>
                                  <div class="stat-item">
                                    <h5>Day</h5>
                                    <b class="col-indigo">12.50%</b></div>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                                         data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                                         data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                            </div>
                        </div>-->
        </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                      <h2>Examen  </h2>
						<input name="fecha" type="date"><br>
						<input type="text" placeholder="Ingrese correo electrónico..."><br>
						<input type="text" placeholder="Tipo de examen..."><br>

					</div>
                    <div class="body">
					        <div class="col-sm-12">
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">

                                    <div class="form-line">
                                        <textarea rows="20" class="form-control no-resize" placeholder="Ingrese descripción..."></textarea>
                                    </div>
                                </div>
                            </div>
							<div class="col-xs-12">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Enviar</button>
                                <button type="submit" class="btn btn-raised">Cancelar</button>
                            </div>
                </div>
			</div>
					</div>
                </div>
			</div>


    </div>
  </div>

            <div role="tabpanel" class="tab-pane fade page-calendar" id="sales">
                <div class="row clearfix">
                <!-- Radar Chart -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>RADAR CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="radar_chart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Radar Chart -->
                    <!-- Pie Chart -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>PIE CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="pie_chart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Pie Chart -->
                </div>
                <div class="row clearfix">
                    <!-- Bar Chart -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>BAR CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="bar_chart" height="120"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-bg"></div>
<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="../assets/plugins/waitme/waitMe.js"></script> <!-- Wait Me Plugin Js -->
<script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js -->
<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="../assets/js/pages/widgets/infobox/infobox-1.js"></script>

<script src="../assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js -->

<script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="../assets/js/morphing.js"></script><!-- Custom Js -->
<script src="../assets/js/pages/cards/basic.js"></script> <!-- Custom Js -->
<script src="../assets/js/pages/charts/sparkline.min.js"></script>
<script src="../assets/js/pages/charts/chartjs.min.js"></script>


</body>
</html>
