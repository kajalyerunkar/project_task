$(document).ready(function(){
	//alert(1);
	$(".btn-register").click(function(){
		//alert(1);
		record = $("#register_form").serialize();
		//console.log(record);
		$.post("../controller/register-action.php",record).success(
		function(response){

		$(".msg_register").html(response);
		});

	});

	$(".btn-login").click(function(){
	 	//console.log("hello");
		record = $("#login_form").serialize();
		//console.log(record);
		$.post("../controller/login-action.php",record).success(
			function(response){

				if(response=="ok"){
					window.location.href="../views/index.php";
				}
				else
				{
					$(".msg_login").html(response);
				}
			});
	});

	$(".btn-add-msg").click(function(){
		//alert(1);
		record=$("#create_msg").serialize();
		//console.log(record);
		$.post("../controller/create_msg-action.php",record).success(function(res){

			$(".add_msg").html(res);
		})
	})

	$(".btn-add-contact").click(function(){
		//alert(1);
		record=$("#contact_form").serialize();
		//console.log(record);
		$.post("../controller/add-contact-action.php",record).success(function(response){
			$(".add_contact").html(response);
		})
	});
});