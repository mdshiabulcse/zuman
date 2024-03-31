<?php

require 'db.php';
$status = $_POST['status'];
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];
$text4 = $_POST['text4'];
$text5 = $_POST['text5'];
$text6 = $_POST['text6'];
$text7 = $_POST['text7'];
$text8 = $_POST['text8'];
$text9 = $_POST['text9'];
$text10 = $_POST['text10'];
$text11 = $_POST['text11'];
$text12 = $_POST['text12'];

 if ($status==1) {

            $update_query= "UPDATE counter SET status=0 ";
           $result=mysqli_query($db_connection,$update_query);
           $update_query= "UPDATE counter SET status=$status WHERE id=$user_id ";
            $result=mysqli_query($db_connection,$update_query);

        $insertData = "INSERT INTO counter (`text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `text9`, `text10`, `text11`, `text12`, `status`) VALUES ('$text1','$text2','$text3','$text4','$text5','$text6','$text7','$text8','$text9','$text10','$text11','$text12','$status')";

         $inserted = mysqli_query($db_connection, $insertData);


       }












?>