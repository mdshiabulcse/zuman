<?php

require 'db.php';

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


$insert_service=" INSERT INTO service(service, service1, service2, service3, service4, service5, service6, service7, service8, service9, service10, service11, service12) VALUES ('$service','$service1','$service2','$service3','$service4','$service5','$service6','$service7','$service8','$service9','$service10','$service11','$service12') ";

$query=mysqli_query($db_connection,$insert_service);

header("location:service_view.php");


?>