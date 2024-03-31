<?php  
require_once "dashboard/header.php";

 ?>

 <?php

require 'db.php';
 $user_id=$_GET['id'];
 $select_query= "SELECT * FROM work WHERE id=$user_id";
 $db_return= mysqli_query($db_connection,$select_query);
 $after_assoc= mysqli_fetch_assoc($db_return);

 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Edit Work Status</h1>
	<form action="workedit_post.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo  $after_assoc['id']; ?>">
		
		<div class="col-lg-10">
		
			<select name="status" class="form-control">
				<option value="1">Active</option>
				<option value="0">Deactive</option>
			</select>
		</div><br><br>
		<div class="col-lg-10 text-center">
			<br>
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>