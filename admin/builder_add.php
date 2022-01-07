<?php
include "../include/config.php";
ob_start();
session_start();
?>
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html template, real estate websites, real estate html template, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website"/>

		<!-- Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Reallist – Clean & Modern Admin Dashboard Bootstrap 4  HTML Template</title>
		<link rel="stylesheet" href="../assets/fonts/fonts/font-awesome.min.css">

		<!-- Sidemenu Css -->
		<link href="../assets/css/sidemenu.css" rel="stylesheet" />

		<!-- Bootstrap Css -->
		<link href="../assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="../assets/css/style.css" rel="stylesheet" />
		<link href="../assets/css/admin-custom.css" rel="stylesheet" />

		<!-- Select2 Plugin -->
		<link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- WYSIWYG Editor css -->
		<link href="../assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />

		<!-- p-scroll bar css-->
		<link href="../assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />

		<!-- Data table css -->
		<link href="../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="../assets/plugins/datatable/jquery.dataTables.min.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="../assets/css/icons.css" rel="stylesheet"/>

		<!-- file Uploads -->
        <link href="../assets/plugins/fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />
	</head>

	<body class="app sidebar-mini">

		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="">
		</div>
		<div class="page">
			<div class="page-main">
			<?php
                include "header.php";
                ?>

				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">New Builder</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Settings</a></li>
								<li class="breadcrumb-item active" aria-current="page">New Builder</li>
							</ol>

						</div>
						<div class="row row-cards">
							<div class="col-md-12">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Create New Builder</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Enter Builder Name</label>
											<input type="text" class="form-control w-100" name="builder_name" placeholder="" required>
										</div>
											</div>
										<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Primary Contact No.</label>
											<input type="number" class="form-control w-100" name="primary_mobile" placeholder="" required>
										</div>
											</div>	
										<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Secondary Contact No.</label>
											<input type="number" class="form-control w-100" name="secondary_mobile" placeholder="" >
										</div>
											</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Primary Email</label>
													<input type="email" class="form-control w-100" name="primary_email" placeholder="" >
											</div>
											</div>	
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Secondary Email</label>
													<input type="number" class="form-control w-100" name="secondary_email" placeholder="" >
											</div>
											</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control"row="2" name="address"></textarea>
											</div>
											</div>
											
											
										<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Upload Logo</label>
											<input type="file" class="dropify" data-height="180" name="logo" accept="image/png, image/gif, image/jpeg, image/jpg">
										</div>
											</div>
											</div>
									</div>
									<div class="card-footer text-center">
										<button type="submit" class="btn btn-primary waves-effect waves-light" name="submit_add_builder">Add Builder</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					
					</div>
				</div>
			</div>

			<?php
            include "footer.php";
            ?>
		</div>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>


		<!-- Dashboard js -->
		<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="../assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="../assets/js/vendors/selectize.min.js"></script>
		<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="../assets/js/vendors/circle-progress.min.js"></script>
		<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Data tables -->
		<script src="../assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="../assets/js/datatable.js"></script>
		
		<!-- Fullside-menu Js-->
		<script src="../assets/plugins/toggle-sidebar/sidemenu.js"></script>


		<!--Select2 js -->
		<script src="../assets/plugins/select2/select2.full.min.js"></script>

		<!-- WYSIWYG Editor js -->
		<script src="../assets/plugins/wysiwyag/jquery.richtext.js"></script>
		<script src="../assets/js/formeditor.js"></script>

		<!-- p-scroll bar Js-->
		<script src="../assets/plugins/pscrollbar/pscrollbar.js"></script>
		<script src="../assets/plugins/pscrollbar/pscroll.js"></script>

		<!--Counters -->
		<script src="../assets/plugins/counters/counterup.min.js"></script>
		<script src="../assets/plugins/counters/waypoints.min.js"></script>

		<!-- Custom Js-->
		<script src="../assets/js/admin-custom.js"></script>

		<!-- Inline js -->
		<script src="../assets/js/select2.js"></script>
		<script src="../assets/js/formelements.js"></script>

		<!-- file uploads js -->
        <script src="../assets/plugins/fileuploads/js/dropify.js"></script>

		<?php
		if(isset($_POST['submit_add_builder'])){
			$builder_name=$_POST['builder_name'];
			$primary_mobile=$_POST['primary_mobile'];
			$secondary_mobile=$_POST['secondary_mobile'];
			$primary_email=$_POST['primary_email'];
			$secondary_email=$_POST['secondary_email'];
			$address=$_POST['address'];

		
			
	    $file_name = time();
		$file_name=$file_name+$i;
		$source_file = $_FILES['logo']['tmp_name'];
        $dest_file = "../assets/images/builder/";
        $extension = pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($source_file, $dest_file . $file_name . "." . $extension)
            or die("Error!!");
        $file_name = "$file_name.$extension";
        $query="INSERT INTO `property_builder`(`name`, `logo`, `primary_contact`, `secondary_contact`, `primary_email`, `secondary_email`, `address`) VALUES ('$builder_name','$file_name','$primary_mobile','$secondary_mobile','$primary_email','$secondary_email','$address')";
			$con->query($query);
        $con -> close();
		echo'
		    <script>
		    alert("New Builder Name Added Successfully");
		    window.location.replace("builder_add.php");
		    </script>
		    ';
		}
		?>

	</body>
</html>