<?php
require 'db.php';
$select2="SELECT * FROM work WHERE status=1";
$result2=mysqli_query($db_connection,$select2);
$after_assoc=mysqli_fetch_assoc($result2);






?>
<!-- start work wrapper -->
                <div id="works" class="work_wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Recent Works</h2>
                            </div>
							
							<!-- work filter start -->
							<div class="row no-gutters">
								<div class="col-12">
									<div class="filter-buttons">
										<button class="active" data-filter="*">Everything</button>
										<button data-filter=".web">Web</button>
										<button data-filter=".uiux">UI/UX</button>
										<button data-filter=".branding">Branding</button>
									</div>
								</div>
							</div>
							<!-- work filter end -->
							
                            <div class="row works">
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 uiux">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="uploads/work/<?php echo $after_assoc['photo1'] ?>" alt="">
                                        <div class="work_info">
                                            <h6 title="Black &amp; White Shoe"><?php echo $after_assoc['title1']  ?></h6>
                                            <p><?php echo $after_assoc['content1']  ?></p>
                                            <a class="ajax-popup-link" href="work-details-1.html"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 web">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="uploads/work/<?php echo $after_assoc['photo2'] ?>" alt="">
                                        <div class="work_info">
                                            <h6 title="White Lamp in White Wall"><?php echo $after_assoc['title2']  ?></h6>
                                            <p><?php echo $after_assoc['content2']  ?></p>
                                            <a class="ajax-popup-link" href="work-details-2.html"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 branding">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="uploads/work/<?php echo $after_assoc['photo3'] ?>" alt="">
                                        <div class="work_info">
                                            <h6 title="Green Lamp Holder"><?php echo $after_assoc['title3']  ?></h6>
                                            <p><?php echo $after_assoc['content3']  ?></p>
                                            <a class="ajax-popup-link" href="work-details-3.html"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 web">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="uploads/work/<?php echo $after_assoc['photo4'] ?>" alt="">
                                        <div class="work_info">
                                            <h6 title="Green Lamp Holder"><?php echo $after_assoc['title4']  ?></h6>
                                            <p><?php echo $after_assoc['content4']  ?></p>
                                            <a class="ajax-popup-link" href="work-details-4.html"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 branding">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="uploads/work/<?php echo $after_assoc['photo5'] ?>" alt="">
                                        <div class="work_info">
                                            <h6 title="Olive Oil Bottle"><?php echo $after_assoc['title5']  ?></h6>
                                            <p><?php echo $after_assoc['content5']  ?></p>
                                            <a class="ajax-popup-link" href="work-details-5.html"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 uiux">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="uploads/work/<?php echo $after_assoc['photo6'] ?>" alt="">
                                        <div class="work_info">
                                            <h6 title="Black Chair"><?php echo $after_assoc['title6']  ?></h6>
                                            <p><?php echo $after_assoc['content6']  ?></p>
                                            <a class="ajax-popup-link" href="work-details-6.html"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- view all work button  -->
                                <div class="col-lg-12">
                                    <a class="button slide-vertical" data-splitting href="#">View All Works</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end work wrapper -->