
<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Service Add</h1>
	<form action="serviceadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>Service </label>
			<input type="text" name="service" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Design</label>
			<input type="text" name="service1" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Design Content</label>
			<input type="text" name="service2" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Development</label>
			<input type="text" name="service3" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Development Content</label>
			<input type="text" name="service4" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Graphics </label>
			<input type="text" name="service5" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Graphics Content</label>
			<input type="text" name="service6" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Branding </label>
			<input type="text" name="service7" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Branding Content</label>
			<input type="text" name="service8" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Photography </label>
			<input type="text" name="service9" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Photography Content</label>
			<input type="text" name="service10" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Support </label>
			<input type="text" name="service11" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Support Content</label><br>
			<input type="text" name="service12" class="form-control">
		</div><br>
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>