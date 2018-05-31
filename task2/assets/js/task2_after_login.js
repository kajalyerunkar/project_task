$(document).ready(function(){
	$(".btn-update").click(function(){
		//alert(1);
		record =$("#update_form").serialize();
		//console.log(record);
		$.post("../controller/password-action.php",record).success(function(res){
			$(".msg_update").html(res);
		})
	});

	$(".btn-add-product").click(function(){
		//alert(1);

		//record =$("#add_product_form").serialize();
		//console.log(record);
		formobj=document.getElementById("add_product_form");
		//alert(formobj);
		//alert(1);
		//create an obj of form data
		dataobj = new FormData(formobj);
		//alert(dataobj);
		$.ajax({
			
			data:dataobj,
			url:"../controller/add-product-action.php",
			type:"post",
			contentType:false,
			processData:false,
			success:function(response){
				$(".msg_add_product").html(response);
			},
			error:function(errmsg){
				console.log(errmsg);
				}
			});

		//$.post("../controller/add-product-action.php",record).success(function(res){
			//$(".msg_add_product").html(res);
		})

});