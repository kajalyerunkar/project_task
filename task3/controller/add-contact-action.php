<?php 

		require_once "../models/db_project.php";
		//pre($_POST);

	if(empty($_POST['msg_grp'])){
		echo "please select group name";
	}
	else if(empty($_POST['txt1'])){
		echo "please enter name";
	}
	else if(empty($_POST['txt2'])){
		echo "please enter contact number";
	}
	else{
		//echo "ohk";
		$grp=$_POST['msg_grp'];

		$name=$_POST['txt1'];
		$num=$_POST['txt2'];
		// echo "$grp";
		// echo "$name";
		// echo "$num";
		$result=$obj->check_contact_count($num);
		//pre($result);

		if($result[0]['cnt']>0){
			echo "number Already exist";
		}
		else{
	 			echo "contact added";
				($obj->insert_contact_details($grp,$name,$num));
			}
	}

?>