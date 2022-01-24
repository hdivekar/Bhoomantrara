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
$builder_id=$_GET['id'];
$builder_name=get_builder($builder_id);
		    
?>

		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white text-property">
									<h1 ><span class="font-weight-bold"><?php echo $builder_name?></span></h1>
								</div>
								<!--<div class=" search-background bg-transparent">
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
								</div>-->
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
						<!--<li class="breadcrumb-item"><a href="#">Categories</a></li>-->
						<li class="breadcrumb-item active" aria-current="page"><?php echo $builder_name ?></li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
			    <div class="row">
			        <div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="item2-gl ">
								
								<div class="tab-content">
									<div class="tab-pane active" id="tab-11">
									    <?php
									    $query="SELECT * FROM property_details WHERE status='Active' AND builder_id='$builder_id' ";
		    $result=$con->query($query);
		    if($result->num_rows>0){
		        while($row=$result->fetch_assoc()){
		            $property_id=$row['id'];
		            $builder_id=$row['builder_id'];
		            $category=$row['category'];
		            $name=$row['name'];
		            $price=$row['price'];
		            $area=$row['area'];
		            $facilities=$row['facilities'];
		            $location=$row['location'];
		            $short_description=$row['short_description'];
		            $short_description = (strlen($short_description) > 45) ? substr($short_description, 0, 45) . '...' : $short_description;
        		    $category=get_category_name($category);
        		    $location=get_location_name($location);
        		    $price=convertCurrency($price);
        		    $property_image=get_first_image($property_id);
									    ?>
									    
										<div class="card overflow-hidden">
											<div class="d-md-flex">
												<div class="item-card9-img">
													<div class="arrow-ribbon bg-primary">₹ <?php echo $price ?></div>
													<div class="item-card9-imgs">
														<a href="col-left.html"></a>
														<img src="assets/images/property/<?php echo $property_image ?>" alt="img" class="cover-image">
													</div>
													<!--<div class="item-card9-icons">
														<a href="#" class="item-card9-icons1 wishlist" data-toggle="tooltip" data-placement="top" title="wishlist"> <i class="fa fa fa-heart-o" ></i></a>
														<a href="#" class="item-card9-icons1 bg-purple" data-toggle="tooltip" data-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
													</div>-->
													<!--<div class="item-tags">
														<div class="bg-success tag-option">For Sale </div>
														<div class="bg-pink tag-option">Open </div>
													</div>-->
													<!--<div class="item-trans-rating">
														<div class="rating-stars block">
															<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
															<div class="rating-stars-container">
																<div class="rating-star sm  ">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm  ">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm  ">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm ">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm ">
																	<i class="fa fa-star"></i>
																</div>
															</div>
														</div>
													</div>-->
												</div>
												<div class="card border-0 mb-0">
													<div class="card-body ">
														<div class="item-card9">
															<a href="col-left.html" class="text-muted mr-4"><i class="fa fa-tag mr-1"></i> <?php echo $category ?></a>
															<!--<a href="#" class=""><span class="text-muted"><i class="fa fa-calendar-o  mr-1"></i> 2 days ago</span></a>-->
															<a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1"><?php echo $name?> </h4></a>
															<div class="mb-2">
															    <?php
															    $facilities_arr = explode (",", $facilities);
										    foreach($facilities_arr as $arr){
										        $arr=get_facilities($arr);
										        echo'
										        <a href="#" class="icons text-muted mr-4"> '.$arr.'</a>
										        ';
										    }
															    ?>
															    
																
															</div>
															<p class="mb-0 leading-tight"><?php echo $short_description ?></p>
														</div>
													</div>
												<!--	<div class="card-footer pt-4 pb-4">
														<div class="item-card9-footer d-flex">
															<div class="item-card9-cost">
																<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
																<a href="#" class="mr-0"><span class=""><i class="fa fa-user text-muted mr-1"></i> Owner</span></a>
															</div>
															<div class="ml-auto">
																<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#contact">Enquiry</a>
															</div>
														</div>
													</div>-->
												</div>
											</div>
										</div>
										<?php
		        }
		    }
										?>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			    </div>
</div>
</section>
		<!--/Newsletter-->

		

	

	

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