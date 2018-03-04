<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<title>Login</title>
</head>
<body>
	<!-- navbar here -->

			<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
			<a class="navbar-brand" href="index.php">
				<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
				Music Player
			</a>
			<div>
				<a href="signupform.php" class="float-right  btn btn-primary btn-rounded mb-4" >Signup</a>		
			</div>
		</nav><br/>
	


	<!-- End -->

	<!-- Login form -->
	
<div class="container">
		
<!-- Card -->
	<div class="card">

    <!-- Card body -->
    	<div class="card-body">

        <!-- Material form register -->
        	<form method="POST" action="login.inc.php">
            	<p class="h4 text-center py-4">Login</p><br/>

            <!-- Material input text -->
		            <div class="md-form">
		                <i class="fa fa-user prefix grey-text"></i>
		                <input type="text" id="materialFormCardNameEx" class="form-control" name="user_id">
		                <label for="materialFormCardNameEx" class="font-weight-light">Enter email or username</label>
		            </div><br/>

		            <!-- Material input password -->
		            <div class="md-form">
		                <i class="fa fa-lock prefix grey-text"></i>
		                <input type="password" id="materialFormCardPasswordEx" class="form-control" name="password">
		                <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
		            </div><br/>


				    <div class="text-center py-4 mt-3">
				        <button class="btn btn-primary" type="submit" name="submit">Login</button>
				        <button class="btn stylish-color" type="value">forgot password</button>
				    </div>
       		</form>
       </div>
   </div>
                  
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
<!-- End -->
</body>
</html>