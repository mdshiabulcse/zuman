<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Add Tetimonial</h1>
	<form action="tesadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>Name</label>
			<input type="text" name="text1" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Title</label>
			<input type="text" name="text2" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>About</label>
			<textarea class="form-control" name="text3"></textarea>
		</div>
		
		<div class="col-lg-10">
			<label>Profile</label>
			<input type="file" name="photo" class="form-control">
		</div>
		
		
		<div class="col-lg-10 text-center">
			<br>
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>