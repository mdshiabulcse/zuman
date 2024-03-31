
<?php
require 'db.php';
$select2="SELECT * FROM service";
$result2=mysqli_query($db_connection,$select2);
$after_assoc=mysqli_fetch_assoc($result2);






?>




<!-- start services wrapper -->
                <div id="service" class="services">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title"><?php echo $after_assoc['service']; ?></h2>
                            </div>
                            <!-- start service items -->
                            <div class="service_items">
                                <div class="row">
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-sites"></i>
                                            <h6 data-hover="Design"><?php echo $after_assoc['service1']; ?></h6>
                                            <p><?php echo $after_assoc['service2']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-extension"></i>
                                            <h6 data-hover="Development"><?php echo $after_assoc['service3']; ?></h6>
                                            <p><?php echo $after_assoc['service4']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-rocket"></i>
                                            <h6 data-hover="Graphics"><?php echo $after_assoc['service5']; ?></h6>
                                            <p><?php echo $after_assoc['service6']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-flag"></i>
                                            <h6 data-hover="Branding"><?php echo $after_assoc['service7']; ?></h6>
                                            <p><?php echo $after_assoc['service8']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-image-slider"></i>
                                            <h6 data-hover="Photography"><?php echo $after_assoc['service9']; ?></h6>
                                            <p><?php echo $after_assoc['service10']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-like"></i>
                                            <h6 data-hover="Support"><?php echo $after_assoc['service11']; ?></h6>
                                            <p><?php echo $after_assoc['service12']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                </div>
                            </div>
                            <!-- end service items -->
                        </div>
                    </div>
                </div>
                <!-- end services wrapper -->