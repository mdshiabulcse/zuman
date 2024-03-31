<?php

require 'db.php';



$nameerr='';
$meserr='';
$emailer='';

if (empty($_POST['fname'])) {
	$nameerr="Please Insert Your Name";
	header("location:index.php?fnamer=".$nameerr);
}

elseif (empty($_POST['message'])) {
	$meserr="Please Insert Your Message";
	header("location:index.php?mesgerr=".$meserr);
}
elseif (empty($_POST['email'])) {
	$emailer="Please Insert Your Email";
	header("location:index.php?email=".$emailer);
}
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$_POST['email'])) {
	$emailer="Your email not valid";
	header("location:index.php?email=".$emailer);
}


$name=$_POST['fname'];
$email=$_POST['email'];
$message=$_POST['message'];



$insert="INSERT INTO `message`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";
$query=mysqli_query($db_connection,$insert);

header("location:index.php#contact");












?>