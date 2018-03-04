<?php 
	
	session_start() ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

	<title>Create a new account</title>	
</head>
<body>

	<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
		<a class="navbar-brand" href="index.php">
			<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
			Music Player
		</a>
	</nav>	
	<br/><br/>

	<div class="container">                     
		<div class="card">
			<div class="card-body">

				<!-- Material form register -->
				<form method="POST" action="signup.php">
					<p class="h3 text-center py-4">Sign up</p>

					<!-- Material input text -->
					<div class="md-form">
						<i class="fa fa-user prefix grey-text"></i>
						<input type="text" id="materialFormCardNameEx" class="form-control" name="uname">
						<label for="materialFormCardNameEx" class="font-weight-light">Username</label>
					</div><br/>

					<!-- Material input email -->
					<div class="md-form">
						<i class="fa fa-envelope prefix grey-text"></i>
						<input type="email" id="materialFormCardEmailEx" class="form-control" name="email">
						<label for="materialFormCardEmailEx" class="font-weight-light">Email</label>
					</div><br/>

					<!-- Material input password -->
					<div class="md-form">
						<i class="fa fa-lock prefix grey-text"></i>
						<input type="password" id="materialFormCardPasswordEx" class="form-control" name="pass">
						<label for="materialFormCardPasswordEx" class="font-weight-light">Password</label>
					</div><br/>

					<div class="md-form">
						<i class="fa fa-lock prefix grey-text"></i>
						<label for="materialFormCardPasswordEx" class="font-weight-light">Important!!</label>
					</div><br/>

					<div class="md-form">
						<div class="alert alert-info font-weight-bold" role="alert">
							Please enter a four digit number which will help to recover your account in case of any compromise.
							This number should not be shared with anyone..
						</div>
					</div><br/>

					<div class="md-form">
						<i class="fa fa-lock prefix grey-text"></i>
						<input type="password" id="materialFormCardPasswordEx" class="form-control" name="code">
						<label for="materialFormCardPasswordEx" class="font-weight-light">Security code!</label>
					</div><br/>	<br/>

					<div class="text-center py-4 mt-3">
						<button class="btn btn-cyan" type="submit" name="submit">Register</button>
					</div>
				</form>
			</div>  
		</div>
		<!-- Card -->
	</div>                 
	<!-- End -->

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
</body>
</html>