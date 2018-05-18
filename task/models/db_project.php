<?php 
	require_once "db_helper.php";
	final class db_project extends db_helper{
		
		function get_user_data($first,$last){
			return parent::insert("record","first,last","'$first','$last'");
		}
		function get_first_name($email){

			return db_helper::select(
				"first","record","1");
		}
		
	} 
	$obj=new db_project();
?>