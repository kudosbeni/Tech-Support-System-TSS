<?php
require ("signUpTechinicianQuery.php");

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

      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
       <style type="text/css">
     body{
      background-image: url(assets/images/user-bg.jpg);
        background-size: 100% 100%;
      background-repeat: no-repeat;
      background-attachment: fixed;
    
    }
   </style>
  </head>

  <body themebg-pattern="theme1">
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
  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="POST">
                        <div class="text-center">
                            <img src="assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                    <center>
                                     <p class="error accountaddedsuccess-error" style="color: green;background-color: #d2ffd2;">
                                              <!-- error message -->
                                        <?php echo $accountAddedSuccess;?>
                                      </p>
                                      </center>
                                         
                                       <p class="error accountexist-error" style="color: red;background-color: #fde8ec;">
                                              <!-- error message -->
                                        <?php echo $accountExist_error;?>
                                      </p>
                                        <p class="error accountname-error" style="color: red;background-color: #fde8ec;">
                                              <!-- error message -->
                                        <?php echo $accountnames_error;?>
                                      </p>
                                        <p class="error accountphones-error" style="color: red;background-color: #fde8ec;">
                                              <!-- error message -->
                                        <?php echo $accountphone_error;?>
                                      </p>
                                           <p class="error accountPhonefewNumber-error" style="color: red;background-color: #fde8ec;">
                                              <!-- error message -->
                                        <?php echo $accountphonefewnumber_error;?>
                                      </p>
                                </div>
                         <!--        <div class="form-group form-primary">
                                    <input type="text" name="user-name" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Choose Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div> -->
                                     <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="techninames" value="<?php echo $TechniciNames?>" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Names</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="techniphone" maxlength="14" value="<?php echo $TechniciPhone?>" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="email" name="techniemail" value="<?php echo $TechniciEmail?>" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="technispecialin" value="<?php echo $TechniciSpecialIn?>" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Speciality</label>
                                        </div>
                                    </div>
                                </div>
                                     

                                   <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="techniaddress" value="<?php echo $TechniciAddress?>" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Location Addrees</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="technipass"value="<?php echo $TechniciPass?>" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-group form-primary">
                                    <input type="text"  class="form-control" name="technicieaddresss" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label"> Address</label>
                                </div>

                                  <div class="form-group form-primary">
                                   <!--  <input type="text" name="technidescr" maxlength="200" class="form-control" required=""> -->
                                   <textarea type="text" name="technidescr" maxlength="100" class="form-control" required=""><?php echo $TechniciDescr?></textarea>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Describe YourSelf</label>
                                </div>

                                 <input id="email" type="hidden" class="form-control"  name="propic" value="profile/Photo.jpg" />
                               
                          <!--       <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Send me the <a href="#!">Newsletter</a> weekly.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="savetech" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                       <a href="index.php" class="text-right f-w-600">already have an account?</a>
                                        <!-- <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="index.html"><b>Back to website</b></a></p> -->
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
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
<script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
