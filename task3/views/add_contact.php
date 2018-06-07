<?php 
	require_once "header.php";
?>

	<section>
	<div class="container contact">
		<div class="col-md-6">
			<br><br><br><br>
			<h3>ADD CONTACT PERSON</h3>
			<form id="contact_form">
			<select name="msg_grp">
				<option value="">please select group</option>
					<?php 
						$ans=$obj->show_grp();	
						//pre($ans);	
						if(is_array($ans)){
							foreach($ans as $key=>$val){
								$id=$val['grp_id'];
							echo "<option value='$id'>".$val['grp_name']."</option>";
							}
						}

					?>	
			</select><br>
			<input type="text" name="txt1" placeholder="Enter name"><br>
			<input type="text" name="txt2" placeholder="Enter mobile number"><br>
			<button type="button" class="btn-add-contact">add contact</button><br>
			<div class="add_contact"></div>
		</form>
			<br><br><br>
		</div>
	</div>
</section>

<?php 

	require_once "footer.php";
?>