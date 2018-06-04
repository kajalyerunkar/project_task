$(document).ready(function(){
	//alert(1);""
	$(".btn-update").click(function(){
		//alert(2);
		record= $("#update_form").serialize();
		//console.log(record);
		$.post("../controller/password-action.php",record).success(function(response){
			//console.log(response);
			$(".msg_update").html(response);
		})

	})

	$(".btn-cat").click(function(){
		//alert(2);
		record= $("#lib_form").serialize();
		//console.log(record);
		$.post("../controller/lib_form_action.php",record).success(function(response){
			//console.log(response);
			$(".msg_lib").html(response);
		})

	})

	
})