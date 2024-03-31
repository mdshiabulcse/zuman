<?php
require "db.php";

$fname=$_POST['fname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];


$uploaded_file=$_FILES['photo'];

$select_query="SELECT COUNT(*) as admin FROM admin WHERE email='$email'";
$chk_query=mysqli_query($db_connection,$select_query); 
$after_assoc= mysqli_fetch_assoc ($chk_query);
if ($after_assoc['admin']==1) {
	echo "email already valid";
}
else{

$after_explode= explode('.',$uploaded_file['name']);
$extention= end($after_explode);
$allowd_extention= array('jpg','jpeg','png');
if (in_array($extention, $allowd_extention)) {
	if ($uploaded_file['size']<=100000000) {
		$insert="INSERT INTO admin (name, username, email,  password, role) VALUES ('$fname','$username','$email','$password','$role')";
		$insert_query=mysqli_query($db_connection,$insert);
		$last_id= mysqli_insert_id($db_connection);
		$file_name= $last_id.'.'.$extention ;
		$new_location='uploads/admin/'.$file_name;
		$move= move_uploaded_file($uploaded_file['tmp_name'], $new_location);
		$name_to_save_db=$file_name;
		$update="UPDATE admin SET photo='$file_name' WHERE id=$last_id";
		$photo_upload= mysqli_query($db_connection,$update);
		
		// header("location:");


		
		




	}
	else{
		echo "file to larg";
	}
}
else{
	echo "invalid formate";
}
}






?>