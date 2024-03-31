<?php

require 'db.php';

$user_id=$_POST['id'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$status=$_POST['status'];
if ($status==1) {
	$update_query= "UPDATE contact SET status=0 ";
   $result=mysqli_query($db_connection,$update_query);
	$update_query= "UPDATE contact SET phone='$phone',email='$email',status=$status WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:contact_view.php");
	
}

else{
	$update_query= "UPDATE contact SET phone='$phone',email='$email',status=$status WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:contact_view.php");
}





?>