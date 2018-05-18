<?php
	session_start();
	require_once "../models/db_project.php";
	//print_r("record");
	//$_POST("records");
?>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<div class="container">

	<a href="index.php">Add record</a>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>DELETE</th>
		</tr>
		<?php 
			while($ans=$result->fetch_array(MYSQLI_ASSOC)){
				//$id=$ans['id'];
				//$obj=show_record($show);
				//pre($obj);
			}
		?>
	</table>
</div>