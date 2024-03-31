<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
$select="SELECT * FROM counter";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1 class="text-center">Counter View</h1>
	<a href="counter_add.php"><button class="btn btn-success">Add Menu</button></a>
</div><br>
<div>
	<table class="table ">
		<tr>
			<td>ID</td>
			<td>Icon</td>
			<td>Title</td>
			<td>Counting</td>
			<td>Icon</td>
			<td>Title</td>
			<td>Counting</td>
			<td>Icon</td>
			<td>Title</td>
			<td>Counting</td>
			<td>Icon</td>
			<td>Title</td>
			<td>Counting</td>
			
			
			<td>Status </td>
			
			
			<td>ACTION</td>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			<td><i class="<?php echo $value['text1']; ?>"></i></td>
			<td><?php echo $value['text2']; ?></td>
			<td><?php echo $value['text3']; ?></td>
			<td><i class="<?php echo $value['text4']; ?>"></i></td>
			<td><?php echo $value['text5']; ?></td>
			<td><?php echo $value['text6']; ?></td>
			<td><i class="<?php echo $value['text7']; ?>"></i></td>
			<td><?php echo $value['text8']; ?></td>
			<td><?php echo $value['text9']; ?></td>
			<td><i class="<?php echo $value['text10']; ?>"></i></td>
			<td><?php echo $value['text11']; ?></td>
			<td><?php echo $value['text12']; ?></td>

			<td><?php if ($value['status']==1) {
				echo "Active";
			}
			else{
				echo "Deactive";
			} ?></td>
			 <td><a href="work_edit.php?id=<?php echo $value['id']; ?>"><button class="btn btn-success">Edit</button></a></td>
			 <td><a href="work_remove.php?id=<?php echo $value['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
			
		
		</tr>
		<?php } ?>
	</table>
</div>
<?php

require_once'dashboard/footer.php';

?>