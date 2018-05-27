$(document).ready(function(){
	//alert(1);
	$(".btn-register").click(function(){
		//alert(1);
		record = $("#register_form").serialize();
		//console.log(record);
		$.post("../controller/register_action.php",record).success(
		function(response){

		$(".msg_register").html(response);
		});

	});

	$(".btn-login").click(function(){
	 	//console.log("hello");
		record = $("#login_form").serialize();
		//console.log(record);
		$.post("../controller/login_action.php",record).success(
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
});