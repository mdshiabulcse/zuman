<?php  
require_once "dashboard/header.php";
 ?>

<?php
require 'db.php';

$select="SELECT * FROM message";
$query=mysqli_query($db_connection,$select);

?>



	<div class="col-lg-12 m-auto">

		
		<h1 class="text-center">Message View</h1>
		
		<div class="col-lg-12">
			<table class="table ">
				<thead  >
					<td>ID</td>
					
					<td>NAME</td>
					<td>EMAIL</td>
					<td>MESSAGE</td>
					<td>ACTION</td>
				</thead>
				<?php foreach ($query as  $value) {
				 ?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['message']; ?></td>
					
					
					
					<td><a href="message_remove.php?id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-danger">Remove</button></a></td>

				</tr>
			<?php } ?>
			</table>
		</div>

	<div


 <?php 
require_once "dashboard/footer.php";
 ?>