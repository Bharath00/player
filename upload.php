<?php 

	session_start() ;

	if(!isset($_SESSION["user_id"])){
		header("Location: signup.php") ;
		exit();
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$num = $_REQUEST['num'] ;
		if($num>5){
			$num=0;	
			echo ' 
			<div class="container">
				<div class="alert alert-dark">
					<strong>Error! </strong> cannot be uploaded..Try again
				</div>
			</div>' ;
			}
		}

?>
	<!DOCTYPE html>
	<html>
	<head>	
		<title>Upload your music..</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="teststyle.css">

	</head>
	<body>

		<!-- Navbar starts here -->
	
			<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
				<a class="navbar-brand" href="index.php">
					<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
					Music Player
				</a>
				<a  href="logout.php" class="btn btn-primary">Logout</a>
			</nav>	
		<br>
		<!-- end of navbar -->

		<!-- Upload content  -->
		<div class="container card-body">
			<!--Title-->
			<h4 class="card-title">Share your content with us</h4>
			<!--Text-->
			<p class="card-text">Enter the number of tracks : </p><br>
			<form class="md-form" method="POST">
				<input type="number" name="num" min=1 max=5 class="form-control font-weight-bold" placeholder="Only a maximum of 5 track is allowed..">
				<input type="submit" name="submit" class="btn btn-primary">
			</form>

			<!-- php code here -->
		</div>

		<div class="container card-body">
			<!--Title-->
			<h4 class="card-title"></h4>
			
				<?php 

				if( isset($num) && $num >=1 && $num <=5 ){
					echo '<!--Text-->
					<p class="card-text font-weight-normal">Upload your files here</p>
					<br>
					<form class="md-form" action="uploader.php" method="POST" enctype="multipart/form-data">';
					for($i=1; $i<=$num ; $i++){
						echo 
						'
						<div class="row">
						<!-- Grid column -->
						<div class="col">
						<!-- Material input -->
						<div class="md-form mt-2">
						<input type="text" id="form1" class="form-control font-weight-bold" name="sname" />
						<label for="form1" >Track name ..</label>
						</div>
						</div>
						<div class="col">
						<!-- Material input -->
						<div class="md-form mt-2">
						<input type="text" id="form2" class="form-control font-weight-bold" name="aname" />
						<label for="form2" >Artists ...</label>
						</div>
						</div>
						<!-- Grid column -->
						</div>
						<br/>
						<div class="row">
						<div class="col-md-7">
						<input type="file" id="form3" class="form-control" name="audioFile"/><br/>
						</div>
						</div>';
					}
					echo '<input type="submit" name="submitfile" class="btn btn-primary">
					</form>';
				}
				?>			

			<!-- php code here -->
		</div>
		<!-- End of upload content-->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
	</body>
	</html>