<?php

require 'db.php';
$user_id=$_GET['id'];


$select_photo="SELECT photo FROM admin WHERE id=$user_id";
$del_photo_query= mysqli_query($db_connection,$select_photo);
$after_assoc=mysqli_fetch_assoc($del_photo_query); 
$delet_from_location="uploads/admin/".$after_assoc['photo'];
unlink($delet_from_location);

$remove="DELETE FROM admin where id=$user_id";
$query=mysqli_query($db_connection,$remove);
header("location:user_view.php");





?>