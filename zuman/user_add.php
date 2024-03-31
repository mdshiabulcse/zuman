

<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Admin Register</h1>
	<form action="useradd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>Name</label>
			<input type="text" name="fname" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>User Name</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Password</label>
			<input type="text" name="password" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Select</label><br>
			<select name="role">
				<option value="1">Admin</option>
				<option value="0">Editor</option>
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