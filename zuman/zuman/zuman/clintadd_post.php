<?php

require 'db.php';

$text=$_POST['text'];

$uploaded_file=$_FILES['photo'];



$after_explode= explode('.',$uploaded_file['name']);
$extention= end($after_explode);
$allowd_extention= array('jpg','jpeg','png');
if (in_array($extention, $allowd_extention)) {
	if ($uploaded_file['size']<=100000000) {

		
			$insert="INSERT INTO clint (name) VALUES ('$text')";
		$query=mysqli_query($db_connection,$insert);
		$last_id= mysqli_insert_id($db_connection);
		$file_name= $last_id.'.'.$extention ;
		$new_location='uploads/clint/'.$file_name;
		$move= move_uploaded_file($uploaded_file['tmp_name'], $new_location);
		$name_to_save_db=$file_name;
		$update="UPDATE clint SET photo='$file_name' WHERE id=$last_id";
		$photo_upload= mysqli_query($db_connection,$update);
		
		header("location:clint_view.php");
		


		
		




	}
	else{
		echo "file to larg";
	}
}
else{
	echo "invalid formate";
}





?>