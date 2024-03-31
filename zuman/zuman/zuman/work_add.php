<?php  
require_once "dashboard/header.php";
 ?>

<div class="col-lg-10 " >
	<h1 class="text-center">Add Work</h1>
	<form action="workadd_post.php" method="POST" enctype="multipart/form-data">
		<div class="col-lg-10">
			<label>Work Title</label>
			<input type="text" name="text1" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Content</label>
			<input type="text" name="text2" class="form-control">
		</div>
		
		
		<div class="col-lg-10">
			<label>PHOTO 1</label>
			<input type="file" name="photo1" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Title</label>
			<input type="text" name="text3" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Content</label>
			<input type="text" name="text4" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>PHOTO 2</label>
			<input type="file" name="photo2" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Title</label>
			<input type="text" name="text5" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Content</label>
			<input type="text" name="text6" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>PHOTO 3</label>
			<input type="file" name="photo3" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Title</label>
			<input type="text" name="text7" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Content</label>
			<input type="text" name="text8" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>PHOTO 4</label>
			<input type="file" name="photo4" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Title</label>
			<input type="text" name="text9" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Content</label>
			<input type="text" name="text10" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>PHOTO 5</label>
			<input type="file" name="photo5" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Title</label>
			<input type="text" name="text11" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>Work Content</label>
			<input type="text" name="text12" class="form-control">
		</div>
		<div class="col-lg-10">
			<label>PHOTO 6</label>
			<input type="file" name="photo6" class="form-control">
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