
<?php  
require_once "dashboard/header.php";
 ?>

<?php
require 'db.php';

$select="SELECT * FROM logo";
$query=mysqli_query($db_connection,$select);

?>



	<div class="col-lg-12 m-auto">

		
		<h1 class="text-center">Logo View</h1>
		<div class="col-lg-12">
			<a href="logo_add.php"><button class="btn btn-success">Add Logo</button></a>
		</div>
		<div class="col-lg-12">
			<table class="table ">
				<thead  >
					<td>ID</td>
					<td>LOGO</td>
					<td>STATUS</td>
					<td>ACTION</td>
				</thead>
				<?php foreach ($query as  $value) {
				 ?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><img src="uploads/logo/<?php echo $value['logo']; ?>" width="50"></td>
					<td><?php 
						if ($value['status']==1) {
							echo "Active";
						}
						else{
							echo "Deactive";
						}
			 ?></td>
					<td><a href="logo_edit.php?id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a></td>
					<td><a href="logo_remove.php?id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-danger">Remove</button></a></td>

				</tr>
			<?php } ?>
			</table>
		</div>

	<div


 <?php 
require_once "dashboard/footer.php";
 ?>