
<?php 
		require_once "../models/db_project.php";
?>


<div class="container">
	<form method="post" action="add_record_action.php">
	<label>FIRST NAME</label>
	<input type="text" name="firstname" placeholder="Enter first name" class="form">
	<br>
	<label> LAST NAME</label>
	<input type="text" name="lastname" placeholder="Enter last name" class="form">
	<br>
	<button class="btn">Enter</button>

	</form>
	<a href="show_record.php">Show records</a>
</div>
