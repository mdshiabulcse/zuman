<?php

require 'db.php';

$status=$_POST['status'];

$uploaded_file=$_FILES['logo'];


$after_explode= explode('.',$uploaded_file['name']);
$extention= end($after_explode);
$allowd_extention= array('jpg','jpeg','png');
if (in_array($extention, $allowd_extention)) {
	if ($uploaded_file['size']<=100000000) {

		if ($status==1) {
			$update_query= "UPDATE logo SET status=0 ";
		   $result=mysqli_query($db_connection,$update_query);
			$update_query= "UPDATE logo SET status=$status WHERE id=$user_id ";
			$result=mysqli_query($db_connection,$update_query);
			$insert="INSERT INTO logo (status) VALUES ('$status')";
			$query=mysqli_query($db_connection,$insert);
			$last_id= mysqli_insert_id($db_connection);
			$file_name= $last_id.'.'.$extention ;
			$new_location='uploads/logo/'.$file_name;
			$move= move_uploaded_file($uploaded_file['tmp_name'], $new_location);
			$name_to_save_db=$file_name;
			$update="UPDATE logo SET logo='$file_name' WHERE id=$last_id";
			$photo_upload= mysqli_query($db_connection,$update);
			
			header("location:logo.php");
		}

		else{
			$insert="INSERT INTO logo (status) VALUES ('$status')";
		$query=mysqli_query($db_connection,$insert);
		$last_id= mysqli_insert_id($db_connection);
		$file_name= $last_id.'.'.$extention ;
		$new_location='uploads/logo/'.$file_name;
		$move= move_uploaded_file($uploaded_file['tmp_name'], $new_location);
		$name_to_save_db=$file_name;
		$update="UPDATE logo SET logo='$file_name' WHERE id=$last_id";
		$photo_upload= mysqli_query($db_connection,$update);
		
		header("location:logo.php");
		}


		
		




	}
	else{
		echo "file to larg";
	}
}
else{
	echo "invalid formate";
}





?>