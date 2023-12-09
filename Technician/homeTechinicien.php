<?php  
session_start();  


?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tech Support System TSS</title>
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
    <!-- waves.css -->
    <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
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
                             $count_query = "SELECT * FROM messagetb WHERE receivedsms= 'not replied' AND   technicieid='".$_SESSION['technicienid']."'";
                            $query = mysqli_query($con, $count_query);
                             $count = mysqli_num_rows($query);
                                           ?>
                                <label class="label label-danger">(<?php echo $count; ?>)</label>

                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Messages</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                      <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../assets/images/user.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <!-- <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p> -->
                                                <a href="viewNewMessages.php"> <span class="notification-time">View New Messages</span> </a>
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
                                    <span><?php echo $_SESSION["techniciennames"]; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    
                                 <!--    <li class="waves-effect waves-light">
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
                                        <a href="../logout.php?id=<?php echo $_SESSION["technicienid"]; ?>">
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
                            
                           <!--  <div class="pcoded-navigation-label">Navigation</div> -->
                            
                                          

                     <div class="pcoded-navigation-label">Manage Messages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Manage Messages 
                                        <?php
                             $con=mysqli_connect("localhost", "root", "", "techiciensupportdb");
                             $count_query = "SELECT * FROM messagetb WHERE receivedsms= 'not replied' AND   technicieid='".$_SESSION['technicienid']."'";
                            $query = mysqli_query($con, $count_query);
                             $count = mysqli_num_rows($query);
                                           ?>
                                           (<?php echo $count; ?>)
                                        </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="homeTechinicien.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"> <a href="viewNewMessages.php">View New Messages  </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>


                                        <li class=" ">
                                            <a href="homeTechinicien.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"> <a href="viewRepliedMessages.php">View Replied Messages  </a></span>
                                                <span class="pcoded-mcaret"></span>
                                           
                                        </li>
                                   
                                    </ul>
                                </li>
                            </ul>
           <!--                  <div class="pcoded-navigation-label">Manage Account</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Manage Profile</span>
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
                           <!--  <div class="pcoded-navigation-label">Manage Messages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">View New Messages</span>
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
                                         <!--    <h5 class="m-b-10">Dashboard</h5> -->
                                             <h4 class="m-b-0">Welcome to Tech Support System TSS</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="homeTechinicien.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            
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
                                                <h5>View Profile Settings</h5>
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
                                            </div>
                                            <div class="row">
                                                                           <?php
                                      $conn=mysqli_connect("localhost","root","", "techiciensupportdb") or die(mysql_error());
                                      // $ID=$_GET['id'];
                                       ?>
    
                                          <?php


                                     $query = $conn->query("SELECT * FROM `technicientb` WHERE `technicienid` ='".$_SESSION['technicienid']."'") or die(mysqli_error());
                                     $fetch = $query->fetch_array();
                                      ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">

                                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar" style="margin-left: 10px;"><i class="fa fa-pencil"></i></a>

                                <img src="../photo/<?php echo $fetch['technicienphoto']?>" alt="" height = "120" width = "600"class="img-80 img-radius" style="margin-left: 100px;">
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body pd-5">
                                                <div class="img-container">
                                                   <img src="../photo/<?php echo $fetch['technicienphoto']?>" alt=""class="img-80 img-radius">
                                                </div>
                                                <form method="POST"  enctype="multipart/form-data" >
                                                <div class="img-container">
                                                      <input type="hidden" class=" form-control" name="technicienids" value="<?php echo $fetch['technicienid']?>">
                                                      <label>Upload Passport Photo</label>
                                                  <input type="file" class=" form-control" name="photo" required="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="updatePic" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-center h5 mb-0"><?php echo $fetch['techniciennames']?></h5>
                           <!--  <p class="text-center text-muted font-14">Lorem ipsum dolor sit amet</p> -->
                            <div class="profile-info" style="margin-left: 20px;">
                                <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                <ul>
                                    <li>
                                        <span>Email Address:</span>
                                     <?php echo $fetch['technicienemail']?>
                                    </li>
                                    <li>
                                        <span>Phone Number:</span>
                                       <?php echo $fetch['technicienphone']?>
                                    </li>
                                  <!--   <li>
                                        <span>Country:</span>
                                        America
                                    </li> -->
                                    <li>
                                        <span>Address:</span>
                                        <?php echo $fetch['technicieaddress']?><br>
                                        
                                    </li>
                                </ul>
                            </div>
                           <!--  <div class="profile-social">
                                <h5 class="mb-20 h5 text-blue">Social Links</h5>
                                <ul class="clearfix">
                                    <li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></a></li>
                                </ul>
                            </div> -->
                           <!--  <div class="profile-skills">
                                <h5 class="mb-20 h5 text-blue">Key Skills</h5>
                                <h6 class="mb-5 font-14">HTML</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="mb-5 font-14">Css</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="mb-5 font-14">jQuery</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="mb-5 font-14">Bootstrap</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="tab height-100-p">
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Information </a>
                                        </li>
                                      <!--   <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Tasks</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- Timeline Tab start -->
                                        <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="profile-timeline">
                                                    <div class="timeline-month">
                                                        <h5>Speciality</h5>
                                                    </div>
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            <li>
                                                                <div class="date">  <?php echo $fetch['technicienspecial']?></div>
                                                                <div class="task-name"><i class="ion-android-alarm-clock"></i> Description </div>
                                                                <p><?php echo $fetch['techniciendescrip']?></p>
                                                                
                                                            </li>
                                                           <!--  <li>
                                                                <div class="date">10 Aug</div>
                                                                <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 Aug</div>
                                                                <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 Aug</div>
                                                                <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                 <!--    <div class="timeline-month">
                                                        <h5>July, 2020</h5>
                                                    </div>
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            <li>
                                                                <div class="date">12 July</div>
                                                                <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 July</div>
                                                                <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="timeline-month">
                                                        <h5>June, 2020</h5>
                                                    </div>
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            <li>
                                                                <div class="date">12 June</div>
                                                                <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 June</div>
                                                                <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 June</div>
                                                                <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Timeline Tab End -->
                                        <!-- Tasks Tab start -->
                                       
                                        <!-- Setting Tab start -->
                                        <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                            <div class="profile-setting">
                                                <form method="POST">
                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-6">
                                                            <h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4>
                                                            <input type="hidden" name="technicienidd" value="<?php echo $fetch['technicienid']?>"class="form-control" />
                                                            <div class="form-group">
                                                                <label>Full Name</label>
                                                                <input class="form-control form-control-lg"  name="techninames" type="text" value="<?php echo $fetch['techniciennames']?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input class="form-control form-control-lg" name="techniphone" type="text" value="<?php echo $fetch['technicienphone']?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input class="form-control form-control-lg" name="techniemail" type="email" value="<?php echo $fetch['technicienemail']?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Addrress</label>
                                                                <input class="form-control form-control-lg date-picker" name="technicieaddresss" type="text" value="<?php echo $fetch['technicieaddress']?>">
                                                            </div>


                                                      <!--       <div class="form-group">
                                                                <label>Gender</label>
                                                                <div class="d-flex">
                                                                <div class="custom-control custom-radio mb-5 mr-20">
                                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label weight-400" for="customRadio4">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-5">
                                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label weight-400" for="customRadio5">Female</label>
                                                                </div>
                                                                </div>
                                                            </div> -->
                                                      <!--       <div class="form-group">
                                                                <label>Country</label>
                                                                <select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
                                                                    <option>United States</option>
                                                                    <option>India</option>
                                                                    <option>United Kingdom</option>
                                                                </select>
                                                            </div> -->
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input class="form-control form-control-lg" name="technipass" type="text" value="<?php echo $fetch['techniciepass']?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Speciality</label>
                                                                <input class="form-control form-control-lg" name="technispecialin"  type="text" value="<?php echo $fetch['technicienspecial']?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Decription</label>
                                                                <input class="form-control form-control-lg"  name="technidescr" type="text" value="<?php echo $fetch['techniciendescrip']?>">
                                                            </div>
                                                           <!--  <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Visa Card Number</label>
                                                                <input class="form-control form-control-lg" type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Paypal ID</label>
                                                                <input class="form-control form-control-lg" type="text">
                                                            </div> -->
                                                           <!--  <div class="form-group">
                                                                <div class="custom-control custom-checkbox mb-5">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1-1">
                                                                    <label class="custom-control-label weight-400" for="customCheck1-1">I agree to receive notification emails</label>
                                                                </div>
                                                            </div> -->
                                                            <div class="form-group mb-0">
                                                                <input type="submit" name="saveupdate" class="btn btn-primary" value="Update Information">
                                                            </div>
                                                        </li>
                                                      <!--   <li class="weight-500 col-md-6">
                                                            <h4 class="text-blue h5 mb-20">Edit Social Media links</h4>
                                                            <div class="form-group">
                                                                <label>Facebook URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Twitter URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Linkedin URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Instagram URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Dribbble URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Dropbox URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Google-plus URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Pinterest URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Skype URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Vine URL:</label>
                                                                <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary" value="Save & Update">
                                                            </div>
                                                        </li> -->
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Setting Tab End -->
                                    </div>
                                </div>
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
                            
                            
                            <div id="styleSelector"> </div>
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

    <!-- slimscroll js -->
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="../assets/js/script.js "></script>
</body>

</html>
