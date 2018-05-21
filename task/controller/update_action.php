<?php 
	require_once "db_project.php";

	if(empty($_POST['nfirstname'])){
		echo "enter first name";	
	}
	else if(empty($_POST['nlastname']))
	{
		echo "enter last name";
	}
	else{

		$dbfirst=$obj->get_data($_SESSION['project_usemail']);
		pre($_SESSION['']);
		pre($dbfirst)
	}

?>