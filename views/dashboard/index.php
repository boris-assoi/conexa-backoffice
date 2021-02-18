<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Tableau de bord | CONEXA</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Bhumlu Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Bhumlu, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Conexa" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/libs/flot/flot.css">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">
                    </span>
                    <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Bhumlu</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="index.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                            <div class="pl-1 ml-auto">
                                <div class="badge badge-danger">Hot</div>
                            </div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">UI Components</li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-type"></i>
                            <div>Typography</div>
                        </a>
                    </li>

                    <!-- UI elements -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-box"></i>
                            <div>UI components</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="bui_alert.html" class="sidenav-link">
                                    <div>Alerts</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_badges.html" class="sidenav-link">
                                    <div>Badges</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_button.html" class="sidenav-link">
                                    <div>Buttons</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="charts_morrisjs.html" class="sidenav-link">
                                    <div>Charts</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_dropdowns.html" class="sidenav-link">
                                    <div>Dropdowns</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_pagination.html" class="sidenav-link">
                                    <div>Pagination and breadcrumbs</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_progress.html" class="sidenav-link">
                                    <div>Progress bars</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Forms & Tables</li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-clipboard"></i>
                            <div>Forms</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="forms_layouts.html" class="sidenav-link">
                                    <div>Layouts and elements</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="forms_input-groups.html" class="sidenav-link">
                                    <div>Input groups</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="tables_bootstrap.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-grid"></i>
                            <div>Tables</div>
                        </a>
                    </li>

                    <!--  Icons -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Icons</li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-feather"></i>
                            <div>Icons</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="icons_feather.html" class="sidenav-link">
                                    <div>Feather</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="icons_linearicons.html" class="sidenav-link">
                                    <div>Linearicons</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Pages -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Pages</li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_login-v1.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-lock"></i>
                            <div>Login</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_register-v1.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-user"></i>
                            <div>Signup</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_faq.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-anchor"></i>
                            <div>FAQ</div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">Bhumlu</span>
                    </a>

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-bell navbar-icon align-middle"></i>
                                    <span class="badge badge-danger badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Login from 192.168.1.1</div>
                                                <div class="text-light small mt-1">
                                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                </div>
                                                <div class="text-light small mt-1">12h ago</div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">You have
                                                    <strong>4</strong> new followers
                                                </div>
                                                <div class="text-light small mt-1">
                                                    Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Server restarted</div>
                                                <div class="text-light small mt-1">
                                                    19h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">99% server load</div>
                                                <div class="text-light small mt-1">
                                                    Etiam nec fringilla magna. Donec mi metus.
                                                </div>
                                                <div class="text-light small mt-1">
                                                    20h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                                </div>
                            </div>

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-mail navbar-icon align-middle"></i>
                                    <span class="badge badge-success badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Messages
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                                <div class="text-light small mt-1">
                                                    Josephin Doe &nbsp;·&nbsp; 58m ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                                <div class="text-light small mt-1">
                                                    Lary Doe &nbsp;·&nbsp; 1h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                                <div class="text-light small mt-1">
                                                    Alice &nbsp;·&nbsp; 2h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                                <div class="text-light small mt-1">
                                                    Suzen &nbsp;·&nbsp; 5h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="assets/img/avatars/1.png" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Cindy Deitch</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active">Data</li>
                            </ol>
                        </div>
                        <div class="row">
                            <!-- 1st row Start -->
                            <div class="col-lg-7">
                                <div class="card mb-4">
                                    <div class="card-header with-elements">
                                        <h6 class="card-header-title mb-0">Statistics</h6>
                                        <div class="card-header-elements ml-auto">
                                            <label class="text m-0">
                                                <span class="text-light text-tiny font-weight-semibold align-middle">SHOW STATS</span>
                                                <span class="switcher switcher-sm d-inline-block align-middle mr-0 ml-2"><input type="checkbox" class="switcher-input" checked><span class="switcher-indicator"><span class="switcher-yes"></span><span class="switcher-no"></span></span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="statistics-chart-1" style="height:270px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4 bg-pattern-2-dark">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="lnr lnr-gift display-4 text-primary"></div>
                                                    <div class="ml-3">
                                                        <div class="text-muted small">Products</div>
                                                        <div class="text-large">985</div>
                                                    </div>
                                                </div>
                                                <div id="ecom-chart-3" class="mt-3 chart-shadow-primary" style="height:40px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4 bg-pattern-2 bg-primary text-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="lnr lnr-cart display-4"></div>
                                                    <div class="ml-3">
                                                        <div class="small">Monthly sales</div>
                                                        <div class="text-large">2362</div>
                                                    </div>
                                                </div>
                                                <div id="order-chart-1" class="mt-3 chart-shadow" style="height:40px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card d-flex w-100 mb-4">
                                            <div class="row no-gutters row-bordered row-border-light h-100">
                                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                                    <div class="card-body media align-items-center text-dark">
                                                        <i class="lnr lnr-diamond display-4 d-block text-primary"></i>
                                                        <span class="media-body d-block ml-3"><span class="text-big mr-1 text-primary">$1584.78</span>
                                                            <br>
                                                            <small class="text-muted">Earned this month</small>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                                    <div class="card-body media align-items-center text-dark">
                                                        <i class="lnr lnr-clock display-4 d-block text-primary"></i>
                                                        <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-primary">152</span>Working Hours</span>
                                                            <br>
                                                            <small class="text-muted">Spent this month</small>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                                    <div class="card-body media align-items-center text-dark">
                                                        <i class="lnr lnr-hourglass display-4 d-block text-primary"></i>
                                                        <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-primary">54</span> Tasks</span>
                                                            <br>
                                                            <small class="text-muted">Completed this month</small>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                                    <div class="card-body media align-items-center text-dark">
                                                        <i class="lnr lnr-license display-4 d-block text-primary"></i>
                                                        <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-primary">6</span> Projects</span>
                                                            <br>
                                                            <small class="text-muted">Done this month</small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st row Start -->
                        </div>
                        <div class="row">
                            <!-- 2nd row Start -->
                            <div class="col-md-12">
                                <div class="card d-flex w-100 mb-4">
                                    <div class="row no-gutters row-bordered row-border-light h-100">
                                        <div class="d-flex col-md-6 col-lg-3 align-items-center">
                                            <div class="card-body">
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <i class="lnr lnr-earth text-primary display-4"></i>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0 text-muted">Total <span class="text-primary">Subscription</span></h6>
                                                        <h4 class="mt-3 mb-0">7652<i class="ion ion-md-arrow-round-down ml-3 text-danger"></i></h4>
                                                    </div>
                                                </div>
                                                <p class="mb-0 text-muted">48% From Last 24 Hours</p>
                                            </div>
                                        </div>
                                        <div class="d-flex col-md-6 col-lg-3 align-items-center">
                                            <div class="card-body">
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <i class="lnr lnr-cart text-primary display-4"></i>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0 text-muted"><span class="text-primary">Order</span> Status</h6>
                                                        <h4 class="mt-3 mb-0">6325<i class="ion ion-md-arrow-round-up ml-3 text-success"></i></h4>
                                                    </div>
                                                </div>
                                                <p class="mb-0 text-muted">36% From Last 6 Months</p>
                                            </div>
                                        </div>
                                        <div class="d-flex col-md-6 col-lg-3 align-items-center">
                                            <div class="card-body">
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <i class="lnr lnr-users text-primary display-4"></i>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0 text-muted">Unique <span class="text-primary">Visitors</span></h6>
                                                        <h4 class="mt-3 mb-0">652<i class="ion ion-md-arrow-round-down ml-3 text-danger"></i></h4>
                                                    </div>
                                                </div>
                                                <p class="mb-0 text-muted">36% From Last 6 Months</p>
                                            </div>
                                        </div>
                                        <div class="d-flex col-md-6 col-lg-3 align-items-center">
                                            <div class="card-body">
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <i class="lnr lnr-magic-wand text-primary display-4"></i>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0 text-muted">Monthly <span class="text-primary">Earnings</span></h6>
                                                        <h4 class="mt-3 mb-0">5963<i class="ion ion-md-arrow-round-up ml-3 text-success"></i></h4>
                                                    </div>
                                                </div>
                                                <p class="mb-0 text-muted">36% From Last 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Staustic card 3 Start -->
                            </div>
                            <!-- 2nd row Start -->
                        </div>
                        <div class="row">
                            <!-- 3rd row Start -->
                            <div class="col-xl-5">
                                <div class="card mb-4">
                                    <div class="card-header with-elements">
                                        <h6 class="card-header-title mb-0">Tasks</h6>
                                        <div class="card-header-elements ml-auto">
                                            <button type="button" class="btn btn-default btn-xs md-btn-flat">Show more</button>
                                        </div>
                                    </div>
                                    <div style="height: 310px" id="tasks-inner">
                                        <div class="card-body">
                                            <p class="text-muted small">Today</p>
                                            <div class="custom-controls-stacked">
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Buy products</span>
                                                    <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">58 mins left</span>
                                                </label>
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Reply to emails</span>
                                                </label>
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Write blog post</span>
                                                    <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">20 hours left</span>
                                                </label>
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <span class="custom-control-label">Wash my car</span>
                                                </label>
                                            </div>
                                        </div>
                                        <hr class="m-0">
                                        <div class="card-body">
                                            <p class="text-muted small">Tomorrow</p>
                                            <div class="custom-controls-stacked">
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Buy antivirus</span>
                                                </label>
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Jane's Happy Birthday</span>
                                                </label>
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Call mom</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type your task">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="card mb-4">
                                    <div class="card-header with-elements pb-0">
                                        <h6 class="card-header-title mb-0">Customer details</h6>
                                        <div class="card-header-elements ml-auto p-0">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#sale-stats">Sale stats</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#latest-sales">Latest sales</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nav-tabs-top">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="sale-stats">
                                                <div style="height: 330px" id="tab-table-1">
                                                    <table class="table table-hover card-table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>Due</strong></span>
                                                                    </label>
                                                                </th>
                                                                <th>User</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>16</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/1-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Win</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1249] Vertically center carousel controls</h6>
                                                                        <p class="text-muted mb-0">Try any carousel control and reduce the screen width below...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>40</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/1-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Wiliiam</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1254] Inaccurate small pagination height</h6>
                                                                        <p class="text-muted mb-0">The height of pagination elements is not consistent with...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>16</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/1-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Win</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1249] Vertically center carousel controls</h6>
                                                                        <p class="text-muted mb-0">Try any carousel control and reduce the screen width below...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>40</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/1-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">Jems Wiliiam</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1254] Inaccurate small pagination height</h6>
                                                                        <p class="text-muted mb-0">The height of pagination elements is not consistent with...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>12</strong><br><span>hour</span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <div class="media mb-0">
                                                                        <img src="assets/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                                                        <div class="media-body align-self-center ml-3">
                                                                            <h6 class="mb-0">John Deo</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <h6 class="mb-1">[#1183] Workaround for OS X selects printing bug</h6>
                                                                        <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a href="javascript:" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
                                            </div>
                                            <div class="tab-pane fade" id="latest-sales">
                                                <div style="height: 330px" id="tab-table-2">
                                                    <table class="table table-hover card-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Qty.</th>
                                                                <th>Sum.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">PlayStation 4 1TB (Jet Black)</a>
                                                                </td>
                                                                <td class="align-middle">1</td>
                                                                <td class="align-middle">$480.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">Nike Men Black Liteforce III Sneakers</a>
                                                                </td>
                                                                <td class="align-middle">2</td>
                                                                <td class="align-middle">$115.1</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">Wireless headphones</a>
                                                                </td>
                                                                <td class="align-middle">1</td>
                                                                <td class="align-middle">$235.55</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">HERO ATHLETES BAG</a>
                                                                </td>
                                                                <td class="align-middle">1</td>
                                                                <td class="align-middle">$160.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">POÄNG</a>
                                                                </td>
                                                                <td class="align-middle">3</td>
                                                                <td class="align-middle">$477.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">Apple iWatch (black)</a>
                                                                </td>
                                                                <td class="align-middle">1</td>
                                                                <td class="align-middle">$399.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">WALKING 400 BLUE CAT3</a>
                                                                </td>
                                                                <td class="align-middle">2</td>
                                                                <td class="align-middle">$41.1</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">Wireless headphones</a>
                                                                </td>
                                                                <td class="align-middle">1</td>
                                                                <td class="align-middle">$235.55</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">HERO ATHLETES BAG</a>
                                                                </td>
                                                                <td class="align-middle">1</td>
                                                                <td class="align-middle">$160.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <a href="javascript:" class="text-dark">POÄNG</a>
                                                                </td>
                                                                <td class="align-middle">3</td>
                                                                <td class="align-middle">$477.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a href="javascript:" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3rd row Start -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    <nav class="layout-footer footer bg-white">
                        <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                            <div class="pt-3">
                                <span class="footer-text font-weight-semibold">&copy; <a href="https://srthemesvilla.com" class="footer-link" target="_blank">Srthemesvilla</a></span>
                            </div>
                            <div>
                                <a href="javascript:" class="footer-link pt-3">About Us</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </nav>
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/libs/popper/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/layout-helpers.js"></script>
    <script src="assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/libs/eve/eve.js"></script>
    <script src="assets/libs/flot/flot.js"></script>
    <script src="assets/libs/flot/curvedLines.js"></script>
    <script src="assets/libs/chart-am4/core.js"></script>
    <script src="assets/libs/chart-am4/charts.js"></script>
    <script src="assets/libs/chart-am4/animated.js"></script>

    <!-- Demo -->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/analytics.js"></script>
    <script src="assets/js/pages/dashboards_index.js"></script>
</body>

</html>