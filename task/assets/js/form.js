$(document).ready(function(){
		//alert(1);
		$(".btn").click(function(){
			//alert(2);
			record = $("#main_form").serialize();
			console.log(record);
			$.post("../controller/add_record_action.php",record).success(
			function(response){

				if(response=="ok"){
					window.location.href="show_record.php";
				}
				else{
					$(".msg_form").html(response);
				}
			})
		})

		$(".btn").click(function(){
			//alert(2);
			record = $("#update_form").serialize();
			console.log(record);
			$.post("../controller/update_action.php",record).success(
			function(response){

				if(response=="ok"){
					window.location.href="show_record.php";
				}
				else{
					$(".msg_form").html(response);
				}
			})
		})


	
})