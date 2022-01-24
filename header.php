		<div id="mySidenav" class="sidenav" style="">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="javascript:void(0)" id="location_session_display"></a>
  
  <a href="#"><select class="form-control select2-show-search  border-bottom-0" id="location_session" onchange="select_city(this)">
												<!--<optgroup label="Categories">-->
			     <option value="*">Select City</option>
	<?php
	 $query_location="SELECT * FROM property_location ORDER BY name ASC";
    $result_location=$GLOBALS['con']->query($query_location);
	while($row_location=$result_location->fetch_assoc()){
	      $location_id= $row_location['id'];
	      $location_name= $row_location['name'];
	      echo'	<option value="'.$location_id.'">'.$location_name.'</option>';
	}
  
	?>		    
				
		<!--	</optgroup>-->
		</select></a>
		<a href="#"><select class="form-control select2-show-search  border-bottom-0" id="builder_session" onchange="select_builder(this)">
			<!--<optgroup label="Categories">-->
			     <option value="*">Top Builder</option>
	<?php
	 $query_builder="SELECT * FROM property_builder ORDER BY name ASC";
    $result_builder=$GLOBALS['con']->query($query_builder);
	while($row_builder=$result_builder->fetch_assoc()){
	      $builder_id= $row_builder['id'];
	      $builder_name= $row_builder['name'];
	      echo'	<option value="'.$builder_id.'">'.$builder_name.'</option>';
	}
  
	?>		    
		</select></a>
</div>
	
		<div class="header-main" id="top_bar">
			<div class="top-bar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
							<div class="top-bar-left d-flex">
								<div class="clearfix">
									<ul class="socials">
									    <li>
											<span id="mySidenav_button" style="cursor:pointer;color:white;" onclick="openNav()">&#9776;</span>
										</li>
										<li>
											<a class="social-icon text-dark"  href="https://www.facebook.com/bhoomantra712"><i class="fa fa-facebook"></i></a>
										</li>
									 
										<li>
											<a class="social-icon text-dark" href="https://in.linkedin.com/in/bhoomantra-services-private-limited-76717b221"><i class="fa fa-linkedin"></i></a>
										</li>
										 
									</ul>
								</div>
								 
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
							<div class="top-bar-right">
								<ul class="custom">
									<li>
										<a href="register.php" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
									</li>
									<li>
										<a href="login.php" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
									</li>
							
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Duplex Houses Header -->
			<div class="horizontal-header clearfix ">
				<div class="container">
					<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
					<span class="smllogo"><img src="assets/images/brand/logo.png" width="120" alt=""/></span>
					<a href="tel:8235712712" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- /Duplex Houses Header -->

			<div class="horizontal-main bg-dark-transparent clearfix" id="">
				<div class="horizontal-mainwrapper container clearfix">
					<div class="desktoplogo">
						<a href="index.php"><img src="assets/images/brand/logo3.png" alt=""></a>
					</div>
					<div class="desktoplogo-1">
						<a href="index.php"><img src="assets/images/brand/logo3.png" alt=""></a>
					</div>
					<!--Nav-->
					<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="index.php" >Home</a>
								 
							</li>
							<li aria-haspopup="true"><a href="about.php">About Us </a></li>  
							
							<li aria-haspopup="true"><a href="contact.php"> Contact Us <span class="hmarrow"></span></a></li>
						
						</ul>
						<ul class="mb-0" style="display:none;">
							<li aria-haspopup="true" class="mt-3 d-none d-lg-block top-postbtn">
								<span><a class="btn btn-secondary ad-post  " href="ad-posts.html"><img src="assets/images/android-app.png" class="wrapper-android">&nbsp;Download App</a></span>
							</li>
						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>