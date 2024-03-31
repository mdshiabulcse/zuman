<?php

require 'db.php';

$phone=$_POST['phone'];
$email=$_POST['email'];
$status=$_POST['status'];
print_r($status);

$insert="INSERT INTO contact( phone,email,status) VALUES ('$phone','$email','$status')";

			$query=mysqli_query($db_connection,$insert);


 if ($status==1) {

            $update_query= "UPDATE contact SET status=0 ";
           $result=mysqli_query($db_connection,$update_query);
           $update_query= "UPDATE contact SET status=$status WHERE id=$user_id ";
            $result=mysqli_query($db_connection,$update_query);

			       
			$insert="INSERT INTO contact( phone,email,status) VALUES ('$phone','$email','$status')";

			$query=mysqli_query($db_connection,$insert);
			header("location:contact_view.php");


       }









?>