<?php 
	require_once "../models/db_project.php";

	$id=$_GET['ab'];
	//echo "$id";
	$result=$obj->delete_records($id);
	print_r($result);
	if($result){
	 	header("location:show_record.php");

	 }
?>
