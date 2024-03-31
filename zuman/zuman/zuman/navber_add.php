<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Add Navber</h1>
	<form action="navberadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>CONTENT 1</label>
			<input type="text" name="text1" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>CONTENT 2</label>
			<input type="text" name="text2" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>CONTENT 3</label>
			<input type="text" name="text3" class="form-control">
		</div>
		
		<div class="col-lg-10">
			<label>PHOTO</label>
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