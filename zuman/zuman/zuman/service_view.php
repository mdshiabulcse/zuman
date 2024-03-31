<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
$select="SELECT * FROM service";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1>Menu View</h1>
	<a href="service_add.php"><button class="btn btn-success">Add Menu</button></a>
</div><br>
<div>
	<table class="table ">
		<tr>
			<td>ID</td>
			<td>Service</td>
			<td>Design</td>
			<td>Design Content</td>
			<td>Development </td>
			<td>Development Content</td>
			<td>Graphics </td>
			<td>Graphics Content</td>
			<td>Branding </td>
			<td>Branding Content</td>
			<td>Photography </td>
			<td>Photography Content</td>
			<td>Support </td>
			<td>Support Content</td>
			
			<td>ACTION</td>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['service']; ?></td>
			<td><?php echo $value['service1']; ?></td>
			<td><?php echo $value['service2']; ?></td>
			<td><?php echo $value['service3']; ?></td>
			<td><?php echo $value['service4']; ?></td>
			<td><?php echo $value['service5']; ?></td>
			<td><?php echo $value['service6']; ?></td>
			<td><?php echo $value['service7']; ?></td>
			<td><?php echo $value['service8']; ?></td>
			<td><?php echo $value['service9']; ?></td>
			<td><?php echo $value['service10']; ?></td>
			<td><?php echo $value['service11']; ?></td>
			<td><?php echo $value['service12']; ?></td>
			 <td><a href="service_edit.php?id=<?php echo $value['id']; ?>"><button class="btn btn-success">Edit</button></a></td>
			 <td><a href="service_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
			
		
		</tr>
		<?php } ?>
	</table>
</div>
<?php

require_once'dashboard/footer.php';

?>