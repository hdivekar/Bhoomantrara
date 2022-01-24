<?php
include "include/config.php";
ob_start();
session_start();
include "include/include.php";
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
<style>
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
<style>
    
    .bg-secondary {
    background-color: #fff !important;
}
.arrow-ribbon.bg-secondary:before {
    border-left: 15px solid #fff;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 101;
  top: 0;
  left: 0;
  background-color: #00578a;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  
  color: #fff;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #fff;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;

}

/*@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}*/
</style>
		<!--Sliders Section-->
		<section id="main">
			<div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-image-src="assets/images/banners/4.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white mb-7">
							<h1 class="mb-1">Find Your Best Property</h1>
							<p>It is a long established fact that a reader will be distracted by the readable.</p>
						</div>
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								<div class="search-background bg-transparent">
									<div class="form row no-gutters ">
										<div class="form-group  col-xl-4 col-lg-3 col-md-12 select2-lg mb-0 bg-white ">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Property Type">
												<!--<optgroup label="Categories">-->
												     <option value="*">All Location</option>
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
											</select>
											<span><i class="fa fa-map-marker location-gps mr-1"></i></span>
										</div>
										<div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Property Type">
												<!--<optgroup label="Categories">-->
												     <option value="*">All Categories</option>
										<?php
										 $query_category="SELECT * FROM property_category ORDER BY sequence ASC";
                                        $result_category=$GLOBALS['con']->query($query_category);
                                    	while($row_category=$result_category->fetch_assoc()){
                                    	      $category_id= $row_category['id'];
                                    	      $category_name= $row_category['name'];
                                    	      echo'	<option value="'.$category_id.'">'.$category_name.'</option>';
                                    	}
                                      
										?>		    
													
											<!--	</optgroup>-->
											</select>
										</div>
										<div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Min Value" id="min_price" onchange="min_change()">
											    	<optgroup label="Min Price">
											   <?php
										 $query_category="SELECT price FROM property_details GROUP BY price ORDER BY price ASC";
                                        $result_category=$GLOBALS['con']->query($query_category);
                                    	while($row_category=$result_category->fetch_assoc()){
                                    	      $price= $row_category['price'];
                                    	      $category_name= $row_category['name'];
                                    	      echo'	<option value="'.$price.'">';
                                    	     
                                    	      $price=convertCurrency($price);
                                    	      
                                    	      echo '₹ '.$price.'</option>';
                                    	}
                                      
										?>
											   
											</optgroup>	
											</select>
										</div>
										<div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Max Value" id="max_price">
												<optgroup label="Max Price">
											   <?php
										 $query_category="SELECT price FROM property_details GROUP BY price ORDER BY price DESC LIMIT 10";
                                        $result_category=$GLOBALS['con']->query($query_category);
                                    	while($row_category=$result_category->fetch_assoc()){
                                    	      $price= $row_category['price'];
                                    	      $category_name= $row_category['name'];
                                    	      echo'	<option value="'.$price.'">';
                                    	     
                                    	      $price=convertCurrency($price);
                                    	      
                                    	      echo '₹ '.$price.'</option>';
                                    	}
                                      
										?>
											   
											</optgroup>	
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" style="line-height:2.19" class="btn btn-lg btn-block  wrapper-btn btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</section>
		<!--Sliders Section-->

	 
		<!--Categories-->
		<section class="sptb bg-white">
			<div class="container">
                <div class="row" id="property_details">
		    </div></div>

			</section>
		<!--Latest Ads-->
		 

		<section class="sptb bg-white">
			<div class="container">
				  
					<div class="col-md-12">
					<div class="card">
						<div class="card-body items-gallery">
							<div class="items-blog-tab text-center">
							    <h1 class="text-dark position-relative">Best Property Collections</h1>
						
								<div class="items-blog-tab-heading row">
									<div class="col-12">
										<ul class="nav items-blog-tab-menu">
										    
										    <?php
										    $query_category="SELECT max(price) as price,category FROM property_details GROUP BY category";
                                            $result_category=$GLOBALS['con']->query($query_category);
                                            $i=0;
                                        	while($row_category=$result_category->fetch_assoc()){
                                        	    $category_id= $row_category['category'];
                                        	    $category=get_category_name($category_id);
                                        	    $class="";
                                        	    if($i==0){
                                        	        $class="";
                                        	        $i++;
                                        	    }
                                        	    echo'<li><a href="#tab'.$category_id.'" data-toggle="tab" class="'.$class.'" id="tab_1">'.$category.'</a></li>';
                                        	}
                                            
										    ?>
										</ul>
									</div>
								</div>
								<div class="tab-content" id="property_collection">
								 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Latest Ads-->
 
	
 

		<!--Testimonials-->
		<section class="sptb position-relative" style="background-color:#fff; display:none">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1 class="text-dark position-relative">Testimonials</h1>
				</div>
				<div class="row"> 
						 <div class="col-xl-4 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="team-section text-center">
								<div class="team-img">
									<img src="assets/images/faces/male/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
								</div>
								<h4 class="font-weight-bold dark-grey-text mt-4">Tracey	Poole</h4>
								<h6 class="mb-3 blue-text ">RealEstate Agent</h6>
								<p class="font-weight-normal dark-grey-text">
								<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
								<div class="text-warning">
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star-half-full"> </i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="team-section text-center">
								<div class="team-img">
									<img src="assets/images/faces/female/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
								</div>
								<h4 class="font-weight-bold dark-grey-text mt-4">Harry	Walker</h4>
								<h6 class="blue-text mb-3">Apartment Agent</h6>
								<p class="font-weight-normal dark-grey-text">
								<i class="fa fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam quis nostrum  corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
								<div class="text-warning">
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="team-section text-center">
								<div class="team-img">
									<img src="assets/images/faces/male/2.jpg" class="img-thumbnail rounded-circle alt=" alt="">
								</div>
								<h4 class="font-weight-bold dark-grey-text mt-4">Paul White</h4>
								<h6 class=" blue-text mb-3">Smart House Agent</h6>
								<p class="font-weight-normal dark-grey-text">
								<i class="fa fa-quote-left pr-2"></i>Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
								<div class="text-warning">
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star-o"> </i>
								</div>
							</div>
						</div>
					</div>
				</div> 
				</div>
			</div>
		</section>
		<!--/Testimonials-->
 <?php
