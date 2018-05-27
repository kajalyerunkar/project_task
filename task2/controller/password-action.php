<?php 
	session_start();
	if(!isset($_SESSION['project_usname'])){

		header("location:../views/index.php");

	}
	require_once "../models/db_project.php";

	//pre($_POST);
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
			echo "ok";
			//print_r($_SESSION);
			//echo $_SESSION['project_usemail'];
			$dbpass=$obj->get_password_userwise($_SESSION['project_usemail']);
			//pre($dbpass);
			//pre(sha1($_POST['cpass']));
			if(sha1($_POST['cpass'])== $dbpass[0]['us_password'])
			{
				$newpass = sha1($_POST['npass']);
				//print_r($newpass);
				$email = $_SESSION['project_usemail'];
				//print_r($email);

			$fans=$obj->update_password($newpass,$email);
		 	//var_dump($fans);
			// 	pre($_SESSION['project_usmobile']);
			// 	$num=$_SESSION['project_usmobile'];
					// Emails and sms
			}
			else{
					echo "current password mismatch";
				
				}
			}

?>