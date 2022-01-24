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
include "header.php";

		   
		    $query="SELECT * FROM property_details WHERE id='$property_id'";
		    $result=$con->query($query);
		    if($result->num_rows>0){
		        while($row=$result->fetch_assoc()){
		            $property_id=$row['id'];
		            $builder_id=$row['builder_id'];
		            $category=$row['category'];
		            $name=$row['name'];
		            $price=$row['price'];
		            $area=$row['area'];
		            $location=$row['location'];
		            $facilities=$row['facilities'];
		            $group_property=$row['group_property'];
		            $property_view=$row['property_view']+1;
		            $short_description=$row['short_description'];
		            $description=$row['description'];
		            $description = str_replace("table-1", "table table-bordered", $description);
		            $short_description = (strlen($short_description) > 45) ? substr($short_description, 0, 45) . '...' : $short_description;
		     $category=get_category_name($category);
		     $location=get_location_name($location);
		     $price=convertCurrency($price);
		     $property_image=get_first_image($property_id);
		        }
		    }
?>

		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white text-property">
									<h1 ><span class="font-weight-bold">16,25,365</span> Properties Available</h1>
								</div>
								<div class=" search-background bg-transparent">
									<div class="form row no-gutters">
										<div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0 bg-white">
											<input type="text" class="form-control input-lg border-right-0" id="text" placeholder="Search Property">
										</div>
										<div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0 bg-white">
											<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
											    
											    	<?php
										 $query_category="SELECT * FROM property_category ORDER BY sequence ASC";
                                        $result_category=$GLOBALS['con']->query($query_category);
                                    	while($row_category=$result_category->fetch_assoc()){
                                    	      $category_id= $row_category['id'];
                                    	      $category_name= $row_category['name'];
                                    	      echo'	<option value="'.$category_id.'">'.$category_name.'</option>';
                                    	}
                                      
										?>
											
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
										<a href="#" style="line-height:2.19" class="btn btn-lg btn-block  wrapper-btn btn-primary br-tl-md-0 br-bl-md-0">Search </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
		<!--/Sliders Section-->

		<!--Breadcrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<!--h4 class="page-title">RealEstate</h4-->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li> 
						<li class="breadcrumb-item active" aria-current="page">Property</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<center><h3 class="card-title">Contact</h3></center>
							</div>
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
									<img src="assets/images/category/mini_sales_lead.png" class="brround avatar-xxl" alt="user">
									<div class="">
										<!--<a href="userprofile2.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">Aashish Dhadiwal</h4></a>-->
										<p class="mb-0">Sales Executive</p>
										 
									</div>
								</div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>
								<div>
								<div class="row">
								<div class="col-lg-2"> <span class="font-weight-semibold"><i class="fa fa-map-marker mr-2 mb-2"></i></span></div>
									<div class="col-lg-10"> <h6><span class="font-weight-semibold"></span><a href="#" class="text-body" style="line-height: 1.5;">The Avenue, Unit No.303, Airport Road, Marol, Andheri(E) Mumbai-400059
