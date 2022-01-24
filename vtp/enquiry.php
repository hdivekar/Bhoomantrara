<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
include "../include/config.php";
ob_start();
session_start();

if(isset($_POST['visit_landing_page'])){
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip_query="SELECT * FROM visit_landing_page_city WHERE ip='$ip'";
    $ip_result=$con->query($ip_query);
    if($ip_result->num_rows>0){
        
    }else{
    $query="SELECT * FROM `visit_landing_page` WHERE `date`='$today'";
    $result=$con->query($query);
    if($result->num_rows>0){
        $query="UPDATE visit_landing_page SET visits=visits+1 WHERE date='$today'";
        echo $query;
        $result=$con->query($query);
    }else{
    $query="INSERT INTO `visit_landing_page`( `date`, `visits`) VALUES ('$today','1')";
    $result=$con->query($query);
    }
    
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    $city= $details->city;
    $dateTimeVariable = date("Y-m-d H:i:s");
    $query="INSERT INTO `visit_landing_page_city`(`date`, `ip`, `city`,`date_time`) VALUES ('$today','$ip','$city','$dateTimeVariable')";
    $con->query($query);
    }
}

if(isset($_POST['submit_on_click1'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $dateTimeVariable = date("Y-m-d H:i:s");
    $page_name="VTP";
    $query="INSERT INTO `enquiry`( `name`, `email`, `mobile`,`ip_address`,`date_time`,`page_name`) VALUES ('$name','$email','$mobile','$ipaddress','$dateTimeVariable','$page_name')";
    mysqli_query($con,$query);
    
$body='<p>Hello '.$name.' <br>
Greetings of the day!!!<br>
We have received your enquiry and we will contact you on your provided mobile number - '.$mobile.' <br>
<br><br><br>
Thank You,<br>Bhoomantra<br>
www.bhoomantra.com<br>
<img src="https://bhoomantra.com/ptccampaign/images/logo3.png" style="min-height:40px; max-height:40px;">
';

include("class.phpmailer.php"); 
$headers = "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= "From: Bhoomantra <support@bhoomantra.com>" . "\r\n"; 
$msg = $body;
$msg = wordwrap($msg,70);
mail("$email","Bhoomantra",$msg,$headers);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= "From: Bhoomantra <support@bhoomantra.com>" . "\r\n"; 
//$headers.= "Cc: bhoomanta@gmail.com" . "\r\n";

$body='<p>Hello,<br>
We have received new enquiry<br>
Name: '.$name.'<br>
Email: '.$email.'<br>
Mobile: '.$mobile.'<br>
</p>';

$msg = $body;
$msg = wordwrap($msg,70);

mail("bhoomanta@gmail.com","Bhoomantra",$msg,$headers);    
}
?>