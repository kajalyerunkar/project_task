<?php 
	
	require_once "../models/db_project.php";
	//print_r($_POST);
	if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-$\_]).{4,12}$/", $_POST['cpass'])){

		echo " invalid current password";
	}
	else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/", $_POST['npass'])){

		echo "invalid new password";
	}

	else if($_POST['npass']!==$_POST['cnpass'])
	{
		echo "confirm password does not match";
	}
	elseif($_POST['npass']==$_POST['cpass']){
		//echo "ok";
		echo "new password should be different";
	}
	else{
			//echo "ok";
			//pre($_SESSION);
		$dbpass = $obj->get_userwise_pass($_SESSION['project_usemail']);
		//pre($dbpass);
		 //pre(sha1($_POST['cpass']));
		if(sha1($_POST['cpass'])==$dbpass[0]['us_password']){
			//echo "ohk";
			$newpass=sha1($_POST['npass']);
			//echo "$newpass";
			$email=$_SESSION['project_usemail'];

			$fans=$obj->update_password($newpass,$email);
		 	//var_dump($fans);

		}
		else{
			echo "current password mismatch";
		}
		}

?>