<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="css/teststyle.css">
</head>
<body>

	<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
		<a class="navbar-brand" href="index.php">
			<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
			Music Player
		</a>
		<?php 
		if(!isset($_SESSION['user_id'])){
			echo '<div>
			<a href="loginform.php" class="float-right  btn btn-primary btn-rounded mb-4" >Login</a>
			<a href="signupform.php" class="float-right btn btn-default btn-rounded mb-4">Signup</a>	
			</div>' ;
		}else{
			echo '
			<form action="logout.php" method="POST"> 
			<button name="logout" class="float-right btn btn-default btn-rounded mb-4">Logout</button>
			</form>' ;
		}
		?>			
	</nav><br/>
	<br/>

	<!-- Forgot section -->
	<div class='container'>
		<form method='post' action='forgotLogic.php'>	
			<div class="md-form">
				<i class="fa fa-user prefix grey-text"></i>
				<input type="text" id="materialFormRegisterNameEx" class="form-control" name='user_name'>
				<label for="materialFormRegisterNameEx">Your email or username</label>
			</div><br/><br/>

			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input type='password' id="materialFormRegisterEmailEx" class="form-control" name="code">
				<label for="materialFormRegisterEmailEx">Your secret code</label>
			</div><br/><br/>

			<div class="text-center mt-4">
				<button class="btn btn-dark" type="submit" name='submit'>Validate credentials</button>
			</div>
		</form>	
	</div>

<!-- end -->


<!-- if true -->






<!--End -->

	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
</body>
</html>