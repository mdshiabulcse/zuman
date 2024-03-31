<?php  
require_once "dashboard/header.php";
 ?>
 
<?php
require 'db.php';
$user_id=$_GET['id'];
$select="SELECT * FROM icon WHERE id=$user_id";
$result=mysqli_query($db_connection,$select);
$assoc=mysqli_fetch_assoc($result);






?>



<div class="col-lg-10 " >
	<h1 class="text-center">Social Icon Edit </h1>
	<form action="iconedit_post.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" class="form-control" value="<?php echo $assoc['id']; ?>">
		<div class="col-lg-10">
			<label>Name</label>
			<input type="text" name="fname" class="form-control" value="<?php echo $assoc['name']; ?>">
		</div>
		<div class="col-lg-10">
			<label>Icon</label>
			<input type="text" name="icon" class="form-control" value="<?php echo $assoc['icon']; ?>">
		</div>
		<div class="col-lg-10">
			<label>Link</label>
			<input type="text" name="link" class="form-control" value="<?php echo $assoc['link']; ?>">
		</div>
		
		
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>