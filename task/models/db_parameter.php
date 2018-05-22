<?php 
	require_once "db_function.php";
	interface db_parameter{
		const HOSTNAME ="localhost";
		const PASSWORD = "";
		const USER = "root";
		const DATABASE = "task";
	}
	interface db_general_function{
		function insert($table,$columns,$values);
		function update($table,$record,$condition);
		function delete($table,$condition);
		function select($col,$tab,$condition);
	}

?>