<?php 

	require_once "header.php";
?>
<section>
	<div class="container msg">
		<div class="col-md-6">
			<br><br><br><br>
			<h3>CREATE MESSAGE</h3>
			<select name="msg_lib">
				<option value="">please select library</option>
					<?php 
						$ans=$obj->show_lib();	
						//pre($ans);	
						if(is_array($ans)){
							foreach($ans as $key=>$val){
							echo "<option>".$val['lib_name']."</option>";
							}
						}

					?>	
			</select><br>
			<textarea name="msg" rows="5" cols="7"></textarea><br>
			<button type="button" class="btn-add-msg">add message</button><br>
			<div class="add_msg"></div>
			<br><br><br>
		</div>
	</div>
</section>
<?php 
	
	require_once "footer.php";

?>