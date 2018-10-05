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

		// $(".btn").click(function(){
		// 	//alert(2);
		// 	record = $("#update_form").serialize();
		// 	console.log(record);
		// 	$.post("../controller/update_action.php",record).success(
		// 	function(response){

		// 		if(response=="ok"){
		// 			window.location.href="show_record.php";
		// 		}
		// 		else{
		// 			$(".msg_form").html(response);
		// 		}
		// 	})
		// })

		$(".btn-update").click(function(){

			id = $(this).attr('for');
			// alert(id);
			// alert(11);
			//alert($id);
			record = $("#update_form").serialize();
			// console.log(record);
			// $.post("../controller/update_action.php",record+"&u_id="id).success(
			// function(response){

			// 	if(response=="ok"){
			// 		window.location.href="show_record.php";
			// 	}
			// 	else{
			// 		$(".msg_form").html(response);
			// 	}
			// })

			$.ajax({
				type:"post",
				data:record+"&u_id="+id,
				url:"../controller/update_action.php",
				success:function(result){
					console.log(result);
				}
			})
		})




	
})