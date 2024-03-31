
<?php
require 'db.php';
$select="SELECT * FROM logo WHERE status=1";
$result=mysqli_query($db_connection,$select);
$after_assoc=mysqli_fetch_assoc($result);


?>
<?php
require 'db.php';
$menu_select="SELECT * FROM menu ";
$menu=mysqli_query($db_connection,$menu_select);
$menu_assoc=mysqli_fetch_assoc($menu);


?>
<?php
require 'db.php';
$navber_select="SELECT * FROM navber WHERE status=1";
$navber=mysqli_query($db_connection,$navber_select);
$navber_assoc=mysqli_fetch_assoc($navber);


?>

<!-- start landing wrapper  -->
    <div class="landing_wrapper bg-img" data-src="uploads/navber/<?php echo $navber_assoc['photo']; ?>">
        <!-- start header  -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-8">
                        <div class="logo">
                            <a href="index.php"><img src="uploads/logo/<?php echo $after_assoc['logo']; ?>" alt="zuman"></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-4">
                        <ul id="menu_items" class="menu_items">
                            <li class="nav-item">
                                <a href="#top" class="active menu_item nav-link slide-horizontal" data-splitting><?php echo $menu_assoc['menu1']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $menu_assoc['menu2']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="#service" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $menu_assoc['menu3']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="#works" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $menu_assoc['menu4']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="#testimonial" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $menu_assoc['menu5']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $menu_assoc['menu6']; ?></a>
                            </li>
                        </ul>
                        <!-- responsive menu btn -->
                        <div class="nav-btn">
                            <span class="ion-android-menu"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header  -->
        <!-- start home wrapper -->
        <div class="home_wrapper">
            <!-- start landing content -->
            <div class="landing_content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="title-slide-in" data-splitting><?php echo $navber_assoc['content1']; ?></h5>
                            <h1 class="title-slide-in" data-splitting><?php echo $navber_assoc['content2']; ?></h1>
                            <h4 class="title-slide-in" data-splitting><?php echo $navber_assoc['content3']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end landing content -->
        </div>
        <!-- end home wrapper -->
    </div>
    <!-- end landing wrapper  -->