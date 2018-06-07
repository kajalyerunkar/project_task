<?php 

	require_once "../models/db_project.php";
	//pre($_POST);

	if(empty($_POST['msg_lib'])){
		echo "please select library";
	}
	else if(empty($_POST['msg'])){
		echo "please write some message";
	}
	else{
		echo "ohk";
		$libid=$_POST['msg_lib'];

		$txtmsg=$_POST['msg'];
		//echo "$libid";
		//echo "$txtmsg";
		$result=$obj->insert_msg($libid,$txtmsg);
	}
?>