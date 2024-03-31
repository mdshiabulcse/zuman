<?php

require 'db.php';

$user_id=$_POST['id'];
$content1=$_POST['text1'];
$content2=$_POST['text2'];
$content3=$_POST['text3'];

$status=$_POST['status'];

if ($status==1) {
	$update_query= "UPDATE navber SET status=0 ";
   $result=mysqli_query($db_connection,$update_query);
	$update_query= "UPDATE navber SET content1='$content1',content2='$content2',content3='$content3',status=$status WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:navber_view.php");
	
}

else{
	$update_query= "UPDATE navber SET content1='$content1',content2='$content2',content3='$content3',status=$status WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:navber_view.php");
}



?>