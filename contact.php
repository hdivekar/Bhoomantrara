<?php
include "include/config.php";
ob_start();
session_start();
include "/include/include.php";
?>
<!doctype html>
<html class="no-js" >
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Bhoomantra - Your RealEstate Friend" name="description">
		<meta content="Bhoomantra Services Private Limited" name="author">
		<meta name="keywords" content="html template, real estate websites, real estate html template, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website"/>

		<?php
include "css.php";
?>

	</head>

	<body class="main-body">

<?php
include "header.php";
?>

		<!--Breadcrumb-->
		<div>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Contact Us</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<section class="sptb bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row text-white">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="support-service bg-primary">
										<i class="fa fa-phone"></i>
										<h6><a href="tel:+ 918235712712" style="color:#fff;"> + 91 82 35 712 712</a></h6>
										<P>Free Support!</P>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="support-service bg-secondary">
										<i class="fa fa-clock-o"></i>
										<h6>Tue-Sun(10:00am - 6:00pm)</h6>
										<p>Working Hours!</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card mb-lg-0">
									<div class="support-service bg-warning">
										<i class="fa fa-map-marker"></i>
										<h6>Royal Empress, 3rd Floor,
                                              Unit No.301, Wing A,
                                                  Baner - Mahalunge Road, Baner
                                           </h6>
										<p> Pune
                                             Maharashtra, India.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card mb-0">
									<div class="support-service bg-info">
										<i class="fa fa-envelope-o"></i>
										<h6><a href="mailto:"support@bhoomantra.com"  style="color:#fff;"> support@bhoomantra.com</a></h6>
										<p>Support us!</p><br> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Contact-->
		<div class="sptb">
			<div class="container">
				<div class="row">
				    <div class="col-lg-6 col-xl-6  col-md-12">
					    <div class="map1">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.2117483684565!2d73.77782451530862!3d18.564489972673776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2becc34802539%3A0x7e5b3a0d67c06664!2sRoyal%20Empress%2C%20Baner%20-%20Mahalunge%20Rd%2C%20Baner%2C%20Pune%2C%20Maharashtra%20411045!5e0!3m2!1sen!2sin!4v1640604559962!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							<!-- <div class="map-header-layer" id="map2"></div>-->
						</div>
					</div>
				    <div class="col-lg-6 col-xl-6 col-md-12">
						<div class="card mb-0">
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="name1" placeholder="Your Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Email Address">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
								</div>
								<div class="text-left">
									<a href="#" class="btn btn-primary">Send Message</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

	 <?php
include "footer.php";
?>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		 <?php
include "js.php";
?>

	</body>
	
</html>