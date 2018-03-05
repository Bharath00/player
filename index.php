<?php
	
	session_start() ;

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Online player</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/teststyle.css">

</head>
<body>

	<!-- Navbar starts here -->
		
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
		</nav>
	<br>
				<!-- Search bar -->

				<div class="container">
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
							<i class="material-icons">search</i>
						</label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="text" id="sample6">
							<label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
						</div>
					</div>
				</form>
			</div>
		

	<!-- End of search bar -->

	<!-- Latest releases header -->
	<div class="container">
		<h3>New Releases</h3>
	</div>
	<!-- Newest releases -->

		<div class="container">
		<div class="autoplay">
			<div>
				<figure class="snip1579"><img src="assets/black.png"/>
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>


			<div>
				<figure class="snip1579"><img src="assets/black.png" />
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
			<div>
				<figure class="snip1579"><img src="assets/black.png" />
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
			<div>
				<figure class="snip1579"><img src="assets/black.png"/>
					<figcaption>
						<h3>Album name</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
			<div>
				<figure class="snip1579"><img src="assets/black.png" />
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
		</div>
	</div>

	<!-- Slider scripts-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>


	<!-- End of slider 1 -->

	<!-- Playlist -->
	<div class="container">
		<h3>Playlist</h3>
	</div>

	<!-- Slider 2 here -->

	<div class="container">
		<div class="autoplay">
			<div>
				<figure class="snip1579"><img src="assets/black.png"/>
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>


			<div>
				<figure class="snip1579"><img src="assets/black.png" />
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
			<div>
				<figure class="snip1579"><img src="assets/black.png" />
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
			<div>
				<figure class="snip1579"><img src="assets/black.png"/>
					<figcaption>
						<h3>Album name</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
			<div>
				<figure class="snip1579"><img src="assets/black.png" />
					<figcaption>
						<h3>Artists</h3>
						<br>
						<h5>Testing</h5>
					</figcaption> <a href="play.html"></a>
				</figure>
			</div>
		</div>
	</div>
	<br>
	<!-- End of slider -->



	<div class="container">
		<div class="view overlay text-center">
			<!--Card content-->
			<div class="card-body">
				<!--Title-->
				<h4 class="card-title">Connect with us !!</h4>
				<p>All rights belong to it's rightful owner/owner's. No copyright infringement intended.</p>
				<!--Text-->
			</div> 
		</div>	
	</div>



<!-- Footer -->

<div class="container">
	  <div class="row">
      
                  <!--First column-->
                  <div class="col-md-12">
                      <div class="mb-5 flex-center">
                          <!--Facebook-->
                          <a class="fb-ic"><i class="fa fa-facebook fa-lg black-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <!--Twitter-->
                          <a class="tw-ic"><i class="fa fa-twitter fa-lg blue-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <!--Google +-->
                          <a class="gplus-ic"><i class="fa fa-google-plus fa-lg red-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <!--Linkedin-->
                          <a class="li-ic"><i class="fa fa-linkedin fa-lg blue-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <!--Instagram-->
                          <a class="ins-ic"><i class="fa fa-instagram fa-lg red-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <!--Pinterest-->
                          <a class="pin-ic"><i class="fa fa-pinterest fa-lg -text fa-2x"> </i></a>
                      </div>
                  </div>
                  <!--/First column-->
              </div>
              <!--/First row-->
</div>


<!--End of footer -->

<!-- Search bar script -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</body>
</html>
