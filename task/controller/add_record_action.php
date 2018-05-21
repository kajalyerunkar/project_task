<?php 
	session_start();
	require_once "../models/db_project.php";

	//echo "hello";
	if(empty($_POST['firstname'])){
		echo "enter first name";	
	}
	else if(empty($_POST['lastname']))
	{
		echo "enter last name";
	}
	else{

		$first=($_POST['firstname']);
		$last=($_POST['lastname']);
		//echo "$first";
		$result=$obj->check_data($first);
		
		if($result[0]['cnt']>0){
			echo "name already eists";
		}
		else{

			if($obj->user_insert($first,$last)){
				echo "successfully added";
			}
		}
			
		 }
?>