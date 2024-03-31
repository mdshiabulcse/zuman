<?php  

require 'db.php';
$user_id =$_POST['id'];
$service=$_POST['service'];
$service1=$_POST['service1'];
$service2=$_POST['service2'];
$service3=$_POST['service3'];
$service4=$_POST['service4'];
$service5=$_POST['service5'];
$service6=$_POST['service6'];
$service7=$_POST['service7'];
$service8=$_POST['service8'];
$service9=$_POST['service9'];
$service10=$_POST['service10'];
$service11=$_POST['service11'];
$service12=$_POST['service12'];


$update_query= "UPDATE service SET service='$service',service1='$service1', service2='$service2',service3='$service3',service4='$service4',service5='$service5',service6='$service6',service7='$service7',service8='$service8',service9='$service9',service10='$service10',service11='$service11',service12='$service12'WHERE id=$user_id ";
	$result=mysqli_query($db_connection,$update_query);
	header("location:service_view.php");


?>