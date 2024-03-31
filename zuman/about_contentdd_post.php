<?php

require 'db.php';

$title=$_POST['title'];
$discription=$_POST['discription'];

$insert_about="INSERT INTO about_content (title, discrip) VALUES ('$title','$discription')";


$query=mysqli_query($db_connection,$insert_about);

header("location:about_content_view.php");







?>