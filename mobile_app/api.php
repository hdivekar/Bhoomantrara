<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
include "../include/config.php";
ob_start();
session_start();
include "../include/include.php";
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $latitude="";
    $mobile="";
    $latitude="";
    $longitude="";
    $status=False;
    $unique_key="";
    $user_type="";
    $query="SELECT * FROM customer_details WHERE email='$email' AND password='$password'";
    $result=$con->query($query);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $id=$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $latitude=$row['latitude'];
        $longitude=$row['longitude'];
        $unique_key=$row['unique_key'];
        $imei_no=$row['imei_no'];
        $status=True;
        $user_type=$row['user_type'];
    }
    $data = array('status' => $status,'name'=>"$name",'email'=>"$email",'mobile'=>"$mobile",'latitude'=>"$latitude",'longitude'=>"$longitude",'id'=>"$id",'unique_key'=>"$unique_key",'imei_no'=>"$imei_no",'user_type'=>"$user_type");
    $json = json_encode($data);
echo $json;
}

if(isset($_POST['register'])){
    $unique_key=$_POST['unique_key'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $imei_no=$_POST['imei_no'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $name = str_replace("'", "&apos;", $name);
	$name = str_replace('"', "&quot;", $name);
	$address = str_replace("'", "&apos;", $address);
	$address = str_replace('"', "&quot;", $address);
    $status=False;
    $msg="";
    $id="";
    if($mobile>0){
    $select_query="SELECT * FROM customer_details WHERE mobile='$mobile' OR email='$email'";
    $select_result=$con->query($select_query);
    if($select_result->num_rows>0){
        while($row=$select_result->fetch_assoc()){
            $id=$row['id'];
            $user_type=$row['user_type'];
        if($mobile==$row['mobile']){
            $msg="Mobile number is Already Registered";
        }else{
            $msg="Email Id is Already Registered";
        }
        }
    }
     else{   
    $query="INSERT INTO `customer_details`(`unique_key`, `name`, `mobile`, `address`, `email`, `imei_no`, `latitude`, `longitude`) VALUES
        ('$unique_key','$name','$mobile','$address','$email','$imei_no','$latitude','$longitude')";
    $result=$con->query($query); 
    if($result){
        $status=True;
        $msg="Registration Done Successfully";
    $query_category="SELECT * FROM customer_details ORDER BY id DESC LIMIT 1";
    $result_category=$con->query($query_category);
	while($row_category=$result_category->fetch_assoc()){
    $id= $row_category['id'];
    $user_type=$row_category['user_type'];
	}
        
    }
    }
    }else{
    $select_query="SELECT * FROM customer_details WHERE email='$email'";
    $select_result=$con->query($select_query);
    if($select_result->num_rows>0){
        $row=$select_result->fetch_assoc();
        $id= $row['id'];
        $msg="Login Successfully";
        $user_type=$row['user_type'];
        $status=True;
    }
    else{
        $query="INSERT INTO `customer_details`(`unique_key`, `name`, `mobile`, `address`, `email`, `imei_no`, `latitude`, `longitude`) VALUES
        ('$unique_key','$name','$mobile','$address','$email','$imei_no','$latitude','$longitude')";
    $result=$con->query($query); 
    if($result){
        $status=True;
        $msg="Registration Done Successfully";
        $query_category="SELECT * FROM customer_details ORDER BY id DESC LIMIT 1";
    $result_category=$con->query($query_category);
	$row_category=$result_category->fetch_assoc();
    $id= $row_category['id'];
    }
    }
    }
    $data = array('status' => $status,'id'=>"$id",'msg'=>"$msg",'user_type'=>"$user_type");
    $json = json_encode($data);
    echo $json;
}
if(isset($_POST['get_category_list'])){
    $data=array();
    $query_category="SELECT * FROM property_category";
    $result_category=$con->query($query_category);
	while($row_category=$result_category->fetch_assoc()){
    $category= $row_category['name'];
    $category_id= $row_category['id'];
    $data[$category_id]=$category;
	}
    $json = json_encode($data);
    echo $json;
}
if(isset($_POST['get_property_list'])){
    $cid=$_POST['customer_id'];
    $query="SELECT *, property_details.id as pid FROM property_details LEFT JOIN wishlist ON property_details.id=wishlist.property_id";
    $i=0;
		    $result=$con->query($query);
		    if($result->num_rows>0){
		        while($row=$result->fetch_assoc()){
		            $property_id=$row['pid'];
		            $name=$row['name'];
		            $builder_id=$row['builder_id'];
		            $category=$row['category'];
		            $price=$row['price'];
		            $area=$row['area'];
		            $state=$row['state'];
		            $location=$row['location'];
		            $description=$row['description'];
		            $short_description=$row['short_description'];
		            $latitude=$row['latitude'];
		            $longitude=$row['longitude'];
		            $facilities=$row['facilities'];
		            $address=$row['address'];
		            $property_view=$row['property_view'];
		            $category_type=$row['category_type'];
		            $property_type=$row['property_type'];
		            $wishlist_list=$row['property_id'];
		            $customer_id=$row['customer_id'];
		            $facilities_arr = explode (",", $facilities);
		            $facilities="";
		            $wishlist=0;
		            $j=0;
				    foreach($facilities_arr as $arr){
				        $arr=get_facilities($arr);
				        if($j==0){
				        $facilities=$arr;
				        $j++;
				        }else{
				            $facilities.=",".$arr;
				        }
				    }
				    if($wishlist_list>0 && $customer_id==$cid){
				        $wishlist=1;
				    }
				    else{
				        $wishlist=0;
				    }
				    
        		    $category=get_category_name($category);
        		    $property_type=get_property_type($property_type);
        		    $location=get_location_name($location);
        		    $builder_id=get_builder($builder_id);
        		    $property_image=get_first_image($property_id);
        		    $state=get_state($state);
        		    ${'p' . $i++} ='{
        		    "wishlist": "'.$wishlist.'",
					"id": "'.$property_id.'",
					"name": "'.$name.'",
					"state": "'.$state.'",
					"area": "'.$area.'",
					"location": "'.$location.'",
					"category": "'.$category.'",
					"category_type": "'.$category_type.'",
					"property_type": "'.$property_type.'",
					"price": "'.$price.'",
					"short_description": "'.$short_description.'",
					"latitude": "'.$latitude.'",
					"longitude": "'.$longitude.'",
					"facilities": "'.$facilities.'",
					"address": "'.$address.'",
					"property_view": "'.$property_view.'",
					"builder": "'.$builder_id.'",
					"image": "'.$property_image.'"
				}';
        		    
		        }
		    }
		   	$i--;
while($i>=0)
{	
    //echo ${'p' . $i};
$data[]=json_decode(${'p' . $i--},true);
}

$json = json_encode($data);
echo $json; 
}



$ch = curl_init();


if(isset($_POST['get_otp'])){
    $mobile=$_POST['mobile'];
    $latitude="";
    $latitude="";
    $longitude="";
    $status=False;
    $unique_key="";
    $otp="";
    $email="";
    $id="";
    $imei_no="";
    $name="";
    $user_type="";
    
    $query="SELECT * FROM customer_details WHERE mobile='$mobile'";
    $result=$con->query($query);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $id=$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $latitude=$row['latitude'];
        $longitude=$row['longitude'];
        $unique_key=$row['unique_key'];
        $imei_no=$row['imei_no'];
        $user_type=$row['user_type'];
        $status=True;
        
 $otp = rand(100000,999999); 
 $msg="OTP to login is $otp";
 $msg = str_replace(' ', '%20', $msg);
 $ch = curl_init();
 $url="https://secure.sdctechnologies.co.in/vendorsms/pushsms.aspx?user=Burgeon%20verticles&password=123456&msisdn=91$mobile&sid=SDCTEC&msg=$msg&fl=0&gwid=2";
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $test=curl_exec($ch);
 curl_close($ch);
    }
  $data = array('status' => $status,'name'=>"$name",'email'=>"$email",'mobile'=>"$mobile",'latitude'=>"$latitude",'longitude'=>"$longitude",'id'=>"$id",'unique_key'=>"$unique_key",'imei_no'=>"$imei_no",'otp'=>"$otp",'user_type'=>"$user_type");
    $json = json_encode($data);
echo $json;
}
if(isset($_POST['wishlist']))
{
    $customer_id=$_POST['customer_id'];
    $property_id=$_POST['property_id'];
    $status_received=$_POST['status'];
    $status=False;
    if($status_received == "true"){
    $query="SELECT * FROM wishlist WHERE customer_id='$customer_id' AND property_id='$property_id'";
    $result=$con->query($query);
    if($result->num_rows>0){
        $status=True;
            $msg="Property already added to wishlist";
    }else{
        $query="INSERT INTO `wishlist`(`customer_id`, `property_id`) VALUES ('$customer_id','$property_id')";
        $result=$con->query($query);
        if(!$result){
        }else{
            $status=True;
            $msg="Property added to wishlist";
        }
    }
    }else{
        $query="DELETE FROM wishlist WHERE customer_id='$customer_id' AND property_id='$property_id'";
        $result=$con->query($query);
        if(!$result){
        }else{
            $status=False;
            $msg="Property removed from wishlist";
        }
    }
$data = array('status' => $status,'msg'=>"$msg");    
  $json = json_encode($data);
echo $json;  
}