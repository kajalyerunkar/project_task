<?php  
	require_once "db_connect.php";
	abstract class db_helper extends db_connect implements db_general_function{

		function insert($table,$columns,$values){

		$sql="insert into record ($columns) values($values)";
		//echo $sql; 
 		return $this->conn->query($sql) or die($this->$conn->error);	 
		}
		function update(){}
		function delete(){}
		function select($col,$tab,$condition){
			 $sql="select $col from $tab where $condition";
			 $result =$this->conn->query($sql) or die($this->$conn->error);
		}
	}
?>