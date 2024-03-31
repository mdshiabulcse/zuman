<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-12">
	<h1>Add Logo</h1>
	<form action="logo_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12">
		<label>LOGO</label>
		<input type="file" name="logo" class="form-control">
	</div><br>
	<div class="col-lg-12">
		<label>STATUS</label><br>
		<select name="status">
			<option value="1">Active</option>
			<option value="0">deactive</option>
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">submit</button>
	</div>
	</form>

</div>

 <?php 
require_once "dashboard/footer.php";
 ?>