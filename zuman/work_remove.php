<?php

require 'db.php';
$user_id=$_GET['id'];


$select_photo="SELECT photo1,photo2,photo3,photo4,photo5,photo6 FROM work WHERE id=$user_id";
$del_photo_query= mysqli_query($db_connection,$select_photo);
$after_assoc=mysqli_fetch_assoc($del_photo_query); 
$delet_from_location="uploads/work/".$after_assoc['photo1'];
unlink($delet_from_location);
$delet_from_location1="uploads/work/".$after_assoc['photo2'];
unlink($delet_from_location1);
$delet_from_location2="uploads/work/".$after_assoc['photo3'];
unlink($delet_from_location2);
$delet_from_location3="uploads/work/".$after_assoc['photo4'];
unlink($delet_from_location3);
$delet_from_location4="uploads/work/".$after_assoc['photo5'];
unlink($delet_from_location4);
$delet_from_location5="uploads/work/".$after_assoc['photo6'];
unlink($delet_from_location5);

$remove="DELETE FROM work WHERE id=$user_id";
$query=mysqli_query($db_connection,$remove);
header("location:work_view.php");





?>