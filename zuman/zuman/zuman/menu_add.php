
<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Add Menu</h1>
	<form action="menuadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>MENU 1</label>
			<input type="text" name="menu1" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>MENU 2</label>
			<input type="text" name="menu2" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>MENU 3</label>
			<input type="text" name="menu3" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>MENU 4</label>
			<input type="text" name="menu4" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>MENU 5</label>
			<input type="text" name="menu5" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>MENU 6</label><br>
			<input type="text" name="menu6" class="form-control">
		</div><br>
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>