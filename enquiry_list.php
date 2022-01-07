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
			    <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">New Enquiry</div>

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

		<!-- Newsletter-->
		
		<!--/Newsletter-->
<div id="check_new_entry"></div>
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
	$.ajax({
		url:"enquiry_list_backend.php",
		type:'post',
		data:{ 	
		    new_enquiry:new_enquiry,
		},
		success: function (data,status){
		 
		$('#new_enquiry').html(data);
		 var count=document.getElementById("count_id").value;
			$(function(e) {
	$('#example3').DataTable();
	
} );
		}
	});	
}

function read(id){
    var read="read";
	$.ajax({
		url:"enquiry_list_backend.php",
		type:'post',
		data:{ 	
		    read:read,
		    id:id
		},
		success: function (data,status){
            new_enquiry();
		}
	});	
}
function update(id){
    var update="update";
    var comment="text_"+id;
    var comment=document.getElementById(comment).value;
	$.ajax({
		url:"enquiry_list_backend.php",
		type:'post',
		data:{ 	
		    update:update,
		    id:id,
		    comment:comment,
		},
		success: function (data,status){
            new_enquiry();
		}
	});	
}


function check_new_entry(){
    var check_new_entry="check_new_entry";
	$.ajax({
		url:"enquiry_list_backend.php",
		type:'post',
		data:{ 	
		    check_new_entry:check_new_entry,

		},
		success: function (data,status){
		    document.getElementById("check_new_entry").innerHTML=data;
		     var count=document.getElementById("count_id").value;
		    var new_count=document.getElementById("new_count").value;
		    if(new_count!=count){
		        new_enquiry();
		    }
		}
	});	
}

new_enquiry();
var intervalId = window.setInterval(function(){
check_new_entry();
}, 5000);
</script>	
	</body>
</html>