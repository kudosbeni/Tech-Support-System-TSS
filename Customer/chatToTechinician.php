<?php  
session_start();  
require ("addMessageQuery.php");

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">
   <style type="text/css">
    body{
font-family: 'Raleway', sans-serif;
background: #E9ECE9;
}
.comments-main{
background: #FFF;
}
.comment time, .comment:hover time,.icon-rocknroll, .like-count {
-webkit-transition: .25s opacity linear;
transition: .25s opacity linear;
}
.comments-main ul li{
list-style: none;
}
.comments .comment {
padding: 5px 10px;
background: #00AF90;
}
.comments .comment:hover time{
opacity: 1;
}
.comments .user-img img {
width: 50px;
height: 50px;
}
.comments .comment h4 {
display: inline-block;
font-size: 16px;
}
.comments .comment h4 a {
color: #404040;
text-decoration: none;
}
.comments .comment .icon-rocknroll {
color: #545454;
font-size: .85rem;
}
.comments .comment .icon-rocknroll:hover {
opacity: .5;
}
.comments .comment time,.comments .comment .like-count,.comments .comment .icon-rocknroll {
font-size: .75rem;
opacity: 0;
}
.comments .comment time, .comments .comment .like-count {
font-weight: 300;
}
.comments .comment p {
font-size: 13px;
}
.comments .comment p .reply {
color: #BFBFA8;
cursor: pointer;
}
.comments .comment .active {
opacity: 1;
}
.icon-rocknroll {
background: none;
outline: none;
cursor: pointer;
margin: 0 .125rem 0 0;
}
.comments .comment:hover .icon-rocknroll,.comments .comment:hover .like-count {
opacity: 1;
}
.comment-box-main{
background: #CA1D5F;
}
@media (min-width: 320px) and (max-width: 480px){
.comments .comment h4 {
font-size: 12px;
}
.comments .comment p{
font-size: 11px;
}
.comment-box-main .send-btn button{
margin-left: 5px;
}
}
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
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="../assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
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
                             $count_query = "SELECT * FROM messagetb WHERE techrepliestat= 'replied' AND   customerid='".$_SESSION['customerid']."'";
                            $query = mysqli_query($con, $count_query);
                             $fetch = $query->fetch_array();
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
                                            <img class="d-flex align-self-center img-radius" src="../assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                          <!--       <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p> -->
                                                <a href="viewUpdateRepliedMessage.php?id=<?php echo $fetch['messageid']?>"> <span class="notification-time">Replied Messages</span> </a>
                                            </div>
                                        </div>
                                    </li>
                                <!--     <li class="waves-effect waves-light">
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
                                    <img src="../assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $_SESSION["customernames"]; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                             <!--        <li class="waves-effect waves-light">
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
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="../assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $_SESSION["customernames"]; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                             <a href="../logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div>
                          <!--   <div class="pcoded-navigation-label">Navigation</div> -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="homeCustomer.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Manage Accounts</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">

                                   
                                        View  Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"> <a href="viewProfileSettings.php">
                                      
                                                    View  Profile </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>
                                         

                                      
                                    </ul>
                                </li>
                            </ul>
                           <!--  <div class="pcoded-navigation-label">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Basic</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Accordion</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tabs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Color</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Label Badge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Typography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Notifications</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                           <!--  <div class="pcoded-navigation-label">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li >
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
                                          <!--   <h5 class="m-b-10">Bootstrap Basic Tables</h5> -->
                                         <p class="m-b-0">Welcome to Supports  Techician</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="homeCustomer.php">Dashboard </a>
                                            </li>
                                           <!--  <li class="breadcrumb-item"><a href="#!">Basic Tables</a> -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                              <?php
                                      $conn=mysqli_connect("localhost","root","", "techiciensupportdb") or die(mysql_error());
                                      $ID=$_GET['id'];

                                        $query = $conn->query("SELECT * FROM `technicientb` WHERE `technicienid` ='$ID'") or die(mysqli_error());
                                     $fetchd = $query->fetch_array();
                                       ?>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                     
                                        <!-- Basic table card end -->
                                        <!-- Inverse table card start -->
                                   
                                        <!-- Inverse table card end -->
                                        <!-- Hover table card start -->
                                      
                                        <!-- Hover table card end -->
                                        <!-- Contextual classes table starts -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Send Message</h5>
                                               <!--  <span>For Make row Contextual add Contextual class like <code>.table-success</code> in <code> tr tag</code> and For cell add Contextual class in <code> td or th tag</code> . </span> -->
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>

                              <!--                     <div class="float-right">
                              <form>
                                <div class="input-group">
                                  <input type="search" id="myInput" onkeyup="myFunction()"  placeholder="Search for names.." class="form-control" />
                                  <div class="input-group-btn">
                                 <button class="btn btn-secondary"><i class="ion ion-search"></i></button> 
                                  </div>
                                </div>
                              </form>
                            </div><br><br> -->

                                            </div>
                      <p class="error eventaddedsuccess-error" style="color:green;background-color: #d2ffd2;">
                       <!-- error message -->
                       <?php echo $eventAddedSuccess;?>
                       </p>
       <div class="container">
