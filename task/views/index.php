<?php 
	require_once "../models/db_project.php";

?>
<div class="container">
	<form id="main_form">
	<label>FIRST NAME</label>
	<input type="text" name="firstname" placeholder="Enter first name">
	<br>
	<label> LAST NAME</label>
	<input type="text" name="lastname" placeholder="Enter last name">
	<br>
	<button type="button" class="btn">enter</button>
	<div class="msg_form"></div>
	</form>
	<a href="show_record.php">Show records</a>
</div>
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.scrollUp.min.js"></script>
    <script src="../assets/js/form.js"></script>
