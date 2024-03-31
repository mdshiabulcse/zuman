<?php

require_once'dashboard/header.php';

?>

<?php
require 'db.php';
$select_query= "SELECT * FROM navber ";
 $return_db= mysqli_query($db_connection,$select_query);


?>

<div class="col-lg-12">
	<h1>NAVBER VIEW</h1>
	<div class="col-lg-12">
		<a href="navber_add.php"><button class="btn btn-success">Add Navber</button></a>
	</div>
	<table class="table table-bordered">
		<thead>
			<td>ID</td>
			
			<td>CONTENT 1</td>
			<td>CONTENT 2</td>
			<td>CONTENT 3</td>
			
			<td>Photo</td>
			<td>STATUS</td>
			
			<td>ACTION</td>
		</thead>
		<?php
		foreach ($return_db as  $value) {
			
		
		?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['content1']; ?></td>
			<td><?php echo $value['content2']; ?></td>
			<td><?php echo $value['content3']; ?></td>
			
			
			<td><img src="uploads/navber/<?php echo $value['photo']; ?>" width="100"></td>
			<td><?php if ($value['status']==1) {
				echo "Active";
			}
			else{
				echo "Deactive";
			} ?></td>
			<td><a href="navber_edit.php?id=<?php echo $value['id'];?>"><button class="btn btn-success">Edit</button></a></td>
			<td><a href="navber_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
		</tr>
	<?php } ?>
	</table>
</div>

<?php

require_once'dashboard/footer.php';

?>