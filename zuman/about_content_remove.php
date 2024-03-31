<?php

require 'db.php';
$user_id=$_GET['id'];


$remove="DELETE FROM about_content where id=$user_id";
$query=mysqli_query($db_connection,$remove);
header("location:about_content_view.php");

?>