</a></h6></div></div>
								<div class="row">
									<div class="col-lg-2"><h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-2 mb-2"></i></span></div>
									<div class="col-lg-10"><a href="mailto:support@bhoomantra.com" class="text-body">support@bhoomantra.com</a></h6></div>
								</div>
								<div class="row">
									<div class="col-lg-2"><h6><span class="font-weight-semibold"><i class="fa fa-phone mr-2  mb-2"></i></span></div>
									<div class="col-lg-10"><a href="tel:8235712712" class="text-body"> +91 8235 712 712</a></h6></div>
							
							
								</div>
								
								</div>
							 
							</div>
							<div class="card-footer">
								<div class="text-left">
									<a href="https://api.whatsapp.com/send?phone=918235712712&text=Hello"  target="_blank" class="btn  btn-success"><i class="fa fa-whatsapp"></i> Chat</a>
									<a href="tel:8235712712" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
								 
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Keywords</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="#">Home</a></li>
										<li><a href="#">Real estate</a></li>
										<li><a href="#"><?php echo $category ?></a></li>
									</ul>
								</div>
							</div>
						</div>
				 
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Latest Properties</h3>
							</div>
							<div class="card-body pb-3">
								<ul class="vertical-scroll">
								    <?php
								    $query="SELECT * FROM property_details ORDER BY id DESC LIMIT 7";
                        		    $result=$con->query($query);
                        		    if($result->num_rows>0){
                        		        while($row=$result->fetch_assoc()){
                        		            $latest_property_id=$row['id'];
                        		            $latest_builder_id=$row['builder_id'];
                        		            $latest_category=$row['category'];
                        		            $latest_name=$row['name'];
                        		            $latest_price=$row['price'];
                        		            $latest_area=$row['area'];
                        		            $latest_location=$row['location'];
                        		            $latest_facilities=$row['facilities'];
                        		            $latest_group_property=$row['group_property'];
                        		            $latest_property_view=$row['property_view']+1;
                        		            $latest_short_description=$row['short_description'];
                        		            $latest_description=$row['description'];
                        		            $latest_description = str_replace("table-1", "table table-bordered", $latest_description);
                        		            $latest_short_description = (strlen($latest_short_description) > 45) ? substr($latest_short_description, 0, 45) . '...' : $latest_short_description;
                        		     $latest_price=convertCurrency($latest_price);
                        		     $latest_property_image=get_first_image($latest_property_id);
                        		     echo'
                        		     <li class="news-item">
										<table class="table mb-0">
											<tr>
												<td><img src="assets/images/property/'.$latest_property_image.'" alt="img" class="w-8 border"/></td>
												<td class="pl-4"><h5 class="mb-1 ">'.$name.'</h5><a href="property.php?id='.$latest_property_id.'" class="btn-link">View Details</a><span class="float-right font-weight-bold">₹'.$latest_price.' <small>onwards</small></span></td>
											</tr>
										</table>
									</li>
                        		     ';
                        		        }
                        		    }
								    ?>
								</ul>
							</div>
						</div>
						
						<!--div class="card">
							<div class="card-header">
								<h3 class="card-title">Search Ads</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="text2" placeholder="What are you looking for?">
								</div>
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control custom-select select2-show-search">
									    
										<option value="1" selected>All Categories</option>
										<option value="2">RealEstate</option>
										<option value="3">Apartments</option>
										<option value="4">3BHK Flat</option>
										<option value="5">Homes</option>
										<option value="6">Luxury Rooms</option>
										<option value="7">Deluxe Houses</option>
										<option value="8">Duplex House</option>
										<option value="9">Luxury Rooms</option>
										<option value="10">2BHk Homes</option>
										<option value="11">Apartments</option>
										<option value="12">Duplex Houses</option>
										<option value="13">3BHK Flatss</option>
										<option value="14">2BHK Flats</option>
										<option value="15">Modren Houses</option>
									</select>
								</div>
								<div class="">
									<a href="#" class="btn  btn-primary">Search</a>
								</div>
							</div>
						</div-->
						<!--div class="card">
							<div class="card-header">
								<h3 class="card-title">Popular Tags</h3>
							</div>
							<div class="card-body">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="#">RealEstate</a></li>
										<li><a href="#">Homes</a></li>
										<li><a href="#">3BHK Flatss</a></li>
										<li><a href="#">2BHK Homes</a></li>
										<li><a href="#">Luxury Rooms</a></li>
										<li><a href="#">Apartments</a></li>
										<li><a href="#">3BHK Flatss</a></li>
										<li><a href="#">Homes</a></li>
										<li><a href="#">Luxury House For Sale</a></li>
										<li><a href="#">Apartments</a></li>
										<li><a href="#" class="mb-0">Luxury Rooms</a></li>
									</ul>
								</div>
							</div>
						</div-->
						
					</div>
					<!--Right Side Content-->

					<div class="col-xl-8 col-lg-8 col-md-12">

						<!--Classified Description-->
						<div class="card overflow-hidden">
							<!-- <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Offer</span></div> -->
							<div class="card-body">
								<div class="item-det mb-4">
									<h3 class=""><?php echo $name ?></h3>
									<ul class="d-flex">
										<li class="mr-5"><i class="icon icon-briefcase text-muted mr-1"></i> RealEstate</li>
										<li class="mr-5"><i class="icon icon-location-pin text-muted mr-1"></i> <?php echo $location?></li>
										<!--<li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> 5 hours ago</a></li>-->
										<li class="mr-5"><i class="icon icon-eye text-muted mr-1"></i> <?php echo $property_view ?></li>
										<li class="">
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star-half-o text-warning mr-1"></i>4.5</li>
									</ul>
								</div>
								<div class="product-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
										<div class="arrow-ribbon2 bg-primary">₹ <?php echo $price?> <small>onwards</small></div>
										<div class="carousel-inner">
										    <?php 
										    $query_images="SELECT path FROM property_images WHERE property_id='$property_id'";
                                            $result_images=$GLOBALS['con']->query($query_images);
                                        	while($row_images=$result_images->fetch_assoc()){
                                        	    $path= $row_images['path'];
                                        	    echo'<div class="carousel-item active"> <img src="assets/images/property/'.$path.'" alt="img"> </div>';
                                        	}
                                            
										    ?>
											<!--<div class="carousel-item active"> <img src="assets/images/products/products/h1.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h2.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h3.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h4.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h5.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h1.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h2.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h3.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h5.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="assets/images/products/products/h4.jpg" alt="img"> </div>-->
										</div>
										<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
											<i class="fa fa-angle-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
									<!--<div class="clearfix">
										<div id="thumbcarousel" class="carousel slide" data-interval="false">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="assets/images/products/h3.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="assets/images/products/h2.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="assets/images/products/h6.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="assets/images/products/h5.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="assets/images/products/h4.png" alt="img"></div>
												</div>
												<div class="carousel-item">
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="assets/images/products/h1.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="assets/images/products/h2.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="assets/images/products/h6.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="assets/images/products/h5.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="assets/images/products/h4.png" alt="img"></div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</div>
									</div>-->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Description</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									<p><?php echo $description?></p>
								</div>
							</div>
							</div>
							<div class="card">
							<div class="card-header">
							  <h3 class="card-title">Specifications</h3>  
							</div>	
							<div class="card-body">
								<div class="mb-4">
								<div class="row">
								    <?php
										    
										    $facilities_arr = explode (",", $facilities);
										    foreach($facilities_arr as $arr){
										        $arr=get_facilities($arr);
										        echo'
										        <div class="col-xl-6 col-md-12">
										        <li class="">
												<!--<i class="fa fa-bed text-muted w-5"></i>--> 
												'.$arr.'
											</li>
											</div>
										        ';
										    }
										    
										    ?>
								    
								</div>
							</div>
							</div>
							</div>
							<div class="card">
								
							<div class="card-body">
							
							<div class="pl-5 pr-5">
								<div class="list-id">
									<div class="row">
										<div class="col">
											<a class="mb-0">Classified ID : #712712<?php echo $property_id?></a>
										</div>
										<div class="col col-auto">
										<!--	Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2019-->
										</div>
									</div>
								</div>
							</div>
							</div>
							</div>
						
							<!--<div class="card-footer">
								<div class="icons">
									<a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share Ad</a>
									
								</div>
							</div>-->
						
						<!--/Classified Description-->

						<h3 class="mb-5 mt-4">Related Posts</h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->
                        <?php
                        $query="SELECT * FROM property_details WHERE group_property ='$group_property'";
                        $result=$con->query($query);
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                $related_property_id=$row['id'];
            		            $related_builder_id=$row['builder_id'];
            		            $related_category=$row['category'];
            		            $related_name=$row['name'];
            		            $related_price=$row['price'];
            		            $related_area=$row['area'];
            		            $related_location=$row['location'];
            		            $related_facilities=$row['facilities'];
            		            $related_group_property=$row['group_property'];
            		            $related_short_description=$row['short_description'];
            		            $related_description=$row['description'];
            		            $related_description = str_replace("table-1", "table table-bordered", $related_description);
            		            $related_short_description = (strlen($related_short_description) > 45) ? substr($related_short_description, 0, 45) . '...' : $related_short_description;
            		     $related_category=get_category_name($related_category);
            		     $related_location=get_location_name($related_location);
            		     $related_price=convertCurrency($related_price);
            		     $related_property_image=get_first_image($related_property_id);
                                
                                
                                echo'<div class="item">
								<div class="card">
									<!--div class="arrow-ribbon bg-primary">For Sale</div-->
									<div class="item-card7-imgs">
										<a href="property.php?id='.$related_property_id.'"></a>
										<img src="assets/images/property/'.$related_property_image.'" alt="img" class="cover-image image_size">
									</div>
									<div class="item-card7-overlaytext">
										<a href="property.php?id='.$related_property_id.'" class="text-white">'.$related_category.'</a>
										<h4 class="mb-0">₹ '.$related_price.' <small>onwards</small></h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="property.php?id='.$related_property_id.'" class="text-dark"><h4 class="font-weight-semibold">'.$related_category.' For Sale</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li class=""><a href="#" class="icons text-muted"><i class="icon icon-location-pin text-muted mr-1"></i> '.$related_location.'</a></li>
									<li><a href="#" class="icons text-muted"><i class="icon icon-event text-muted mr-1"></i>1 min ago</a></li>
									<li class=""><a href="#" class="icons text-muted"><i class="icon icon-phone text-muted mr-1"></i> 8235712712</a></li>
											</ul>
											<!--<p class="mb-0"> Built Up 1250 Sq.ft</p>-->
										</div>
									</div>
								</div>
							</div>';
                                
                            }
                        }
                        ?>
							
						
						</div>
						<!--/Related Posts-->
