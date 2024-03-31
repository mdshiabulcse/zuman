<?php  
require_once "dashboard/header.php";
 ?>
 
<?php
require 'db.php';
$user_id=$_GET['id'];
$select="SELECT * FROM contact WHERE id=$user_id";
$result=mysqli_query($db_connection,$select);
$assoc=mysqli_fetch_assoc($result);






?>



<div class="col-lg-10 " >
	<h1 class="text-center">Contact Edit </h1>
	<form action="contaedit_post.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" class="form-control" value="<?php echo $assoc['id']; ?>">
		<div class="col-lg-10">
			<label>Phone</label>
			<input type="text" name="phone" class="form-control" value="<?php echo $assoc['phone']; ?>">
		</div>
		<div class="col-lg-10">
			<label>Email</label>
			<input type="email" name="email" class="form-control" value="<?php echo $assoc['email']; ?>">
		</div>
		
		<div class="col-lg-10">
			<label>status</label><br>
			<select name="status" class="form-control">
				<option value="1">Active</option>
				<option value="0">Deactive</option>
			</select>
		</div><br>
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>