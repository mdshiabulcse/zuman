<?php

require 'db.php';
$user_id=$_GET['id'];


$remove="DELETE FROM service where id=$user_id";
$query=mysqli_query($db_connection,$remove);
header("location:service_view.php");

?>