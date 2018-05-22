<?php 
	require_once "db_helper.php";
	final class db_project extends db_helper{
		
		function check_data($first){
			
			return parent::select("*","record","first='$first'");
		}
		function user_insert($first,$last){

		 	return db_helper::insert(
		 		"record","first,last","'$first','$last'");
		 }	
		 function show_record(){
		 	return parent::select("*","record","1");
		 }
		 function delete_records($data){
		 	//delete from brands where id=3;
		 return parent::delete("record","id='$data'");
		 }
	} 

	$obj= new db_project();
?>