<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
$select="SELECT * FROM menu";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1>Menu View</h1>
	<a href="menu_add.php"><button class="btn btn-success">Add Menu</button></a>
</div><br>
<div>
	<table class="table table-bordered">
		<tr>
			<td>ID</td>
			<td>MENU 1</td>
			<td>MENU 2</td>
			<td>MENU 3</td>
			<td>MENU 4</td>
			<td>MENU 5</td>
			<td>MENU 6</td>
			<td>ACTION</td>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['menu1']; ?></td>
			<td><?php echo $value['menu2']; ?></td>
			<td><?php echo $value['menu3']; ?></td>
			<td><?php echo $value['menu4']; ?></td>
			<td><?php echo $value['menu5']; ?></td>
			<td><?php echo $value['menu6']; ?></td>
			 <td><a href="menu_edit.php?id=<?php echo $value['id']; ?>"><button class="btn btn-success">Edit</button></a></td>
			
		
		</tr>
		<?php } ?>
	</table>
</div>
<?php

require_once'dashboard/footer.php';

?>