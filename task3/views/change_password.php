<?php 
	
	session_start();
	 if(!isset($_SESSION['project_usname'])){
	 	header("location:index.php");
	 }
	require_once "header.php";

?>

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>change password</h2>
						<form id="update_form">
							<input type="text" name="cpass" placeholder="enter current password"/><br>	
							<input type="text" name="npass" placeholder="enter new password"/><br>
							<input type="text" name="cnpass" placeholder="enter confirm password"/><br>
							<button type="button" class="btn btn-default btn-update">change password</button><br>
							<div class="msg_update"></div>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>


<?php 
	require_once "footer.php";

?>
