<?php  
session_start();  

require ("updatePendingProfileAccountQuery.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
     <title>Online Technician Support  MS</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">
          <style type="text/css">
        #zoomA {
  /* (A) OPTIONAL DIMENSIONS */
  width: 900px;
  height: auto;
 
  /* (B) ANIMATE ZOOM */
  /* ease | ease-in | ease-out | linear */
  transition: transform ease-in-out 0.3s;
}
 
/* (C) ZOOM ON HOVER */
#zoomA:hover { transform: scale(1.2); }
    </style>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                     <?php
                             $con=mysqli_connect("localhost", "root", "", "techiciensupportdb");
                             $count_query = "SELECT * FROM technicientb WHERE technicienstatus = 'DesActive' AND technicienrequest='Pending'";
                            $query = mysqli_query($con, $count_query);
                             $count = mysqli_num_rows($query);
                                           ?>
                                 <label class="label label-danger">(<?php echo $count; ?>)</label>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                     <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../assets/images/user.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                          <!--       <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p> -->
                                                <a href="viewTechnicianPendingProfile.php"> <span class="notification-time">Profile Technician Pending</span> </a>
                                            </div>
                                        </div>
                                    </li>
                                   <!--  <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="../assets/images/user.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $_SESSION["managernames"]; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                   
                               <!--      <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li> -->
                                    <li class="waves-effect waves-light">
                                      <a href="../logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                           
                            
                          
                                  <div class="pcoded-navigation-label">Manage Accounts</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">

                                              <?php
                             $con=mysqli_connect("localhost", "root", "", "techiciensupportdb");
                             $count_query = "SELECT * FROM technicientb WHERE technicienstatus = 'DesActive' AND technicienrequest='Pending'";
                            $query = mysqli_query($con, $count_query);
                             $count = mysqli_num_rows($query);
                                           ?>
                                  (<?php echo $count; ?>) 
                                        View Pending Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"> <a href="viewTechnicianPendingProfile.php">
                                                     
                                              <?php
                             $con=mysqli_connect("localhost", "root", "", "techiciensupportdb");
                             $count_query = "SELECT * FROM technicientb WHERE technicienstatus = 'DesActive' AND technicienrequest='Pending'";
                            $query = mysqli_query($con, $count_query);
                             $count = mysqli_num_rows($query);
                                           ?>
                                  (<?php echo $count; ?>) 
                                                    View Pending Profile </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>
                                          <li class=" ">
                                            <a href="viewTechnicianUpdatedProfile.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>View Updated Profile </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>

                                        <li class=" ">
                                            <a href="viewAllTechnicianUpdatedProfile.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>View All Updated Profile </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>
                                   
                                    </ul>
                                </li>
                            </ul>

                            
                                             <div class="pcoded-navigation-label">Manage Reports</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" >
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">

                            
                                     Manage Reports</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dayReports.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"> <a href="dayReports.php">
                                                     
                             
                                                    Day Reports </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>

                                    

                                        <li class=" ">
                                            <a href="monthReports.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>Month Reports </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>
                                   
                                    </ul>
                                </li>
                            </ul>
                          <!--   <div class="pcoded-navigation-label">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li >
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="chart-morris.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
                                        <span class="pcoded-mtext">Charts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="map-google.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext">Maps</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Pages</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Registration</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="sample-page.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                                                <span class="pcoded-mtext">Sample Page</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                        <!--     <h5 class="m-b-10">Basic Form Inputs</h5> -->
                                        <h4 class="m-b-0">Welcome to Tech Support System TSS</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                           
                                         <!--    <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">
                                       <!--  <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Material Form Inputs</h5>
                                                        span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Username</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Email (exa@gmail.com)</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="password" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Password</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" value="My value">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Predefine value</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" disabled>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Disabled</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" maxlength="6">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Max length 6 char</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <textarea class="form-control"></textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Text area Input</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Material Form Inputs With Static Label</h5>
                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" placeholder="Enter User Name">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Username</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" placeholder="Enter Email">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Email (exa@gmail.com)</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="password" name="footer-email" class="form-control" placeholder="Enter Password">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Password</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" placeholder="Pre define value" value="My value">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Predefine value</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" placeholder="disabled Input" disabled>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Disabled</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" maxlength="6" placeholder="Enter only 6 char">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Max length 6 char</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <textarea class="form-control">Enter Text hear</textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Text area Input</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!--     <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Colored Input</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-default</label>
                                                            </div>
                                                            <div class="form-group form-primary">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-primary</label>
                                                            </div>
                                                            <div class="form-group form-success">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-success</label>
                                                            </div>
                                                            <div class="form-group form-danger">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-danger</label>
                                                            </div>
                                                            <div class="form-group form-warning">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-warning</label>
                                                            </div>
                                                            <div class="form-group form-info">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-info</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Colored Input With Static Label</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-default</label>
                                                            </div>
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-primary</label>
                                                            </div>
                                                            <div class="form-group form-success form-static-label">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-success</label>
                                                            </div>
                                                            <div class="form-group form-danger form-static-label">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-danger</label>
                                                            </div>
                                                            <div class="form-group form-warning form-static-label">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-warning</label>
                                                            </div>
                                                            <div class="form-group form-info form-static-label">
                                                                <input type="text" name="footer-email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-info</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                                   <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Update Technician Profile</h5>
                                                        <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Technician Information Details </h4>
                                                              <?php
                                      $conn=mysqli_connect("localhost","root","", "techiciensupportdb") or die(mysql_error());
                                      $ID=$_GET['id'];
                                       ?>
    
                                          <?php


                                     $query = $conn->query("SELECT * FROM `technicientb` WHERE `technicienid` ='$ID'") or die(mysqli_error());
                                     $fetch = $query->fetch_array();
                                      ?>
                                                         <div class="row"> 
                                                                          <div class="col-md-6">
                                                                   <dl>
                                                            <dt class="text-muted">Full Name</dt>
                                                            <dd class='pl-4 fs-4 fw-bold'><?php echo $fetch['techniciennames']?></dd>
                                                            <dt class="text-muted">Phone </dt>
                                                            <dd class='pl-4 fs-4 fw-bold'><?php echo $fetch['technicienphone']?></dd>
                                                                <dt class="text-muted">Email</dt>
                                                            <dd class='pl-4 fs-4 fw-bold'><?php echo $fetch['technicienemail']?></dd>
                                                            
                                                               <dt class="text-muted">Description</dt>
                                                            <dd class='pl-4 fs-4 fw-bold'><?php echo $fetch['techniciendescrip']?></dd>
                                                           
                                                        </dl>
                                                      </div>


                                                        <div class="col-md-6">
                                                        <dl>
                                                         
                                                            <dt class="text-muted">Speciality</dt>
                                                            <dd class='pl-4 fs-4 fw-bold'><?php echo $fetch['technicienspecial']?></dd>
                                                            <dt class="text-muted">Status</dt>
                                                            <dd class='pl-4 fs-4 fw-bold'><?php echo $fetch['technicienstatus']?></dd>
                                                            <dt class="text-muted">Request</dt> <dd class='pl-4 text-dark'><?php echo $fetch['technicienrequest']?> </dd>

                                                          
                                                            <dt class="text-muted">Added On</dt> <dd class='pl-4 text-dark'><?php echo $fetch['addedon']?> </dd>
                                                          
                                                           
                                                        </dl>
                                                    </div>
                                                </div> 
                                                                                       
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                            </div>
                                        </div>

                                          <div style="margin-left: 100px; margin-bottom: 100px;"> <img src = "../photo/<?php echo $fetch['techcertifi']?>" height = "200" width = "250" id="zoomA"></div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Update Technician Profile</h5>
                                                        <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Technician Information</h4>
                                                        <form method="POST">
                                                             <input id="inputText3" type="hidden" name="technicienidd" class="form-control" readonly="" value="<?php echo $fetch['technicienid']?>">

                                                             <input id="inputText3" type="hidden" name="technicienphoned" class="form-control" readonly="" value="<?php echo $fetch['technicienphone']?>">

                                                             <input id="inputText3" type="hidden" name="techniciennamesd" class="form-control" readonly="" value="<?php echo $fetch['techniciennames']?>">

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Status</label>
                                                                <div class="col-sm-10">
                                                                    <select name="selectstatus" class="form-control" required="">
                                                                        <option></option>
                                                                       
                                                                        <option value="Active">Active</option>
                                                                         <option value="DesActive">DesActive</option>
                                                                    
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Request</label>
                                                                <div class="col-sm-10">
                                                                    <select name="selectrequest" class="form-control" required="">
                                                                        <option></option>
                                                                        <option value="Verfied">Verfied</option>
                                                                        <option value="Cancelled">Cancelled</option>
                                                                    
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                           
                                                           
                                                         <button type="submit" name="saveupdate" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Save Changes </button></div>
                                                        </form>
                                                   
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="../assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Custom js -->
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/vertical/vertical-layout.min.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
</body>

</html>
