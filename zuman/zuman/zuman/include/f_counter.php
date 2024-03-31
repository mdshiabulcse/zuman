
<?php
require 'db.php';
$select2="SELECT * FROM counter WHERE status=1";
$result2=mysqli_query($db_connection,$select2);
$after_assoc=mysqli_fetch_assoc($result2);






?>

<!-- start counter wrapper -->
                <div class="counter">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="<?php echo $after_assoc['text1'] ?>"></i>
                                    <h4><?php echo $after_assoc['text2'] ?></h4>
                                    <span class="counter-number"><?php echo $after_assoc['text3'] ?></span>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="<?php echo $after_assoc['text4'] ?>"></i>
                                    <h4><?php echo $after_assoc['text5'] ?></h4>
                                    <span class="counter-number"><?php echo $after_assoc['text6'] ?></span>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="<?php echo $after_assoc['text7'] ?>"></i>
                                    <h4><?php echo $after_assoc['text8'] ?></h4>
                                    <span class="counter-number"><?php echo $after_assoc['text9'] ?></span>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="<?php echo $after_assoc['text10'] ?>"></i>
                                    <h4><?php echo $after_assoc['text11'] ?></h4>
                                    <span class="counter-number"><?php echo $after_assoc['text12'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end counter wrapper -->