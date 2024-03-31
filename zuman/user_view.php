<?php

require_once'dashboard/header.php';


?>
<?php
require 'db.php';
$select="SELECT * FROM admin";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1>User View</h1>
	<?php if ($_SESSION['role']==1) {
				
			 ?>
	<a href="user_add.php"><button class="btn btn-primary">Add User</button></a>
<?php } ?>
</div><br>
<div>
	<table class="table table-bordered">
		<tr>
			<td>ID</td>
			<td>PHOTO</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ROLE</td>
			<?php if ($_SESSION['role']==1) {
				
			 ?>
			<td>ACTION</td>
		<?php } ?>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			<td><img src="uploads/admin/<?php echo $value['photo']; ?>" width="50" ></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php if ( $value['role']==1) {
				echo "Admin";
			}
			else{
				echo "Editor";
			} ?></td>

			<?php if ($_SESSION['role']==1) {
				
			 ?>

			 <td><a href="user_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
			
		<?php } ?>
		</tr>
		<?php } ?>
	</table>
</div>
<?php

require_once'dashboard/footer.php';

?>