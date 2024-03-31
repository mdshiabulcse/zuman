

<?php

require 'db.php';

$name=$_POST['fname'];
$icon=$_POST['icon'];
$link=$_POST['link'];



$insert="INSERT INTO `icon`( `name`, `icon`, `link`) VALUES ('$name','$icon','$link')";

$query=mysqli_query($db_connection,$insert);







?>