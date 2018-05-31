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

	$(".add-to-cart").click(function(anch_obj){
		//alert(1111);
		//console.log(anch_obj);
		anch_obj.preventDefault();
		proid=$(this).attr("for");
		//alert(proid);
		$.post("../controller/cart-action.php","x="+proid).success(
		function(response){
			//alert(response);
			console.log(response);
		$(".cart_count").html(response);
		alert("product updated in cart");
		$("html,body").animate({
			"scrollTop":0
		},1000);

	})

	})

	$(".delete-to-cart").click(function(anch_obj){
		curtag=$(this);

		anch_obj.preventDefault();
			//alert(1);
		proid=$(this).attr("for");
		//alert(proid);
		$.post("../controller/delete-cart-action.php","x="+proid).success(function(response){
			console.log(response);
		$(".cart_count").html(response);
		alert("product updated in cart");
		$("html,body").animate({
			"scrollTop":0
		},1000);
		})

		curtag.parent().parent().parent().parent().parent().fadeout(500)
	})


});