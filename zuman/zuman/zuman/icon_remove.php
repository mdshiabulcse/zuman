<?php

require 'db.php';
$user_id=$_GET['id'];




$remove="DELETE FROM icon where id=$user_id";
$query=mysqli_query($db_connection,$remove);
header("location:icon_view.php");





?>