$(document).ready(function(){
		//alert(1);
		$(".btn").click(function(){
			//alert(2);
			record = $("#main_form").serialize();
			//console.log(record);
			$.post("../controller/add_record_action.php",record).success(
			function(response){

				if(response=="ok"){
					window.location.href="index.php";
				}
				else{
					$(".msg_form").html(response);
				}
			})
		});
	
})