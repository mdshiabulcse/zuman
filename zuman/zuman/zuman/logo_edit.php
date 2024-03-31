<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
 $user_id=$_GET['id'];
 $select_query= "SELECT * FROM logo WHERE id=$user_id";
 $db_return= mysqli_query($db_connection,$select_query);
 $after_assoc= mysqli_fetch_assoc($db_return);


?>


<div class="col-lg-12">
	<div class="col-lg-12">
		<h1>EDIT STATUS</h1>
	</div>
	<div class="col-lg-12">
		<form action="logoedit_post.php" method="POST" enctype="multipart/form-data">
			<div class="col-lg-12">
				<input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>">
				 
			</div>
			<div class="col-lg-12 ">
			
			<select name="status" class="form-control">
				<option value="1">Active</option>
				<option value="0">Deactive</option>
				
			</select>
			<br>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</div>



<?php

require_once'dashboard/footer.php';

?>