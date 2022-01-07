<?php
include "include/config.php";
ob_start();
session_start();
include "include/include.php";

if(isset($_POST['new_enquiry'])){
    $i=1;
    $query="SELECT * FROM enquiry ORDER BY id DESC";
    $result=$con->query($query);
    $count=$result->num_rows;
    echo '<table id="example3" class="table table-striped table-bordered text-center" >
			<thead>
				<tr>
					<th class="">Sr No.</th>
					<th class="">Name</th>
					<th class="">Email Id</th>
					<th class="">Mobile</th>
					<th class="">Date Time</th>
					<th class="">Comment</th>
					<th class="">Update</th>
				</tr>
			</thead>	<tbody >';
    while($row=$result->fetch_assoc()){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $date_time=$row['date_time'];
        $status=$row['status'];
        $comment=$row['comment'];
        if($status=="Unread"){
            $status='<button class="btn btn-primary" onclick="read('.$id.')">Unread</button>';
        }
        echo'
        <tr>
            <td>'.$i.'</td>
    		<td>'.$name.'</td>
    		<td>'.$email.'</td>
    		<td>'.$mobile.'</td>
    		<td>'.$date_time.'</td>
    		<td><textarea id="text_'.$id.'" >'.$comment.'</textarea></td>
    		<td><button class="btn btn-primary" onclick="update('.$id.')">Update</button></td>
    	</tr>
        ';
        $i++;
    }
    echo'	</tbody>
											</table><input type="hidden" value="'.$count.'" id="count_id">';
}

if(isset($_POST['read'])){
    $id=$_POST['id'];
    $con->query("UPDATE enquiry SET status='Read' WHERE id='$id'");
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $comment=$_POST['comment'];
    $con->query("UPDATE enquiry SET comment='$comment' WHERE id='$id'");
}
if(isset($_POST['check_new_entry'])){
    $query="SELECT * FROM enquiry ORDER BY id DESC";
    $result=$con->query($query);
    $count=$result->num_rows;
    echo'<input type="hidden" value="'.$count.'" id="new_count">';
}
?>