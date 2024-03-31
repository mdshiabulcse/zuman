<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
$select="SELECT * FROM icon";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1>Menu View</h1>
	<a href="icon_add.php"><button class="btn btn-success">Add Social Icon</button></a>
</div><br>
<div>
	<table class="table ">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Icon</td>
			<td>Link</td>
			
			<td>ACTION</td>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			<td class=""><?php echo $value['name']; ?></td>
			<td ><ul class="social_links">
				<li class="<?php echo $value['icon']; ?>"></li>
			</ul></td>
			<td class=""><?php echo $value['link']; ?></td>
			
			 <td><a href="icon_edit.php?id=<?php echo $value['id']; ?>"><button class="btn btn-success">Edit</button></a></td>
			  <td><a href="icon_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
			
		
		</tr>
		<?php } ?>
	</table>
</div>
<?php

require_once'dashboard/footer.php';

?>