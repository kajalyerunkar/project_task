<?php 
	require_once "header.php";
?>
<section>
	<div class="container send_sms">
		<div class="col-md-4">
			<h4>Contact Group</h4>
			<?php 
				$result=$obj->show_grp();
				//pre($result);
				if(is_array($result)):
					foreach($result as $val):
			?>
				<li> <a href="filter_group.php?id=<?php echo $val['grp_id'];?>">
			<?php 
				echo $val['grp_name'];
			?>
				</a></li>
			<?php
				endforeach;
			endif;
			?>
			<h4>show contact</h4>
			<?php 
				$id=$_GET['id'];
				//echo "$id";

				$result=$obj->show_grp_wise($id);
				//pre($result);

				 if(is_array($result)):
				 	foreach($result as $key=>$val):
				 		
			?>
			
				<li><a href="# ?id=<?php echo $val['cnt_id'];?>">
				<?php 

					echo $val['cnt_name'];
					//echo $val['cnt_num'];
				?>
				<?php 
						endforeach;
					endif;

				?>
			</a>
		</li>
			
		</div>
		<div class="col-md-5">
			<form id="send_sms_form">
			<h3>Send SMS</h3>
			<input type="text" name="txt1" placeholder="Contact person"><br>
			<input type="text" name="txt2" placeholder="mobile number"><br>
			<textarea name="txt3" placeholder="Write message here"></textarea><br>
			<button type="button" class="btn btn-default btn-snd">Send SMS</button><br>
			<div class="snd_sms"></div>
			</form>
		</div>
		<div class="col-md-3">
			<h4>Message Library</h4>
			<?php 
				$result=$obj->show_lib();
				//pre($result);
				if(is_array($result)):
					foreach($result as $val):
			?>
				<li><a href="filter_library.php?id=<?php echo $val['lib_id'];?>">
			<?php 
				echo $val['lib_name'];
			?>
				</a></li>
			<?php
				endforeach;
			endif;
			?>
			<br>
			<h4>show message</h4>
		</div>
	</div>
	</section>



<?php 

	require_once "footer.php";
?>