<?php
include "include/config.php";
ob_start();
session_start();
include "include/include.php";
if(isset($_GET['property_details'])){
    
    		    $query="SELECT min(price) AS price,id,builder_id,category,name,area,location,short_description,project_segment,category_type,group_property FROM property_details WHERE status='Active' GROUP BY group_property ";
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
		            $group_property=$row['group_property'];
		            $category_type=$row['category_type'];
		            $project_segment=$row['project_segment'];
		            $short_description=$row['short_description'];
		            $short_description = (strlen($short_description) > 45) ? substr($short_description, 0, 45) . '...' : $short_description;
        		    $category=get_category_name($category);
        		    $location=get_location_name($location);
        		    $price=convertCurrency($price);
        		    $property_image=get_first_image($property_id);
        		    $where_category=get_categories($group_property);
        		    if (strpos($a, 'are') !== false) {
                        echo 'true';
                    }
        		    
        		    $display_name="$name - $category_type $where_category";
        		    //$display_name = (strlen($display_name) > 40) ? substr($display_name, 0, 40) . '...' : $display_name;
		     
		     echo'
		        <div class="col-xl-4 col-md-4">
					<div class="card overflow-hidden">
						<div class="arrow-ribbon bg-secondary">'.$project_segment.'</div>
						<div class="item-card7-imgs">
					        <a href="property.php?id='.$property_id.'"></a>
							<img src="assets/images/property/'.$property_image.'" alt="img" class="cover-image image_size">
						</div>
						<div class="item-card7-overlaytext">
							<!--<a href="property.php?id='.$property_id.'" class="text-white"> '.$category.'</a>-->
							<h4 class="mb-0">₹ '.$price.' <small>onwards</small><!--<br><small class="wrapper-small">onwards*</small>--></h4>
						</div>
						<div class="card-body">
							<div class="item-card7-desc">
								<div class="item-card7-text">
									<a href="property.php?id='.$property_id.'" class="text-dark"><h4 class="font-weight-semibold">'.$display_name.'</h4></a>
								</div>
								<!--<ul class="d-flex mb-3">
									<li class=""><a href="#" class="icons text-muted"><i class="icon icon-location-pin text-muted mr-1"></i> '.$location.'</a></li>
									<li><a href="#" class="icons text-muted"><i class="icon icon-event text-muted mr-1"></i>1 min ago</a></li>
									<li class=""><a href="#" class="icons text-muted"><i class="icon icon-phone text-muted mr-1"></i> 8235712712</a></li>
								</ul>-->
								<p class="mb-0">'.$short_description.'</p>
							</div>
						</div>
						<div class="card-body">
							<a href="property.php?id='.$property_id.'" class="btn btn-white btn-block">View Details</a>
						</div>
					</div>
				</div>
		     ';
		    
		        }
		    }

}

if(isset($_GET['property_collection'])){
    $query_category="SELECT * FROM property_category";
                                            $result_category=$GLOBALS['con']->query($query_category);
                                        	while($row_category=$result_category->fetch_assoc()){
                                        	    $category_id= $row_category['id'];
                                        	    $category= $row_category['name'];
                                        	    
                                        	    $i=0;
                                        	    $query="SELECT * FROM property_details WHERE category='$category_id'";
                                                $result=$con->query($query);
                                                if($result->num_rows>0){
                                                    $class="";
                                                    if($i==0){
                                        	        $class="";
                                        	        $i++;
                                        	    }
                                                    echo'<div class="tab-pane '.$class.'" id="tab'.$category_id.'"><div class="row">';
                                                    while($row=$result->fetch_assoc()){
                                                        $collection_property_id=$row['id'];
                                                        $collection_name=$row['name'];
                                                        $collection_short_description=$row['short_description'];
                                                        $collection_short_description = (strlen($collection_short_description) > 40) ? substr($collection_short_description, 0, 40) . '...' : $collection_short_description;
                                                        $collection_property_image=get_first_image($collection_property_id);
                                                 
                                                 echo'<div class="col-xl-4 col-lg-12 col-md-12 mb-5">
												<div class="card mb-xl-0">
													<div class="item-card8-img  br-tr-7 br-tl-7">
														<img src="assets/images/property/'.$collection_property_image.'" alt="img" class="cover-image" style="min-height:200px;max-height:200px">
													</div>
													<div class="card-body">
														<div class="item-card8-desc">
															<!--<p class="text-muted">16 November 2019.</p>-->
															<h4 class="font-weight-semibold">'.$collection_name.'</h4>
															<p class="mb-0">'.$collection_short_description.'</p>
														</div>
													</div>
												</div>
											</div>';
                                                    }
                                                    echo'</div></div>';
                                                }
                                                
                                        	}
}
if(isset($_GET['min_change'])){
    $min_price=$_GET['min_price'];
    
    $query_category="SELECT price FROM property_details WHERE price>'$min_price' GROUP BY price ORDER BY price ASC";
                                        $result_category=$GLOBALS['con']->query($query_category);
                                    	while($row_category=$result_category->fetch_assoc()){
                                    	      $price= $row_category['price'];
                                    	      $category_name= $row_category['name'];
                                    	      echo'	<option value="'.$price.'">';
                                    	     
                                    	      $price=convertCurrency($price);
                                    	      
                                    	      echo '₹ '.$price.'</option>';
                                    	}
}
?>