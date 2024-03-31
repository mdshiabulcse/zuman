<?php  
require_once "dashboard/header.php";
 ?>
 
<?php
require 'db.php';
$user_id=$_GET['id'];
$select="SELECT * FROM menu WHERE id=$user_id";
$result=mysqli_query($db_connection,$select);
$assoc=mysqli_fetch_assoc($result);






?>



<div class="col-lg-10 " >
	<h1 class="text-center">Edit Menu</h1>
	<form action="menuedit_post.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" class="form-control" value="<?php echo $assoc['id']; ?>">
		<div class="col-lg-10">
			<label>MENU 1</label>
			<input type="text" name="menu1" class="form-control" value="<?php echo $assoc['menu1']; ?>">
		</div>
		<div class="col-lg-10">
			<label>MENU 2</label>
			<input type="text" name="menu2" class="form-control" value="<?php echo $assoc['menu2']; ?>">
		</div>
		<div class="col-lg-10">
			<label>MENU 3</label>
			<input type="text" name="menu3" class="form-control" value="<?php echo $assoc['menu3']; ?>">
		</div>
		<div class="col-lg-10">
			<label>MENU 4</label>
			<input type="text" name="menu4" class="form-control" value="<?php echo $assoc['menu4']; ?>">
		</div>
		<div class="col-lg-10">
			<label>MENU 5</label>
			<input type="text" name="menu5" class="form-control" value="<?php echo $assoc['menu5']; ?>">
		</div>
		<div class="col-lg-10">
			<label>MENU 6</label><br>
			<input type="text" name="menu6" class="form-control" value="<?php echo $assoc['menu6']; ?>">
		</div><br>
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>