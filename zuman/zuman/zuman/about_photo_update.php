<?php

require 'db.php';

$user_id=$_POST['id'];




if ($_FILES['photo']['name'] !='') {
		$select_photo="SELECT photo FROM about_photo WHERE id=$user_id";
	$del_photo_query= mysqli_query($db_connection,$select_photo);
	$after_assoc=mysqli_fetch_assoc($del_photo_query); 
	$delet_from_location="uploads/about_photo/".$after_assoc['photo'];
	 unlink($delet_from_location);

$uploaded_file=$_FILES['photo'];

$after_explode= explode('.',$uploaded_file['name']);
$extention= end($after_explode);
$allowd_extention= array('jpg','jpeg','png');
if (in_array($extention, $allowd_extention)) {
	if ($uploaded_file['size']<=100000000) {
		
		$file_name= $user_id.'.'.$extention ;
		$new_location='uploads/about_photo/'.$file_name;
		$move= move_uploaded_file($uploaded_file['tmp_name'], $new_location);
		$name_to_save_db=$file_name;
		$update="UPDATE about_photo SET photo='$file_name' WHERE id=$user_id";
		$photo_upload= mysqli_query($db_connection,$update);
		header('location:about_photo_view.php');
	}
	else{
		echo "file to large";
	}
}
else{
	echo "invalid file";
}
}
else{
	
}

?>