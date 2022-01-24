<?php
function get_categories($group_property){
 $query_state="SELECT category FROM property_details WHERE group_property='$group_property' AND category<'5'";
    $result_state=$GLOBALS['con']->query($query_state);
    $i=0;
    $j=0;
    $where_category="";
    if($result_state->num_rows>0){
	while($row_state=$result_state->fetch_assoc()){
    $category= $row_state['category'];
    $category=get_category_name($category);
        $where_category.="$category";
	}
	if (strpos($where_category, 'BHK') !== false) {
    $j=1;
}
	$where_category=str_replace(" BHK",",",$where_category);
	$where_category=rtrim($where_category, ',');
    if($j==1){
        $where_category.="BHK";
    }
}
$query_state="SELECT category FROM property_details WHERE group_property='$group_property' AND category>'4'";
    $result_state=$GLOBALS['con']->query($query_state);
    if($j==1){
        $where_category.=",";
    }
    if($result_state->num_rows>0){
	while($row_state=$result_state->fetch_assoc()){
    $category= $row_state['category'];
    $category=get_category_name($category);
        $where_category.="$category";
	}
}
$where_category=rtrim($where_category, ',');
    return $where_category;
}
function get_state($state){
 $query_state="SELECT * FROM property_state WHERE id='$state'";
    $result_state=$GLOBALS['con']->query($query_state);
	$row_state=$result_state->fetch_assoc();
    $state= $row_state['name'];
    return $state;
}
function get_category_name($category){
 $query_category="SELECT * FROM property_category WHERE id='$category'";
    $result_category=$GLOBALS['con']->query($query_category);
	$row_category=$result_category->fetch_assoc();
    $category= $row_category['name'];
    return $category;
}
function get_location_name($location){
 $query_location="SELECT * FROM property_location WHERE id='$location'";
    $result_location=$GLOBALS['con']->query($query_location);
	$row_location=$result_location->fetch_assoc();
    $location= $row_location['name'];
    return $location;
}
function get_property_type($location){
 $query_location="SELECT * FROM property_type WHERE id='$location'";
    $result_location=$GLOBALS['con']->query($query_location);
	$row_location=$result_location->fetch_assoc();
    $location= $row_location['name'];
    return $location;
}
function get_first_image($property_id){
 $query_location="SELECT path FROM property_images WHERE property_id='$property_id' ORDER BY id ASC LIMIT 1";
    $result_location=$GLOBALS['con']->query($query_location);
	$row_location=$result_location->fetch_assoc();
    $path= $row_location['path'];
    return $path;
}

function convertCurrency($number)
{
    // Convert Price to Crores or Lakhs or Thousands
    $length = strlen($number);
    $currency = '';

    if($length == 4 || $length == 5)
    {
        // Thousand
        $number = $number / 1000;
        $number = round($number,2);
        $ext = "Thousand";
        $currency = $number." ".$ext;
    }
    elseif($length == 6 || $length == 7)
    {
        // Lakhs
        $number = $number / 100000;
        $number = round($number,2);
        $ext = "Lac";
        $currency = $number." ".$ext;

    }
    elseif($length == 8 || $length == 9)
    {
        // Crores
        $number = $number / 10000000;
        $number = round($number,2);
        $ext = "Cr";
        $currency = $number.' '.$ext;
    }

    return $currency;
}
function get_facilities($facilities){
    $name="";
 $query_location="SELECT * FROM property_facilities WHERE id='$facilities'";
    $result_location=$GLOBALS['con']->query($query_location);
     if($result_location->num_rows>0){
	$row_location=$result_location->fetch_assoc();
    $name= $row_location['name'];
    return $name;
     }
}

function get_builder($builder_id){
    $name="";
 $query_location="SELECT * FROM property_builder WHERE id='$builder_id'";
    $result_location=$GLOBALS['con']->query($query_location);
    if($result_location->num_rows>0){
	$row_location=$result_location->fetch_assoc();
    $name= $row_location['name'];
    }
    return $name;
}

?>