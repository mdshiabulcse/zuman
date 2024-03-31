<?php

require_once'dashboard/header.php';

?>
<?php
require 'db.php';
$select="SELECT * FROM work";
$result=mysqli_query($db_connection,$select);






?>


<div class="col-lg-12">

	<h1 class="text-center">Recent Work View</h1>
	<a href="work_add.php"><button class="btn btn-success">Add Menu</button></a>
</div><br>
<div>
	<table class="table ">
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Work Content</td>
			<td>Photo 1</td>
			<td>Title</td>
			<td>Work Content</td>
			<td>Photo 2 </td>
			<td>Title</td>
			<td>Work Content</td>
			<td>Photo 3</td>
			<td>Title</td>
			<td>Work Content</td>
			<td>Photo 4 </td>
			<td>Title</td>
			<td>Work Content</td>
			<td>Photo 5</td>
			<td>Title</td>
			<td>Work Content</td>
			<td>Photo 6 </td>
			
			<td>Status </td>
			
			
			<td>ACTION</td>
		</tr>
		<tr>
			<?php
			foreach ($result as  $value) {
			
			
			?>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['title1']; ?></td>
			<td><?php echo $value['content1']; ?></td>
			<td><img src="uploads/work/<?php echo $value['photo1'] ?>" width="50"></td>
			<td><?php echo $value['title2']; ?></td>
			<td><?php echo $value['content2']; ?></td>
			<td><img src="uploads/work/<?php echo $value['photo2'] ?>" width="50"></td>
			<td><?php echo $value['title3']; ?></td>
			<td><?php echo $value['content3']; ?></td>
			<td><img src="uploads/work/<?php echo $value['photo3'] ?>" width="50"></td>
			<td><?php echo $value['title4']; ?></td>
			<td><?php echo $value['content4']; ?></td>
			<td><img src="uploads/work/<?php echo $value['photo4'] ?>" width="50"></td>
			<td><?php echo $value['title5']; ?></td>
			<td><?php echo $value['content5']; ?></td>
			<td><img src="uploads/work/<?php echo $value['photo5'] ?>" width="50"></td>
			<td><?php echo $value['title6']; ?></td>
			<td><?php echo $value['content6']; ?></td>
			<td><img src="uploads/work/<?php echo $value['photo6'] ?>" width="50"></td>

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