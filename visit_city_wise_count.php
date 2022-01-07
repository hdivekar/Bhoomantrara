<?php
include "include/config.php";
ob_start();
session_start();
include "include/include.php";
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
include "header.php";

?>
<!-- Data table css -->
		<link href="../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="../assets/plugins/datatable/jquery.dataTables.min.css" rel="stylesheet" />
		<!--Breadcrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<!--h4 class="page-title">RealEstate</h4-->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Categories</a></li>
						<li class="breadcrumb-item active" aria-current="page">RealEstate</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
			    <div class="row mb-5">
			        <div class="col-md-4">
			            <input class="form-control" type="date" value="<?php echo $today ?>" id="start_date">
			        </div>
			        <div class="col-md-4">
			            <input class="form-control" type="date" value="<?php echo $today ?>" id="end_date">
			        </div>
			        <div class="col-md-4">
			            <input class="btn btn-success" type="button" id="" onclick="new_enquiry()" value="Search">
			        </div>
			       </div>
			        <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">City Wise Visit Count</div>

									</div>
									<div class="card-body">
										<div class="table-responsive" id="new_enquiry">
											
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
							
						</div>
            </div>
        </section>    

		

 <?php
//include "footer.php";
?>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		 <?php
include "js.php";
?>
<!-- Data tables -->
		<script src="../assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="../assets/js/datatable.js"></script>
<script>
function new_enquiry(){
    var new_enquiry="new_enquiry";
    var start_date=document.getElementById("start_date").value;
    var end_date=document.getElementById("end_date").value;
	$.ajax({
		url:"visit_city_wise_count_backend.php",
		type:'post',
		data:{ 	
		    new_enquiry:new_enquiry,
		    start_date:start_date,
		    end_date:end_date
		},
		success: function (data,status){
		$('#new_enquiry').html(data);
			$(function(e) {
	$('#example3').DataTable();
} );
		}
	});	
}
</script>	
	</body>
</html>