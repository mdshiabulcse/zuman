<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Add Counting</h1>
	<form action="countadd_post.php" method="POST" enctype="multipart/form-data">
		
		<div class="col-lg-10">
			<label>Icon 1</label>
			<input type="text" name="text1" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Title 1</label>
			<input type="text" name="text2" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Count 1</label>
			<input type="text" name="text3" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Icon 2</label>
			<input type="text" name="text4" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Title 2</label>
			<input type="text" name="text5" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>count 2</label>
			<input type="text" name="text6" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Icon 3</label>
			<input type="text" name="text7" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Title 3</label>
			<input type="text" name="text8" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Count 3</label>
			<input type="text" name="text9" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Icon 4</label>
			<input type="text" name="text10" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Title 4</label>
			<input type="text" name="text11" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Count 4</label>
			<input type="text" name="text12" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>STATUS</label><br>
			<select name="status" class="form-control">
				<option value="1">Active</option>
				<option value="0">Deactive</option>
			</select>
		</div><br><br>
		<div class="col-lg-10 text-center">
			<br>
			<button type="submit" class="btn btn-primary ">Submit</button>
		</div>
		
	</form>
</div>

 <?php 
require_once "dashboard/footer.php";
 ?>