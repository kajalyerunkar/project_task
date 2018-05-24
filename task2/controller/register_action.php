<?php 
	require_once "../models/db_project.php";
	//echo "hello";

	if(!preg_match("/^[A-Za-z][A-Za-z ]+[A-Za-z]$/", $_POST['username'])){
		echo "invalid name";
	}
	else if(!preg_match("/^([A-Za-z0-9][a-zA-z0-9_\.]+[A-Za-z0-9])@([a-zA-z0-9][a-zA-z0-9\-]+[a-zA-z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/", $_POST['useremail']))
	{
		echo "invalid emailid";
	}
	else if(!preg_match("/^([0]?[1-9]|[1][0-9]|[2][0-9]|[3][0-1])\-([0]?[1-9]|[1][0-2])\-([0-9]{4})$/", $_POST['userdob']))
	{
		echo "invalid date of birth";
	}
	else if(!preg_match("/^(?=.*[a-z])(?=.*[A-z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/", $_POST['userpassword']))
	{
		echo "invalid password";
	}
	else if($_POST['userpassword']!=$_POST['usercpassword'])
	{
		echo "invalid confirm password";
	}
	else{
		//echo "ok";
		$name=$_POST['username'];
		$email=$_POST['useremail'];
		$dob=$_POST['userdob'];
		$password=sha1($_POST['userpassword']);
	
		//echo $password;

		//check user exist or not
		$result=$obj->check_email_count($email);
		//pre($result);


		if($result[0]['cnt']>0){
			echo "emailid Already exist";
		}
		else{

			if($obj->user_insert($name,$email,$dob,$password)){
				echo "user added";
			}
		}	

	}

?>
 
