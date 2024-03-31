<?php

require_once'dashboard/header.php';

?>
<?php

 
 require 'db.php';

 $user_id=$_GET['id'];

 $select_query= "SELECT * FROM about_photo WHERE id=$user_id";
 $db_return= mysqli_query($db_connection,$select_query);

 $after_assoc= mysqli_fetch_assoc($db_return);

 
 

 ?>


<div class="col-lg-12">
	<h1 class="text-center">About Photo Edit</h1><br>

	<form action="about_photo_update.php" method="POST" enctype="multipart/form-data">
		
		<div class="col-lg-12">
			<input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>"><br>
			<label>Photo</label>
			<input type="file" name="photo" class="form-control"><br>
		</div>
		
		<div class="col-lg-12">
			
			<img src="uploads/about_photo/<?php echo $after_assoc['photo']; ?>" width="200">
		</div>
		<div class="col-lg-12">
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>


<?php

require_once'dashboard/footer.php';

?>