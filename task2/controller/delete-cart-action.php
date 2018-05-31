<?php 

	require_once "../models/db_project.php";
	//print_r($_POST);
	$pro_id=$_POST['x'];
	//echo $pro_id;
	$cartdata=$_COOKIE['cookie_product_id'];
	//echo $cartdata;
	$arr=explode(",", $cartdata);

	foreach($arr as $key => $val) {
		//echo $key;
		//echo $val;
		if($val==$pro_id){
			unset($arr[$key]);
		}

	}
	//print_r($arr);
	$newproduct=implode(",",$arr);
	echo $newproduct;

	setcookie("cookie_product_id",$newproduct,time() +3600, "/");
	$ans=explode(",", $newproduct);
	//print_r($ans);
	$result=array_unique($ans);
	//pre($result);
	$cartcnt=count($result);


?>
