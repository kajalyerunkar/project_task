<?php 

	require_once "db_parameter.php";

	abstract class db_connect implements db_parameter{
		public $conn="";
		function __construct(){

			$this->conn = new mysqli(self::HOSTNAME,self::USER,self::PASSWORD,self::DATABASE);

			 // echo "<pre>";
			 // print_r($this);
			 // echo "</pre>";
		}

		function __destruct(){

			$result=$this->conn->close();
			//var_dump($result);
		}

	}
?>