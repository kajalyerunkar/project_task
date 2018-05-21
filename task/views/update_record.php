<?php 
	require_once "../models/db_project.php";

	$id=$_GET['ab'];
	//echo "$id";
?>
<div class="container">
	<form id="update_form">
	<label>FIRST NAME</label>
	<input type="text" name="nfirstname" placeholder="Enter first name">
	<br>
	<label> LAST NAME</label>
	<input type="text" name="nlastname" placeholder="Enter last name">
	<br>
	<button type="button" class="btn-update">update</button>
	<div class="msg_form"></div>
	</form>
	<!-- <a href="show_record.php">Show records</a> -->
</div>