<?php

require 'db.php';
$user_id=$_GET['id'];




$remove="DELETE FROM contact where id=$user_id";
$query=mysqli_query($db_connection,$remove);
header("location:contact_view.php");





?>