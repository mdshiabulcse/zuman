<?php
session_start();
require 'db.php';

if ($_SESSION['shakib']) {
	
}
else{
	header("location:admin_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="dashboardasset/css/bootstrap.min.css" rel="stylesheet">
	<link href="dashboardasset/css/font-awesome.min.css" rel="stylesheet">
	<link href="dashboardasset/css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="dashboardasset/css/font.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

		<?php  
		$explode=explode('/', $_SERVER['PHP_SELF']);
		$current_page=end($explode);



		?>


		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="uploads/admin/<?php echo $_SESSION['photo']; ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['name']; ?></div>
				<div class="profile-usertitle-status"><?php if ($_SESSION['role']==1) {
					echo "Admin";
				}
				else{
					echo "Editor";
				}

				 ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="<?php echo($current_page=="dashboard.php")? 'active' : '' ?>"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?php echo($current_page=="user_view.php")? 'active' : '' ?>"><a href="user_view.php"><em class="fa fa-calendar">&nbsp;</em> User View</a></li>
			<li class="<?php echo($current_page=="logo.php")? 'active' : '' ?>"><a href="logo.php"><em class="fa fa-bar-chart">&nbsp;</em> Logo</a></li>
			<li class="<?php echo($current_page=="menu_view.php")? 'active' : '' ?>"><a href="menu_view.php"><em class="fa fa-toggle-off">&nbsp;</em> Menu</a></li>
			<li class="<?php echo($current_page=="navber_view.php")? 'active' : '' ?>"><a href="navber_view.php"><em class="fa fa-clone">&nbsp;</em> Navber</a></li>
			<li class="<?php echo($current_page=="about_photo_view.php")? 'active' : '' ?>"><a href="about_photo_view.php"><em class="fa fa-clone">&nbsp;</em> About Photo</a></li>
			<li class="<?php echo($current_page=="about_content_view.php")? 'active' : '' ?>"><a href="about_content_view.php"><em class="fa fa-clone">&nbsp;</em> About Content</a></li>
			<li class="<?php echo($current_page=="service_view.php")? 'active' : '' ?>"><a href="service_view.php"><em class="fa fa-clone">&nbsp;</em> Service</a></li>
			<li class="<?php echo($current_page=="work_view.php")? 'active' : '' ?>"><a href="work_view.php"><em class="fa fa-clone">&nbsp;</em>Recent Work</a></li>
			<li class="<?php echo($current_page=="count_view.php")? 'active' : '' ?>"><a href="count_view.php"><em class="fa fa-clone">&nbsp;</em>Counter</a></li>
			<li class="<?php echo($current_page=="tes_view.php")? 'active' : '' ?>"><a href="tes_view.php"><em class="fa fa-clone">&nbsp;</em>Testimonial</a></li>
			<li class="<?php echo($current_page=="clint_view.php")? 'active' : '' ?>"><a href="clint_view.php"><em class="fa fa-clone">&nbsp;</em>Clint</a></li>
			<li class="<?php echo($current_page=="contact_view.php")? 'active' : '' ?>"><a href="contact_view.php"><em class="fa fa-clone">&nbsp;</em>Contact</a></li>
			<li <?php echo($current_page=="message_view.php")? 'active' : '' ?>"><a href="message_view.php"><em class="fa fa-clone">&nbsp;</em>Message</a></li>
			<li class="<?php echo($current_page=="icon_view.php")? 'active' : '' ?>"><a href="icon_view.php"><em class="fa fa-clone">&nbsp;</em>Social Icon</a></li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="session_destroy.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-md-12">