<?php 
	session_start() ;
	  if(!isset($_SESSION['user_id'])){
            header('Location: index.php?filenotfound') ;
            exit() ;
        }
        
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Enter your new password</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
			<a class="navbar-brand" href="index.php">
				<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
				Music Player
			</a>
</nav>
<br/>


<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="forgotLogic.php">              
                <div class="md-form">
                    <input type="password" id="materialFormCardEmailEx" class="form-control" name="newpass">
                    <label for="materialFormCardEmailEx" class="font-weight-light">Enter your new password</label>
                </div><br/>
                <div class="text-center mt-4">
					<button class="btn btn-primary" type="submit" name='change'>Change</button>
				</div>
            </form>
        </div>
    </div>
</div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
</body>
</html>
