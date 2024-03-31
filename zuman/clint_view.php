<?php  
require_once "dashboard/header.php";
 ?>

<?php
require 'db.php';

$select="SELECT * FROM clint";
$query=mysqli_query($db_connection,$select);

?>



	<div class="col-lg-12 m-auto">

		
		<h1 class="text-center">Clint View</h1>
		<div class="col-lg-12">
			<a href="clint_add.php"><button class="btn btn-success">Add Clint</button></a>
		</div>
		<div class="col-lg-12">
			<table class="table ">
				<thead  >
					<td>ID</td>
					<td>Name</td>
					<td>Photo</td>
					
					<td>ACTION</td>
				</thead>
				<?php foreach ($query as  $value) {
				 ?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><img src="uploads/clint/<?php echo $value['photo']; ?>" width="50"></td>
					
					
					<td><a href="clint_remove.php?id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-danger">Remove</button></a></td>

				</tr>
			<?php } ?>
			</table>
		</div>

	<div


 <?php 
require_once "dashboard/footer.php";
 ?>