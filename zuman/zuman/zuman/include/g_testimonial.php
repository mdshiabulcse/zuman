<?php   

require 'db.php';


$select="SELECT * FROM testimonial ";
$query=mysqli_query($db_connection,$select);


 ?>
<?php   

require 'db.php';


$select1="SELECT * FROM clint ";
$query1=mysqli_query($db_connection,$select1);


 ?>



<!-- start testimonials wrapper -->
                <div id="testimonial" class="testimonials">
                    <div class="row justify-content-center">

                        <div class="col-md-8">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Testimonials</h2>
                            </div>
                            
                            <div class="owl-carousel testimonial_slider">
                               
                                <?php foreach ($query as  $value) {
                                    ?>
                                <!-- start testimonial single item -->
                                <div class="testimonial_single_item">
                                    <img src="uploads/testimonial/<?php echo $value['photo']; ?>" alt="photo">
                                    <p><?php echo $value['about']; ?></p>
                                    <h4><?php echo $value['name']; ?></h4>
                                    <span><?php echo $value['title']; ?></span>
                                </div>
                                 <?php } ?>
                                <!-- end testimonial single item -->
                            </div>
                       
                        </div>
                    </div>
                </div>
                <!-- end testimonials wrapper -->
                <!-- start clients wrapper -->
                <div class="clients">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-10 client_items">
                            <!-- section title -->
                            <h2 class="section_title">Clients</h2>
                            <div class="row no-gutters">
                                <div class="col">
                                    <?php foreach ($query1 as  $value) {
                                         ?>
                                    <img src="uploads/clint/<?php echo $value['photo']; ?>" alt="Brand_01">
                                    

                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end clients wrapper -->