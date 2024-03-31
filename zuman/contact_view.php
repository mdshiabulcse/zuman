<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
$select="SELECT * FROM contact";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1>Contact View</h1>
	<a href="contact_add.php"><button class="btn btn-success">Add Contact</button></a>
</div><br>
<div>
	<table class="table ">
		<tr >
			<td>Id</td>
			<td>Phone 1</td>
			<td>Email</td>
			
			<td>Status</td>
			<td>ACTION</td>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			
			<td><?php echo $value['phone']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php if ($value['status']==1) {
				echo "Active";
			} 
			else{
				echo "Deactive";
			}  ?></td>
			 <td><a href="contact_edit.php?id=<?php echo $value['id']; ?>"><button class="btn btn-success">Edit</button></a></td>
			<td><a href="contact_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
			
		
		</tr>
		<?php } ?>
	</table>
</div>
<?php

require_once'dashboard/footer.php';

?>