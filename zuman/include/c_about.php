<?php
require 'db.php';
$select="SELECT * FROM about_photo WHERE status=1 ";
$result=mysqli_query($db_connection,$select);
$assoc=mysqli_fetch_assoc($result)


?>
<?php
require 'db.php';
$select1="SELECT * FROM about_photo WHERE status=0 ";
$result1=mysqli_query($db_connection,$select1);
$assoc1=mysqli_fetch_assoc($result1)


?>
<?php
require 'db.php';
$select2="SELECT * FROM about_content";
$result2=mysqli_query($db_connection,$select2);
$after_assoc=mysqli_fetch_assoc($result2);






?>
 <?php   

require 'db.php';


$icon_insert="SELECT * FROM icon  ";
$icon_query=mysqli_query($db_connection,$icon_insert);


 ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- start about wrapper -->
                <div id="about" class="about_wrapper">
                    <div class="about">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <!-- start about image -->
                                <div class="about_img">
                                    
                                    <img class="about_img_1 top" src="uploads/about_photo/<?php echo $assoc['photo']; ?>" alt="">
                                    <img class="about_img_2 bottom" src="uploads/about_photo/<?php echo $assoc1['photo']; ?>" alt="">
                              
                                </div>
                                <!-- end about image -->
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <!-- start about details -->
                                <div class="about_info">
                                    
                                    <h4><?php echo $after_assoc['title']; ?></h4>
                                
                                    <img class="zigzag" src="img/zigzag.svg" alt="">
                                    <p class="about_desc"><?php echo $after_assoc['discrip']; ?></p>
                                    <!-- start social links -->
                                    <ul class="social_links">
                                        <?php  foreach ($icon_query as  $value) {
                                            # code...
                                     
                                             ?>
                                        <li><a href="<?php echo $value['link'];  ?>"><span class="<?php echo $value['icon'];  ?>"></span></a></li>
                                         <?php } ?>
                                    </ul>
                                    <!-- end social links -->
                                </div>
                                <!-- end about details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end about wrapper -->