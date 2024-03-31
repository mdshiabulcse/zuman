<?php

require_once'dashboard/header.php';

?>

<?php
require 'db.php';
$select_query= "SELECT * FROM about_photo ";
 $return_db= mysqli_query($db_connection,$select_query);


?>

<div class="col-lg-12">
	<h1>ABOUT PHOTO VIEW</h1>
	<div class="col-lg-12">
		<a href="about_photo_add.php"><button class="btn btn-success">Add Navber</button></a>
	</div>
	<table class="table ">
		<thead>
			<td>ID</td>
			
			<td>PHOTO</td>
			
			<td>STATUS</td>
			
			<td>ACTION</td>
		</thead>
		<?php
		foreach ($return_db as  $value) {
			
		
		?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			
			
			
			
			<td><img src="uploads/about_photo/<?php echo $value['photo']; ?>" width="50"></td>
			<td><?php if ($value['status']==1) {
				echo "Active";
			}
			else{
				echo "Deactive";
			} ?></td>
			<td><a href="about_photo_edit.php?id=<?php echo $value['id'];?>"><button class="btn btn-success">Edit</button></a></td>
			<td><a href="about_photo_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
		</tr>
	<?php } ?>
	</table>
</div>

<?php

require_once'dashboard/footer.php';

?>