include "footer.php";
?>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		 <?php
include "js.php";
?>
<script>
$(document).ready(function(){
 setTimeout(function() { 
     property_details();
     property_collection();
 }, 2000);
});

    

function property_details(){
    var property_details="property_details";
    $.ajax({
		url:"index_backend.php",
		type:'get',
		data:{ 	
		    property_details:property_details,
		},
		success: function (data,status){
		    $('#property_details').html(data);
		}
	});
}

function property_collection(){
    var property_collection="property_collection";
    $.ajax({
		url:"index_backend.php",
		type:'get',
		data:{ 	
		    property_collection:property_collection,
		},
		success: function (data,status){
		    $('#property_collection').html(data);
		    setTimeout(function() { document.getElementById("tab_1").click(); }, 1000);
		}
	});
}

function min_change(){
    var min_change="min_change";
    var min_price=document.getElementById("min_price").value;
    $.ajax({
		url:"index_backend.php",
		type:'get',
		data:{ 	
		    min_change:min_change,
		    min_price:min_price,
		},
		success: function (data,status){
		    $('#max_price').html(data);
		    
		}
	});
}
</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
   document.getElementById("top_bar").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("top_bar").style.marginLeft = "";
}
document.getElementById("mySidenav").style.display="block";
document.getElementById("mySidenav_button").style.display="block";

function select_city(sel){
        var location_id=document.getElementById("location_session").value;
        var location_name=sel.options[sel.selectedIndex].text;
        /*localStorage.setItem("location_id",location_id);
        localStorage.setItem("location_name",location_name);
        location_name=location_name+" <span style='font-size: 14px;float:right;margin-top:9px'>selected city</span>"
        document.getElementById("location_session_display").innerHTML=location_name;*/
        var path="city.php?id="+location_id+"&city="+location_name;
        window.location.href=path;
        
    }
</script>    
	</body>
</html>