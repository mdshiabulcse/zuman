<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10">
	<h1 class="text-center">Add Social Icon</h1>
	<form action="iconadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
		<label>Name</label>
		<input type="text" name="fname" class="form-control">
	</div>
	<div class="col-lg-10">
		<label>Icon</label>
		<input type="text" name="icon" class="form-control">
	</div>
	<div class="col-lg-10">
		<label>Icon Link</label>
		<input type="text" name="link" class="form-control">
		<br>
	</div>
	
	
	<div class="text-center col-lg-10">

		<button type="submit" class="btn btn-primary ">submit</button>
	</div>
	</form>

</div>

 <?php 
require_once "dashboard/footer.php";
 ?>