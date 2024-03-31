 <?php   

require 'db.php';


$select1="SELECT * FROM icon  ";
$query1=mysqli_query($db_connection,$select1);


 ?>
                <!-- start footer wrapper -->
                <footer>
                    <a href="#top" class="go_top">
                        <i class="ion-ios-arrow-thin-up"></i>
                    </a>
                    <!-- start social links -->
                    <ul class="social_links">
                        <?php foreach ($query1 as  $value) {
                      
                        ?>
                        <li><a href="<?php echo $value['link'];  ?>"><span class="<?php echo $value['icon'];  ?>"></span></a></li>
                       <?php } ?>
                    </ul>
                    <p class="copyright">&copy; 2019 <span>Zuman</span>. All Rights Reserved.</p>
                    <p>Developed by <span><a href="https://web.facebook.com/shiabulislam.shakib.14">Shiabul Islam</a></span></p>
                     
                </footer>
                <!-- end footer wrapper -->
            </div>
        </div>
    </div>


    <!-- ========  All JS Here ========  -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from sojonever.com/html/zuman/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 13:39:38 GMT -->
</html>
