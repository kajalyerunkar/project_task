<?php 
	require_once "db_function.php";
	interface db_parameter{
		const HOSTNAME : "localhost";
		const PASSWORD : "";
		const USER : "root";
		const DATABASE : "";
	}
	interface db_general_function{
		function insert();
		function update();
		function delete();
		function select();
	}

?>