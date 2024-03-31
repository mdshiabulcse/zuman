<?php
session_start();
require 'db.php';

$email=$_POST['email'];
$password=$_POST['password'];

$select_query="SELECT COUNT(*) as shakib,name,email,photo,role FROM admin WHERE email='$email ' AND password='$password'";
$chk_query=mysqli_query($db_connection,$select_query); 
$after_assoc= mysqli_fetch_assoc ($chk_query);


if ($after_assoc['shakib']==1) {
	$_SESSION['shakib']='ok';
	$_SESSION['name']=$after_assoc['name'];
	$_SESSION['email']=$after_assoc['email'];
	$_SESSION['photo']=$after_assoc['photo'];
	$_SESSION['role']=$after_assoc['role'];
	
		header('location:dashboard.php');
	
}
else{
	header("location:admin_login.php");
}



?>