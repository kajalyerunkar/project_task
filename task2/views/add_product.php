<?php 
	
	require_once "../models/db_project.php";
	require_once "header.php";
?>
	<div class="container">
		<div class="col-md-4 text-center">
			<div class="signup-form"><!--sign up form-->
				<h3>ADD PRODUCT INFORMATION</h3>
				<form id="add_product_form">
					<input type="text" name="pro_name" placeholder="Enter product name" /><br>
					<input type="text" name="pro_discount" placeholder="Enter product old price" /><br>
					<input type="text" name="pro_price" placeholder="enter product new price" /><br>
					<select name="pro_caid">
						<option value="">please select category</option>
							<?php 
								$ans=$obj->show_category();
								
							if(is_array($ans)){
								foreach($ans as $key=>$val){
									$id=$val['ca_id'];
									echo "<option value='$id'>".$val['ca_name']."</option>";
								}
							}

							?>
						</select><br>
					<input type="file" name="pro_path" /><br>
					<textarea name="pro_desc" placeholder="product description"></textarea><br><br>
					<button type="button" class="btn btn-default btn-add-product">Add</button>
					<div class="msg_add_product"></div>
				</form>
			</div>
		</div>
	</div>


<?php
	
	require_once "footer.php";
?>