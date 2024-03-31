<?php  
require_once "dashboard/header.php";
 ?>

<?php
require 'db.php';

$select="SELECT * FROM testimonial";
$query=mysqli_query($db_connection,$select);

?>



	<div class="col-lg-12 m-auto">

		
		<h1 class="text-center">Testimonial View</h1>
		<div class="col-lg-12">
			<a href="tes_add.php"><button class="btn btn-success">Add Testimonial</button></a>
		</div>
		<div class="col-lg-12">
			<table class="table ">
				<thead  >
					<td>ID</td>
					<td>Profile</td>
					<td>Name</td>
					<td>Title</td>
					<td>About</td>
					<td>Action</td>
				</thead>
				<?php foreach ($query as  $value) {
				 ?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><img src="uploads/testimonial/<?php echo $value['photo']; ?>" width="50"></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['title']; ?></td>
					<td><?php echo $value['about']; ?></td>
					
					
					
					<td><a href="tes_remove.php?id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-danger">Remove</button></a></td>

				</tr>
			<?php } ?>
			</table>
		</div>

	<div


 <?php 
require_once "dashboard/footer.php";
 ?>