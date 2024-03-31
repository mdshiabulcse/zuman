<?php

require 'db.php';

$user_id=$_POST['id'];
$name=$_POST['fname'];
$icon=$_POST['icon'];
$link=$_POST['link'];

	$update_query= "UPDATE icon SET name='$name',icon='$icon',link='$link' WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:icon_view.php");





?>