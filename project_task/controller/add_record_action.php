<?php 

	require_once "../models/db_project.php";

	//echo "hello";
	if(empty($_POST['firstname'])){
		echo "enter first name";	
	}
	else if(empty($_POST['lastname'])){

		echo "enter last name";
	}
	else{
		"ok";
	}
	



?>