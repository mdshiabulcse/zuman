<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
$select="SELECT * FROM about_content";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1>Menu View</h1>
	<a href="about_content_add.php"><button class="btn btn-success">Add Menu</button></a>
</div><br>
<div>
	<table class="table ">
		<tr>
			<td>ID</td>
			<td>About Title</td>
			<td>About Discription</td>
			
			<td>ACTION</td>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			
			<td><?php echo $value['title']; ?></td>
			<td><?php echo $value['discrip']; ?></td>
			 <td><a href="about_content_edit.php?id=<?php echo $value['id']; ?>"><button class="btn btn-success">Edit</button></a></td>
			 <td><a href="about_content_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
			
		
		</tr>
		<?php } ?>
	</table>
</div>
<?php

require_once'dashboard/footer.php';

?>