<?php 
	require_once "db_helper.php";

	final class db_project extends db_helper{

		function check_email_count($email){

			return self::select(
			"count(*) as cnt","userinfo","us_email='$email'");
		}

		function user_insert($name,$email,$dob,$password){

			return parent::insert(
				"userinfo",
				"us_name,us_email,us_dob,us_password",
				"'$name','$email','$dob','$password'"
			);
		}
	}

	$obj= new db_project();

?>