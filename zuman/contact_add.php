
<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Add Menu</h1>
	<form action="contaadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>Phone</label>
			<input type="text" name="phone" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="col-lg-10">
		<label>STATUS</label><br>
		<select name="status" class="form-control">
			<option value="1">Active</option>
			<option value="0">Deactive</option>
		</select>
		<br>
	</div>
		
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>