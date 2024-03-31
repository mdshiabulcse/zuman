<?php

require 'db.php';

$menu1=$_POST['menu1'];
$menu2=$_POST['menu2'];
$menu3=$_POST['menu3'];
$menu4=$_POST['menu4'];
$menu5=$_POST['menu5'];
$menu6=$_POST['menu6'];


$insert="INSERT INTO menu( menu1,menu2, menu3, menu4, menu5, menu6) VALUES ('$menu1','$menu2','$menu3','$menu4','$menu5','$menu6')";

$query=mysqli_query($db_connection,$insert);
header("location:menu_view.php");






?>