
<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">About Content Add</h1>
	<form action="about_contentdd_post.php" method="POST" enctype="multipart/form-data">
		
		<div class="col-lg-10">
			<label>About Title</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>About Discription</label><br>
			<input type="text" name="discription" class="form-control">
		</div><br>
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>