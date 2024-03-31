<?php

require 'db.php';
$user_id =$_POST['id'];

$title=$_POST['title'];
$discription=$_POST['menu6'];






$update_query= "UPDATE about_content SET title='$menu1',discrip='$discription' WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:about_content_view.php");


?>