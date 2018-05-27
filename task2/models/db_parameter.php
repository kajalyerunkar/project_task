<?php 

	
	if(session_id()== ""){
		session_start();
		//echo session_id();
	}
	require_once "db_function.php";
	interface db_parameter{

		const HOSTNAME="localhost";
		const USER="root";
		const PASSWORD = "";
		const DATABASE = "task2";
	}


	interface db_general_function{

		function insert($table,$columns,$values);
		function select($col,$tab,$condition);
		function delete();
		function update($table,$record,$condition);

	}

?>