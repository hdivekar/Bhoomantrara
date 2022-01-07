<?php
include "include/config.php";
ob_start();
session_start();
include "include/include.php";

if(isset($_POST['new_enquiry'])){
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $i=1;
    echo'
    <table id="" class="table table-striped table-bordered text-center" >
	<thead>
		<tr>
			<th class="align-middle">Sr No.</th>
			<th class="align-middle">Date</th>
			<th class="align-middle">City</th>
			<th class="align-middle">Count</th>
			<th class="align-middle">Total Count</th>
			
		</tr>
	</thead>
	<tbody>
    ';
    $i=1;
   $query="SELECT date FROM visit_landing_page_city WHERE date BETWEEN '$start_date' AND '$end_date' GROUP BY date" ;
   $result=$con->query($query);
   if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
       $date_check=$row['date'];
    $total_count=0;
    $city_query="SELECT COUNT(id) AS id,city FROM visit_landing_page_city WHERE date='$date_check' GROUP BY city";  
    $city_result=$con->query($city_query);
    $row_span=$city_result->num_rows;
    
     if($city_result->num_rows>0){
         $a=0;
         
        while($city_row=$city_result->fetch_assoc()){
            $count=$city_row['id'];
            $total_count+=$count;
        }
     }
    $city_query="SELECT COUNT(id) AS id,city FROM visit_landing_page_city WHERE date='$date_check' GROUP BY city";  
    $city_result=$con->query($city_query);
    $row_span=$city_result->num_rows;
    
    echo'<tr>
    <td class="align-middle" rowspan="'.$row_span.'">'.$i.'</td>
    <td class="align-middle" rowspan="'.$row_span.'">'.$date_check.'</td>
    ';
    if($city_result->num_rows>0){
         $a=0;
         
        while($city_row=$city_result->fetch_assoc()){
            if($a!=0){
                echo'<tr>';
            }
       $count=$city_row['id'];
       $city=$city_row['city'];
       echo'<td class="align-middle" ">'.$city.'</td>
    <td class="align-middle" >'.$count.'</td>';
     if($a!=0){
                echo'</tr>';
            }
    if($a==0){
   echo'
    <td class="align-middle" rowspan="'.$row_span.'">'.$total_count.'</td></tr>
    ';             
            }
    $a++;
        }
        
    }
    
    $i++;
   }
   }
   echo'
   
	</tbody>
</table>
   ';
}