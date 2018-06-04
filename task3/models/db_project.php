<?php 
	require_once "db_helper.php";

	final class db_project extends db_helper{
		function check_email_count($email){
			return self::select("count(*) as cnt","client","us_email='$email'");
		}

		function insert_data($name,$email,$mobile,$password){

			return parent::insert("client","us_name,us_email,us_mobile,us_password","'$name','$email','$mobile','$password'");
		}

		function get_user_data($email){
			return parent::select("*","client","us_email='$email'");
		}
		function get_userwise_pass($email){
			return parent::select("us_password","client","us_email='$email'");
		}
		function update_password($pass,$email){
			return $this->update("client","us_password='$pass'","us_email='$email'");
		}
		function check_group_count($grp){
			return self::select("count(*) as cnt","groups","grp_name='$grp'");
		}
		function group_insert($grp){
			return parent::insert("groups","grp_name","'$grp'");
		}
		function check_library_count($grp){
			return self::select("count(*) as cnt","library","lib_name='$grp'");
		}
		function library_insert($grp){
			return parent::insert("library","lib_name","'$grp'");
		}
		function show_grp(){
			return parent::select("*","groups","1");
		}
		function show_lib(){
			return parent::select("*","library","1");
		}
	}

	$obj= new db_project();

?>