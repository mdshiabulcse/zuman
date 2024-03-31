<?php  
require_once "dashboard/header.php";
 ?>
 
<?php
require 'db.php';
$user_id=$_GET['id'];
$about_select="SELECT * FROM about_content WHERE id=$user_id";
$about_query=mysqli_query($db_connection,$about_select);
$assoc_after=mysqli_fetch_assoc($about_query);






?>



<div class="col-lg-10 " >
	<h1 class="text-center">Edit About Content</h1>
	<form action="about_contentedit_post.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" class="form-control" value="<?php echo $assoc_after['id']; ?>">
		
		<div class="col-lg-10">
			<label>About Title</label>
						<textarea class="form-control" name="discription"><?php echo $assoc_after['title']; ?></textarea>
		</div>
		<div class="col-lg-10">
			<label>About Discription</label><br>
			<textarea class="form-control" name="discription"><?php echo $assoc_after['discrip']; ?></textarea>
		</div><br>
		<div class="col-lg-10 text-center">
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>