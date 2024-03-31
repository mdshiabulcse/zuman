







<?php   

require 'db.php';


$select1="SELECT * FROM contact WHERE status=1 ";
$query1=mysqli_query($db_connection,$select1);


 ?>
 <!-- start contact wrapper -->
                <div id="contact" class="contact_wrapper">
                    <div class="text-center">
                        <h2 class="section_title">Drop a line</h2>
                    </div>
                    <div class="row justify-content-center">
                        <!-- start contact info ( email - phone) -->
                        <div class="col-lg-3 col-md-12">
                            <div class="contact_item">
                                <?php foreach ($query1 as  $value) {
                                  
                                 ?>
                                <h5>Phone</h5>
                                
                                <p><?php echo $value['phone']; ?></p>
                               
                            </div>
                            <div class="contact_item">
                                <h5>Email</h5>
                                <p><?php echo $value['email']; ?></p>
                            </div>
                             <?php } ?>
                        </div>
                        <!-- end contact info ( email - phone) -->
                        <!-- start contact form -->
                        <div class="col-lg-7 col-md-12">
                            <form  action="message_post.php" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <p class="form-message"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- input field for NAME -->
                                        <input class="input_field " type="text" name="fname" placeholder="Name">
                                        <?php if (!empty($_GET['fnamer'])) {
                                                echo $_GET['fnamer'] ;
                                            } ?>
                                        <!-- input field for EMAIL -->
                                        <input class="input_field " type="email" name="email" placeholder="Email">
                                         <?php if (!empty($_GET['email'])) {
                                                echo $_GET['email'] ;
                                            } ?>
                                    </div>
                                    <div class="col-md-7">
                                        <!-- input field for MESSAGE -->
                                        <textarea class="input_field " name="message" placeholder="Tell Me About Your Query."></textarea>
                                        
                                       
                                    </div>
                                    <div>
                                        <?php if (!empty($_GET[' mesgerr'])) {
                                                echo $_GET['mesgerr'] ;
                                            } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <!-- button for MESSAGE-SEND -->
                                        <button class="button slide-vertical" type="submit" data-splitting>send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end contact form -->
                    </div>
                </div>
                <!-- end contact wrapper -->