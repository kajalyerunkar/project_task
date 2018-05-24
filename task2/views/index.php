<?php 
	
	require_once "../models/db_project.php";
	
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="login_form">
							<input type="text" name="useremail" placeholder="enter emailid" /><br><br>
							<input type="text" name="userpassword" placeholder="enter password" /><br><br>
							<button type="button" class="btn btn-default btn-login">Login</button>
							<div class="msg_login"></div>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="register_form">
							<input type="text" name="username" placeholder="enter name" /><br><br>
							<input type="text" name="useremail" placeholder="enter emailid" /><br><br>
							<input type="text" name="userdob" placeholder="enter date of birth" /><br><br>
							<input type="text" name="userpassword" placeholder="enter password" /><br><br>
							<input type="text" name="usercpassword" placeholder="enter confirm password" /><br><br>


							<button type="button" class="btn btn-default btn-register">register</button>
							<div class="msg_register"></div>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/task2_before_login.js"></script>
