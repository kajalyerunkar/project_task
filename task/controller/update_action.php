<?php 
	require_once '../models/db_project.php';
	// echo "hello";
	print_r($_POST);

	$name  = $_POST['nfirstname'];
	$last  = $_POST['nlastname'];
	$id = $_POST['u_id'];

	$result= $obj->update("record","first='$name',last='$last'", "id='$id'");
		if($result){
			echo "ok";
		}

?>