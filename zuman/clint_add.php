<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-12">
	<h1>Add Clints</h1>
	<form action="clintadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12">
		<label>Clints Name</label><br>
		<input type="text" name="text" class="form-control">
		
	</div>
		<div class="col-lg-12">
		<label>Clint Photo</label>
		<input type="file" name="photo" class="form-control">
	</div><br>
	
	<div>
		<button type="submit" class="btn btn-primary">submit</button>
	</div>
	</form>

</div>

 <?php 
require_once "dashboard/footer.php";
 ?>