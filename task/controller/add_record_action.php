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
		$result=$obj->get_user_data($first,$last);
			// if(is_array($result)){

			// 	if($first!=$result[0]['firstname']){
			// 		echo "user added";
			// 	}
			// 	else{
					
			// 		$_SESSION['project_first']=$result[0]['first'];
			// 		$_SESSION['project_last']=$result[0]['last'];
			// 		//$_SESSION['project_usemail']=$result[0]['us_email'];
			// 		//$_SESSION['project_usmobile']=$result[0]['us_mobile']

					echo "ok";
				
		 }
	
?>