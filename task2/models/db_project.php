<?php 
	require_once "db_helper.php";

	final class db_project extends db_helper{

		function check_email_count($email){

			return self::select(
			"count(*) as cnt","userinfo","us_email='$email'");
		}

		function user_insert($name,$email,$dob,$password){

			return parent::insert(
				"userinfo",
				"us_name,us_email,us_dob,us_password",
				"'$name','$email','$dob','$password'"
			);
		}
		function get_user_data($email){
			return db_helper::select(
		"*","userinfo","us_email='$email'"
			);
		}

		function show_category(){
			//echo "hello";
			return $this->select("ca_id,ca_name","categories","1");
		}

		function show_items(){

			return db_helper::select(
				"*","items","1 order by pro_id desc");
		}
		function show_category_wise($id){

			return db_helper::select(
				"*","items","pro_id='$id' order by pro_id desc");
		}
		function  product_insert($rec){
			return parent::insert("items",
				"pro_name,pro_price,pro_discount,pro_description,pro_caid,pro_path","'$rec[0]','$rec[1]','$rec[2]','$rec[3]','$rec[4]','$rec[5]'");
		}

		function get_password_userwise($email){
			return parent::select("us_password","userinfo","us_email='$email'");
		}
		function update_password($pass,$email){
			return $this->update("userinfo","us_password='$pass'","us_email='$email'");
		}
		function show_cart_product($pro){
			//select * from items where pro_id=1 or pro_id=2...where pro_id in (1,2)
			return $this->select("*","items","pro_id in($pro) order by pro_id desc");
		}
	}

	$obj= new db_project();

?>