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
							<h4 class="page-title">New Property</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Settings</a></li>
								<li class="breadcrumb-item active" aria-current="page">New Property</li>
							</ol>

						</div>
						<div class="row row-cards">
							<div class="col-md-12">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Create New Property</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Enter Project</label><!--Property Name-->
											<input type="text" class="form-control w-100" name="property_name" placeholder="" required>
										</div>
											</div>
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Project Segment</label>
											<input type="text" class="form-control w-100" name="project_segment" placeholder="" required>
										</div>
											</div>
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Select Main Configuration</label><!--Category Name-->
											<select class="form-control " name="main_category">
											    <?php
											    $query="SELECT * FROM main_category";
											    $result=$con->query($query);
											    if($result->num_rows>0){
											        while($row=$result->fetch_assoc()){
											            $category_id=$row['id'];
											            $category_name=$row['name'];
											            
											            echo'<option value='.$category_id.'>'.$category_name.'</option>';
											        }
											    }
											    ?>
											</select>
										</div>
											</div>
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Select Configuration</label><!--Category Name-->
											<select class="form-control " name="property_category">
											    <?php
											    $query="SELECT * FROM property_category";
											    $result=$con->query($query);
											    if($result->num_rows>0){
											        while($row=$result->fetch_assoc()){
											            $category_id=$row['id'];
											            $category_name=$row['name'];
											            
											            echo'<option value='.$category_id.'>'.$category_name.'</option>';
											        }
											    }
											    ?>
											</select>
										</div>
											</div>
												<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Configuration Type</label><!--Area-->
											<input type="text" class="form-control w-100" name="configuration_type" placeholder="Spacious" required>
										</div>
										</div>
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Select State</label>
											<select class="form-control " name="property_state">
											    <?php
											    $query="SELECT * FROM property_state";
											    $result=$con->query($query);
											    if($result->num_rows>0){
											        while($row=$result->fetch_assoc()){
											            $state_id=$row['id'];
											            $state_name=$row['name'];
											            
											            echo'<option value='.$state_id.'>'.$state_name.'</option>';
											        }
											    }
											    ?>
												
														</select>
										</div>
											</div>
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Select City</label><!--Location-->
											<select class="form-control " name="property_location">
											    <?php
											    $query="SELECT * FROM property_location";
											    $result=$con->query($query);
											    if($result->num_rows>0){
											        while($row=$result->fetch_assoc()){
											            $location_id=$row['id'];
											            $location_name=$row['name'];
											            
											            echo'<option value='.$location_id.'>'.$location_name.'</option>';
											        }
											    }
											    ?>
											</select>
										</div>
											</div>
												<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">No. of Bedrooms</label><!--Area-->
											<input type="number" class="form-control w-100" name="bed_rooms" placeholder="" required>
										</div>
											</div>
										<div class="col-md-12">
											<div class="form-group ">
											<label class="form-label">Enter Location</label><!--Area-->
											<input type="text" class="form-control w-100" name="property_area" placeholder="" required>
										</div>
											</div>	
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Carpet Area(Sq.ft)</label>
											<input type="number" class="form-control w-100"  name="carpet_area" placeholder="" required>
										</div>
											</div>
											<div class="col-md-6">
											<div class="form-group ">
											<label class="form-label">Enter Price</label>
											<input type="text" class="form-control w-100" onkeyup="indian_currency()" id="property_price" name="property_price" placeholder="" required>
										</div>
											</div>
										
										
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control" name="property_address" rows="4" placeholder=""></textarea>
											</div>
											</div>	
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-label">Description</label>
												<textarea class="content" name="property_description"></textarea>
											</div>
											</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">About Project</label>
												<textarea class="form-control"row="2" name="property_short_description"></textarea>
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Proximap Distance<sup>(Separate by comma)</sup></label>
												
												<textarea  class="form-control" row="2" name="property_key_distance"></textarea>
											</div>
											</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Latitude</label>
												<input type="number" class="form-control w-100" name="property_latitude" placeholder="" required>
											</div>
											</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Longitude</label>
												<input type="number" class="form-control w-100" name="property_longitude" placeholder="" required>
											</div>
											</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-label">Facilities</label>
                                                    <div class="custom-controls-stacked">
                                                    <div class="row">
                                                    
                                                     <?php
											    $query="SELECT * FROM property_facilities";
											    $result=$con->query($query);
											    if($result->num_rows>0){
											        while($row=$result->fetch_assoc()){
											            $facilities_id=$row['id'];
											            $facilities_name=$row['name'];
											            echo'
											            <div class="col-md-3">
											            <label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="property_facilities[]" value="'.$facilities_id.'">
															<span class="custom-control-label">'.$facilities_name.'</span>
														</label>
														</div>
														';
											        }
											    }
											    ?>    
														</div>
														</div>
														</div>
											</div>
										
										
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-label">Builders</label>
                                                    <div class="custom-controls-stacked">
                                                    
                                                    <select class="form-control select2" data-placeholder="Choose Browser" name="property_builder[]" multiple>
                                                     <?php
											    $query="SELECT * FROM property_builder";
											    $result=$con->query($query);
											    if($result->num_rows>0){
											        while($row=$result->fetch_assoc()){
											            $builder_id=$row['id'];
											            $builder_name=$row['name'];
											            echo'
											            <option value="'.$builder_id.'">'.$builder_name.'</option>
														';
											        }
											    }
											    ?>    
														</select>
														</div>
														</div>
											</div>
											
										<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Upload Images</label>
											<input type="file" class="dropify" data-height="180" name="property_image[]" accept="image/png, image/gif, image/jpeg, image/jpg" multiple>
										</div>
											</div>
											</div>
									</div>
									<div class="card-footer text-center">
										<button type="submit" class="btn btn-primary waves-effect waves-light" name="submit_add_property">Add Property</button>
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
<script>
function indian_currency(){
    
    var xvalue=document.getElementById("property_price").value;
    if(xvalue!=""){
    var x = parseFloat(xvalue.replace(/,/g, ''))
    x=x.toString();
    var lastThree = x.substring(x.length-3);
    var otherNumbers = x.substring(0,x.length-3);
    if(otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
    
    document.getElementById("property_price").value=res;
    }
}

</script>
		<?php
		if(isset($_POST['submit_add_property'])){
			$property_name=$_POST['property_name'];
			$project_segment=$_POST['project_segment'];
			$main_category=$_POST['main_category'];
			$configuration_type=$_POST['configuration_type'];
			$property_category=$_POST['property_category'];
			$property_state=$_POST['property_state'];
			$property_location=$_POST['property_location'];
			$property_area=$_POST['property_area'];
			$bed_rooms=$_POST['bed_rooms'];
			$carpet_area=$_POST['carpet_area'];
			$property_price=$_POST['property_price'];
			$property_price=str_replace(",","",$property_price);
			$property_address=$_POST['property_address'];
			$property_description=$_POST['property_description'];
			$property_latitude=$_POST['property_latitude'];
			$property_longitude=$_POST['property_longitude'];
			$property_facilities=$_POST['property_facilities'];
			$property_builder=$_POST['property_builder'];
			
			$property_key_distance=$_POST['property_key_distance'];
			$property_short_description=$_POST['property_short_description'];
			$property_key_distance_arr = explode (",", $property_key_distance);
			
			$i=1;
			$facility="";
			foreach($property_facilities as $arr){
			 if($i==1){
			     $facility=$arr;
			     $i++;
			 }else{
			     $facility.=",".$arr;
			 }
			}
			$i=1;
			$builder="";
			foreach($property_builder as $arr){
			 if($i==1){
			     $builder=$arr;
			     $i++;
			 }else{
			     $builder.=",".$arr;
			 }
			}
			
			$total = count($_FILES['property_image']['name']);
			$query="
INSERT INTO `property_details`(`name`, `state`, `area`, `location`, `project_segment`, `main_category`, `category`, `category_type`, `builder_carpet_area`, `bed_rooms`, `price`, `description`, `short_description`, `latitude`, `longitude`, `facilities`, `address`, `builder_id`) 
                VALUES ('$property_name','$property_state','$property_area','$property_location','$project_segment','$main_category','$property_category','$configuration_type','$carpet_area','$bed_rooms','$property_price','$property_description','$property_short_description','$property_latitude','$property_longitude','$facility','$property_address','$builder')
			";
			
			
			$con->query($query);
			
			
			 $query="SELECT * FROM property_details ORDER BY id DESC LIMIT 1";
			    $result=$con->query($query);
			    if($result->num_rows>0){
			        $row=$result->fetch_assoc();
			            $property_id=$row['id'];
			    }
			foreach($property_key_distance_arr as $arr){
			    $query="INSERT INTO `property_key_distance`( `name`, `property_id`) VALUES ('$arr','$property_id')";
			    $con->query($query);
			}
			for($i=0;$i<$total;$i++){
	    $file_name = $property_name.$total;
		$file_name=$file_name+$i;
		$source_file = $_FILES['property_image']['tmp_name'][$i];
        $dest_file = "../assets/images/property/";
        $extension = pathinfo($_FILES["property_image"]["name"][$i], PATHINFO_EXTENSION);
        move_uploaded_file($source_file, $dest_file . $file_name . "." . $extension)
            or die("Error!!");
        $file_name = "$file_name.$extension";
        $query = "INSERT INTO `property_images`(`property_id`,`path`) VALUES ('$property_id','$file_name')";            
        $con->query($query);
			}
		
		$con -> close();
		echo'
		    <script>
		    alert("Property Uploded Successfully");
		    window.location.replace("property_add.php");
		    </script>
		    ';
		}
		
		$word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        $word1=substr(implode($word), 0, 5);
        $word2=substr(implode($word), 6, 2);
        $word3=substr(implode($word), 11, 4);
        $word4=substr(implode($word), 16, 3);
        $word5=substr(implode($word), 21, 2);
        echo "$word1-$word2-$word3-$word4-$word5";
		?>

	</body>
</html>