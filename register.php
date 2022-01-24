<?php
include "include/config.php";
ob_start();
session_start();
include "include/include.php";
$property_id=$_GET['id'];
$con->query("UPDATE property_details SET property_view=property_view+1 WHERE id='$property_id'")
?>
<!doctype html>
<html lang="en" dir="ltr">
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
<style>
    .arrow-ribbon {
    color: #f8f9fa;
    }
    .image_size{
        max-height:310px;
        min-height:310px;
    }
    
</style>
	</head>

	<body class="main-body">

		<?php
include "header.php";?>
		
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="">
		</div>

	 		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Register</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li> 
								<li class="breadcrumb-item active text-white" aria-current="page">Register</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--Register-section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
				    <div class="single-page" >
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">
								<form id="Register" class="card-body" tabindex="500">
									<h3>Register</h3>
									<div class="name">
										<input type="text" name="name">
										<label>Name</label>
									</div>
										
									<div class="mail">
										<input type="email" name="mail">
										<label>Email Id</label>
									</div>
									<div class="number">
										<input type="number" name="pnumber">
										<label>Mobile Number</label>
									</div>
								
									<div class="passwd">
										<input type="password" name="password">
										<label>Password</label>
									</div>
										<div class="address">
										<input type="text" name="address">
										<label>Address</label>
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="#">Register</a>
									</div>
									<p class="text-dark mb-0">Already have an account?<a href="login.php" class="text-primary ml-1">Sign In</a></p>
								</form>
								 
							 
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Register-section-->

			

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
</html>