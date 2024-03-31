<?php  
require_once "dashboard/header.php";
 ?>

 <?php
require 'db.php';

$user_id=$_GET['id'];

$select="SELECT * FROM navber WHERE id=$user_id";
$query=mysqli_query($db_connection,$select);
$navber_assoc=mysqli_fetch_assoc($query);


 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Edit Navber</h1>
	<form action="navberedit_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<input type="hidden" name="id" class="form-control" value="<?php echo $navber_assoc['id']; ?>">
			<label>CONTENT 1</label>
			<input type="text" name="text1" class="form-control" value="<?php echo $navber_assoc['content1']; ?>">
		</div>
		<div class="col-lg-10">
			<label>CONTENT 2</label> 
			<input type="text" name="text2" class="form-control" value="<?php echo $navber_assoc['content2']; ?>">
		</div>
		<div class="col-lg-10">
			<label>CONTENT 3</label>
			<input type="text" name="text3" class="form-control" value="<?php echo $navber_assoc['content3']; ?>">
		</div>
		
		<div class="col-lg-10">
			<label>PHOTO</label>
			<input type="file" name="photo" class="form-control">
		</div>
		<div class="col-lg-10">
			<br>
			<img src="uploads/navber/<?php echo $navber_assoc['photo']; ?>" width="100">
		</div>
		<div class="col-lg-10"><br>
			<label>STATUS</label><br>
			<select name="status" class="form-control">
				<option value="1">Active</option>
				<option value="0">Deactive</option>
			</select>
		</div><br><br>
		<div class="col-lg-10 text-center">
			<br>
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>