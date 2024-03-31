<?php

require 'db.php';
$user_id =$_POST['id'];
$menu1=$_POST['menu1'];
$menu2=$_POST['menu2'];
$menu3=$_POST['menu3'];
$menu4=$_POST['menu4'];
$menu5=$_POST['menu5'];
$menu6=$_POST['menu6'];






$update_query= "UPDATE menu SET menu1='$menu1',menu2='$menu2', menu3='$menu3',menu4='$menu4',menu5='$menu5',menu6='$menu6' WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:menu_view.php");


?>