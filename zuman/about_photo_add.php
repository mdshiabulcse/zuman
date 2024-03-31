<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Add About Photo</h1>
	<form action="about_photoadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>PHOTO 1</label>
			<input type="file" name="photo" class="form-control">
		</div>
		
		
		<div class="col-lg-10">
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