<!--Comments-->
						<!--div class="card" style="display:none">
							<div class="card-header">
								<h3 class="card-title">Rating And Reviews</h3>
							</div>
							 
							<div class="card-body p-0">
								<div class="media mt-0 p-5">
                                    <div class="d-flex mr-3">
                                        <a href="#"><img class="media-object brround" alt="64x64" src="assets/images/faces/male/1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
											<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
											<span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                        <p class="font-13  mb-2 mt-2">
                                           Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="mr-2 btn btn-primary btn-sm"><span class="">Helpful</span></a>
										<a href="" class="mr-2 btn btn-default btn-sm" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>
										<a href="" class="mr-2 btn btn-default btn-sm" data-toggle="modal" data-target="#report"><span class="">Report</span></a>
                                        <div class="media mt-5">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object brround" alt="64x64" src="assets/images/faces/female/2.jpg"> </a>
                                            </div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
												<small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st  <i class=" ml-3 fa fa-clock-o"></i> 6.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
												<p class="font-13  mb-2 mt-2">
												   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium, nisi ut aliquid ex ea commodi consequatur consequat.
												</p>
												<a href="" class="btn btn-default btn-sm" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="media p-5 border-top mt-0">
									<div class="d-flex mr-3">
										<a href="#"> <img class="media-object brround" alt="64x64" src="assets/images/faces/male/3.jpg"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">Edward
										<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>
                                        <p class="font-13  mb-2 mt-2">
                                           Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="mr-2 btn btn-primary btn-sm"><span class="">Helpful</span></a>
										<a href="" class="mr-2 btn btn-default btn-sm" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>
										<a href="" class="mr-2 btn btn-default btn-sm" data-toggle="modal" data-target="#report"><span class="">Report</span></a>
									</div>
								</div>
							</div>
						</div-->
 
						<!--/Comments--> 
						 <a href="" class="mr-2 btn btn-default btn-sm" data-toggle="modal" data-target="#report"><span class="">Leave a reply</span></a>
					
					</div>
				</div>
			</div>
		</section>


		

	

	

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