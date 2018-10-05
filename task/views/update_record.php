<?php 
	require_once "../models/db_project.php";

	$id=$_GET['ab'];
	// echo "$id";
?>
<div class="container">
	<?php
	
	$data = $obj->get_data($id);
	// print_r($data);
	foreach ($data as $val):
	?>
	<form id="update_form">
	<label>FIRST NAME</label>
	
	<input type="text" name="nfirstname" value="<?php echo $val['first'];?>" placeholder="Enter first name">
	<br>
	<label> LAST NAME</label>
	<input type="text" name="nlastname" value="<?php echo $val['last'];?>" placeholder="Enter last name">
	<br>
	<button type="button" for="<?php echo $val['id'];?>" class="btn-update">update</button>
	<div class="msg_form"></div>
	</form>
	
	<?php 

	endforeach;
	 ?>

	<!-- <a href="show_record.php">Show records</a> -->
</div>
<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.scrollUp.min.js"></script>
    <script src="../assets/js/form.js"></script>

