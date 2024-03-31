<?php

require 'db.php';

$text1=$_POST['text1'];
$text2=$_POST['text2'];
$text3=$_POST['text3'];

$uploaded_file=$_FILES['photo'];


$after_explode= explode('.',$uploaded_file['name']);
$extention= end($after_explode);
$allowd_extention= array('jpg','jpeg','png');
if (in_array($extention, $allowd_extention)) {
	
			
			$insert="INSERT INTO testimonial (name,title,about) VALUES ('$text1','$text2','$text3')";
			$query=mysqli_query($db_connection,$insert);
			$last_id= mysqli_insert_id($db_connection);
			$file_name= $last_id.'.'.$extention ;
			$new_location='uploads/testimonial/'.$file_name;
			$move= move_uploaded_file($uploaded_file['tmp_name'], $new_location);
			$name_to_save_db=$file_name;
			$update="UPDATE testimonial SET photo='$file_name' WHERE id=$last_id";
			$photo_upload= mysqli_query($db_connection,$update);
			
			header("location:tes_view.php");
		}

		

		
		




	
else{
	echo "invalid formate";
}





?>