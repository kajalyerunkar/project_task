<?php 

	require_once "db_connect.php";

	abstract class db_helper extends db_connect implements db_general_function{
		function insert($table,$columns,$values){
			$sql="insert into $table ($columns) values($values)";

			$result=$this->conn->query($sql) or die($this->conn->error);
		}
		function select($col,$table,$condition){
			$sql="select $col from $table where $condition";

			$result = $this->conn->query($sql) or die($this->conn->error);

			//pre($result);

			if($result->num_rows>0){
				while($ans=$result->fetch_array(MYSQLI_ASSOC)){
					//pre($ans);
					$data[]=$ans;
				}
					return $data;	
				}

				else{
					return 0;
				}
		}
		function delete(){}
		function update($table,$record,$condition){
			$sql="update $table set $record where $condition";
			return $this->conn->query($sql) or die ($this->conn->$error);
		}
	}

?>