<?php 
	require_once "../models/db_project.php";
?>
<html>
<head>
	<meta name="viewpoint" content="width=device-width,
	minimum-scale=1,maximum-scale=1,initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/sms.css">
	<script type="text/javascript">
	//alert(window.)
	</script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	</head>
	<body>
		<!-- top header -->
		<div class="frst">
			<div class=" container frstdiv">
				<div class="col-md-5">
					<div class="col-md-3">
					<img src="../assets/images/logo.jpg" height="60" width="100">
					</div>				
				</div>
				<div class="col-md-3">  
					<h3>GET FREE SMS...!!! </h3>
				</div>
				<div class="col-md-4">
					<div class="col-md-6 pull-right">
							
						<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    WELCOME
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						  <?php 
						  		if(!isset($_SESSION['project_usname'])):
						  ?>
						    <li><a href="login.php">login/register</a></li>
						    <?php 
						    	endif;
						    ?>
						    <?php 
						  		if(isset($_SESSION['project_usname'])):
						 	?>
						    <li><a href="logout.php">logout</a></li>
						    <li><a href="change_password.php">change password</a></li>
						    <?php 
						    	endif;
						    ?>
						  </ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- top header -->
		<!-- lower header -->
		<div class="scnd">
			<div class="container scnddiv">
				<ul class="menu_list">
					<li><a href="index.php">HOME</a></li>
					<li><a href="add_library.php">LIBRARY/GROUP</a></li>
					<li><a href="create_msg.php">CREATE MESSAGE</a></li>
					<li><a href="add_contact.php">ADD CONTACT</a></li>
					<li><a href="send_sms.php">SEND SMS</a></li>
					<li><a href="group_sms.php">GROUP SMS</a></li>
					<li><a href="sent_sms.php">SENT SMS</a></li>
				</ul>
			</div>
			</div>
		</div>
		<!-- lower header -->