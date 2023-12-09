<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Tech Support system TSS</title>

		<!-- favicon img -->
		<!-- <link rel="shortcut icon" type="image/icon" href="assetss/logo/favicon.png"/> -->

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assetss/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assetss/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assetss/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assetss/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assetss/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assetss/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assetss/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assetss/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assetss/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assetss/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assetss/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.php">
									Tech<span>Support</span>System
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth"><a href="index.php">home</a></li>
										<li class="smooth"><a href="technician.php">Technician</a></li>
										<li class="smooth"><a href="about.php">About us </a></li>
										<li class="smooth"><a href="login.php">Login</a></li>
						
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->

		
		
		
		

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
					Our Technicians
					</h2>
				<!-- 	<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
					</p> -->
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
                               <?php
                         $conn=mysqli_connect("localhost","root","", "techiciensupportdb") or die(mysql_error());
                          $sno=0;
                         $query = $conn->query("SELECT * FROM `technicientb` WHERE technicienstatus = 'Active' AND technicienrequest='Verfied' ORDER BY  technicienid DESC") or die(mysqli_error());
                         while($fetch = $query->fetch_array()){
                         $sno++;
                            $Status=$fetch['viewstat'];

                         ?>
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="photo/<?php echo $fetch['technicienphoto']?>" alt="" height = "100" width = "400">
								<div class="single-package-item-txt">
									<h3><?php echo $fetch['techniciennames']?> <span class="pull-right">
										
												  <?php
											                                 if ($Status=="Online") {
											                                   echo "<p style='color:white;' class='btn btn-success'>Online</p>";
											                                 }
											                                 else{
											                                  echo "<p style='color:white;' class='btn btn-danger'>Offline</p>";
											                                 }
                                                                             ?>
									</span></h3>
									<div class="packages-para">
										<p>
											<span>
												 Phone Number :
											</span>
											<i class="fa fa-angle-right"></i> <?php echo $fetch['technicienphone']?>
										</p>
										<p>
											<span>
											 Email:  <?php echo $fetch['technicienemail']?>
											</span>
											
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											Special in: 
											<span><?php echo $fetch['technicienspecial']?></span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<a href="technicienProfileDetails.php?id=<?php echo $fetch['technicienid']?>"  class="about-view packages-btn">More details</a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

			                                               <?php 
                                                                }
                                                                ?>

					<!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		<!--/.testimonial-->	
		<!-- testemonial End -->


		<!--special-offer start-->
<!--/.special-offer end-->
		<!--special-offer end-->

		<!--blog start-->

		<!--blog end-->

		

		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
		
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>
		        	<p>&copy; 2023 <a href="#">Kudos Beni</a>. All Right Reserved</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="assetss/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assetss/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assetss/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assetss/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assetss/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assetss/js/jquery.counterup.min.js"></script>
		<script src="assetss/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assetss/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assetss/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assetss/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assetss/js/custom.js"></script>


	</body>

</html>