<?php 
 
 	require_once "../models/db_project.php";
 	//pre($_REQUEST);

 	//pre($_POST['lib']);
 	if(!empty($_POST['grp'])){

 		 $group=$_POST['txt'];

 		 $result=$obj->check_group_count($group);
		//pre($result);

		if($result[0]['cnt']>0){
			echo "group Already exist";
		}
		else{
	 			echo "group added";
				($obj->group_insert($group));
			}
 	}

 	else if(!empty($_POST['lib'])){

 		$library=$_POST['txt'];

 		$result=$obj->check_library_count($library);
		//pre($result);

		if($result[0]['cnt']>0){

			echo "library already exist";
		}
		else{
				echo "library added";
				($obj->library_insert($library));
			}
	}
	else{

			echo "please select library or group";
		}		
?>