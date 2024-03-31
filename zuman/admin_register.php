<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <!-- All CSS -->
    <link href="img/favicon.png" type="image/png" rel="icon">

    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="css/mobiriseicons.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/splitting.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body>





<div class="col-lg-10" >
	<h1 class="text-center">Add User</h1>
	<form action="adminre_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>Name</label>
			<input type="text" name="fname" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>User Name</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Password</label>
			<input type="text" name="password" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Select</label><br>
			<select name="role">
				<option value="1">Admin</option>
				<option value="0">Editor</option>
			</select>
		</div><br>
		<div class="col-lg-10">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		<div class="col-lg-10">
			<h4>You have already <a href="admin_login.php">account</a></h4>
		</div>
	</form>
</div>






<!-- ========  All JS Here ========  -->
     <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>