<div class="row mt-5">
<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
<ul class="p-0">

                                                 <?php
                         $conn=mysqli_connect("localhost","root","", "techiciensupportdb") or die(mysql_error());
                         $sno=0;
                         $query = $conn->query("SELECT * FROM `messagetb` WHERE technicieid = '$ID' AND customerid='".$_SESSION['customerid']."'   ORDER BY  messageid DESC") or die(mysqli_error());
                         while($fetch = $query->fetch_array()){
                         $sno++;
                          

                         ?>
<li>

<div class="row comments mb-2">
<div class="col-md-2 col-sm-2 col-3 text-center user-img">
<img id="profile-photo" src="../profile/users.ico" class="rounded-circle" />
</div>
<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
<h4 class="m-0"><a href="#"><?php echo $fetch['techName']?></a></h4>
<time class="text-white ml-3"><?php echo $fetch['sentontime']?> <?php echo $fetch['sentondate']?></time>
<like></like>
<p class="mb-0 text-white"><?php echo $fetch['sentsms']?></p>
</div>
</div>

</li>
                                          <?php 
                                                                }
                                                                ?>

<ul class="p-0">

                              <?php
                         $conn=mysqli_connect("localhost","root","", "techiciensupportdb") or die(mysql_error());
                          $sno=0;
                         $query = $conn->query("SELECT * FROM `messagetb` WHERE technicieid = '$ID' AND customerid='".$_SESSION['customerid']."'   ORDER BY  messageid DESC") or die(mysqli_error());
                         while($fetch = $query->fetch_array()){
                         $sno++;
                          $Status=$fetch['receivedsms'];

                         ?>
<li>
<div class="row comments mb-2">
<div class="col-md-2 offset-md-2 col-sm-2 offset-sm-2 col-3 offset-1 text-center user-img">
<img id="profile-photo" src="../profile/Photo.jpg" class="rounded-circle" />
</div>
<div class="col-md-7 col-sm-7 col-8 comment rounded mb-2">
<h4 class="m-0"><a href="#">      <?php
                     if ($Status=="not replied") {
        echo "<p style='color:white;' class='btn btn-danger'>Not Replied</p>";
                }
                 else{
        echo $fetch['techName'];
                }
                     ?></a></h4>
<time class="text-white ml-3">

 <?php
                     if ($Status=="not replied") {
        echo "<p style='color:white;' class='btn btn-danger'>Not Replied</p>";
                }
                 else{
        echo $fetch['sentontime'];  echo $fetch['sentondate'];
                }
                     ?>
</time>
<like></like>
<p class="mb-0 text-white">
 <?php
                     if ($Status=="not replied") {
        echo "<p style='color:white;' class='btn btn-danger'>Not Replied</p>";
                }
                 else{
        echo $fetch['receivedsms'];
                }
                     ?>

</p>
</div>
</div>
</li>
 <?php 
                                                                }
                                                                ?>
</ul>
</ul>


<div class="row comment-box-main p-3 rounded-bottom">
<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
    <form method="POST">
        <input type="hidden" class="form-control" name="custnames" value="<?php echo $_SESSION["customernames"]; ?>" required="" />
        <input type="hidden" class="form-control" name="custid" value="<?php echo $_SESSION["customerid"]; ?>" required="" />

        <input type="hidden" class="form-control" name="technnames" value="<?php  echo $fetchd['techniciennames']; ?>" required="" />
        <input type="hidden" class="form-control" name="technid" value="<?php  echo $ID; ?>" required="" />

<input type="text" class="form-control" name="custmmesage" placeholder="Message...." required="" />
</div>
<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
<button type="submit" class="btn btn-info" name="sendsms">Send</button>
</form>
</div>
</div>
</div>
</div>
</div>
                                        <!-- Contextual classes table ends -->
                                        <!-- Background Utilities table start -->
                              
                                        <!-- Background Utilities table end -->
                                    </div>
                                    <!-- Page-body end -->
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
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
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
    <script src="../assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Custom js -->
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/vertical/vertical-layout.min.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>
<script type="text/javascript">
    Vue.component('like', {
template: "<div class='like-data float-right text-white'><button class='icon-rocknroll mr-1 p-0 border-0' v-class='active: liked' v-on='click: toggleLike'><i class='fa fa-thumbs-up text-white' aria-hidden='true'></i></button><span class='like-count' v-class='active: liked'>{{ likesCount }}</span></div>",
data: function() {
return {
liked: false,
likesCount: 0
}
},
methods: {
toggleLike: function() {
this.liked = !this.liked;
this.liked ? this.likesCount++ : this.likesCount--;
}
}
});
new Vue({
el: '.comments-main',
});
</script>
</body>

</html>
