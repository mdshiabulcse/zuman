<?php
 require 'db.php';
/*
* print_r($_POST);
* print_r($_FILES);
*/


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

$file1 = $_FILES['photo1'];   //get the first image.
$file2 = $_FILES['photo2'];
$file3 = $_FILES['photo3'];
$file4 = $_FILES['photo4'];
$file5 = $_FILES['photo5'];
$file6 = $_FILES['photo6']; 



  
$fileName1 = $file1['name'];    //Define a variable and into first image original name.
$fileSize1 = $file1['size'];    //Define a variable and into first image original size.
$fileTmp1 = $file1['tmp_name'];  //Define a variable and into first image original tmp location.
$fileName2 = $file2['name'];    //Define a variable and into second image original name.
$fileSize2 = $file2['size'];    //Define a variable and into second image original size.
$fileTmp2 = $file2['tmp_name'];
$fileName3 = $file3['name'];
$fileSize3 = $file3['size'];
$fileTmp3 = $file3['tmp_name'];
$fileName4 = $file4['name'];
$fileSize4 = $file4['size'];
$fileTmp4 = $file4['tmp_name'];
$fileName5 = $file5['name'];
$fileSize5 = $file5['size'];
$fileTmp5 = $file5['tmp_name'];
$fileName6 = $file6['name'];
$fileSize6 = $file6['size'];
$fileTmp6 = $file6['tmp_name'];  //Define a variable and into second image original tmp location.
// //========process images========//
// if (empty($status)){
//     header('location:index.php?statusErr=1');                       //check empty field
// }
// elseif (empty($fileName1)){
//     header('location:index.php?pic1Err=1');                         //check empty field
// }
// elseif (empty($fileName2)){
//     header('location:index.php?pic2Err=1');                         //check empty field
// }
// else{
    $extension1 = explode('.', $fileName1);                      //explode first image name between dot (.) than get last one
    $extension1 = end($extension1);
    $extension2 = explode('.', $fileName2);                      //explode Second image name between dot (.) than get last one
    $extension2 = end($extension2);
    $extension3 = explode('.', $fileName3);                      //explode Second image name between dot (.) than get last one
    $extension3 = end($extension3);
    $extension4 = explode('.', $fileName4);                      //explode Second image name between dot (.) than get last one
    $extension4 = end($extension4);
    $extension5 = explode('.', $fileName5);                      //explode Second image name between dot (.) than get last one
    $extension5 = end($extension5);
    $extension6 = explode('.', $fileName6);                      //explode Second image name between dot (.) than get last one
    $extension6 = end($extension6);
    $allowExtension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG','gif','GIF'];     //Define a array in allow extension.
    if (!in_array($extension1, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize1 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }
    elseif (!in_array($extension2, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize2 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }
    elseif (!in_array($extension3, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize3 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }
    elseif (!in_array($extension4, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize4 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }
    elseif (!in_array($extension5, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize5 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }
    elseif (!in_array($extension6, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize6 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }


    else{
       

        if ($status==1) {

            $update_query= "UPDATE work SET status=0 ";
           $result=mysqli_query($db_connection,$update_query);
           $update_query= "UPDATE work SET status=$status WHERE id=$user_id ";
            $result=mysqli_query($db_connection,$update_query);

        $insertData = "INSERT INTO work (title1, content1,title2, content2,title3, content3,title4, content4,title5, content5,title6, content6, status) VALUES ('$text1','$text2','$text3','$text4','$text5','$text6','$text7','$text8','$text9','$text10','$text11','$text12','$status')";
        $inserted = mysqli_query($db_connection, $insertData);        //Insert data for get last id.
        $insertLastId = mysqli_insert_id($db_connection);             //get last id.
        $fileName1 = $insertLastId.'first.'.$extension1;                //make first image name
        $fileName2 = $insertLastId.'second.'.$extension2;
        $fileName3 = $insertLastId.'third.'.$extension3;
        $fileName4 = $insertLastId.'fourth.'.$extension4;
        $fileName5 = $insertLastId.'fifth.'.$extension5;
        $fileName6 = $insertLastId.'sixth.'.$extension6;                //make first image name
        $uploadLocation1 = 'uploads/work/'.$fileName1;
        move_uploaded_file($fileTmp1,$uploadLocation1);
        $uploadLocation2 = 'uploads/work/'.$fileName2;
        move_uploaded_file($fileTmp2, $uploadLocation2);
        $uploadLocation3 = 'uploads/work/'.$fileName3;
        move_uploaded_file($fileTmp3, $uploadLocation3);
        $uploadLocation4 = 'uploads/work/'.$fileName4;
        move_uploaded_file($fileTmp4, $uploadLocation4);
        $uploadLocation5 = 'uploads/work/'.$fileName5;
        move_uploaded_file($fileTmp5, $uploadLocation5);
        $uploadLocation6 = 'uploads/work/'.$fileName6;
        move_uploaded_file($fileTmp6, $uploadLocation6);
        $update = "UPDATE `work` SET `photo1`='$fileName1',`photo2`='$fileName2',`photo3`='$fileName3',`photo4`='$fileName4',`photo5`='$fileName5',`photo6`='$fileName6' WHERE id='$insertLastId'";
        $updated = mysqli_query($db_connection, $update);        //Update data
        header("location:work_view.php");
        
    }
}
?>