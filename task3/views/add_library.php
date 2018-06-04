<?php 
	require_once "../models/db_project.php";
	require_once "header.php";

?>
<section>
	<div class="container lib">
		<div class="col-md-4">
			<h4>Library</h4>
			<?php 
				$result=$obj->show_lib();
				//pre($result);
				if(is_array($result)):
					foreach($result as $val):
			?>
				<li> 
			<?php 
				echo $val['lib_name'];
			?>
				</li>
			<?php
				endforeach;
			endif;
			?>
		</div>
		<div class="col-md-5">
			<form id="lib_form">
			<h3>Add Library/Group</h3>
			<input type="radio" name="lib" value="Library">Library
			<input type="radio" name="grp" value="group">Group<br><br>
			<textarea name="txt" placeholder="enter text here"></textarea><br>
			<button type="button" class="btn btn-default btn-cat">add category</button><br>
			<div class="msg_lib"></div>
			</form>
		</div>
		<div class="col-md-3">
			<h4>Group</h4>
			<?php 
				$result=$obj->show_grp();
				//pre($result);
				if(is_array($result)):
					foreach($result as $val):
			?>
				<li>
			<?php 
				echo $val['grp_name'];
			?>
				</li>
			<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
	</section>

<?php 
	require_once "footer.php";

?>