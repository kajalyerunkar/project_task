<?php 
	require_once "db_function.php";
	if(session_id()==""){
		session_start();
		//echo session_id();
	}
	
	interface db_parameter{
		const HOSTNAME = "localhost";
	 	const  USER= "root";
	 	const  PASSWORD= "";
	 	const DATABASE = "task3";
	}

	interface db_general_function{

	function insert($table,$columns,$values);
 	function update($table,$record,$condition);
 	function delete();
 	function select($col,$table,$condition);
	 
	 }

?>