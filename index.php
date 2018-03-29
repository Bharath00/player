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
			<a href="uploadform.php" class="btn btn-grey"><i class="fa fa-cloud-upload" ></i></a>
			<button name="logout" class="btn btn-elegant">Logout</button>
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


	<div class='container'>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#starks-panel" class="mdl-tabs__tab is-active">Latest </a>
				<a href="#lannisters-panel" class="mdl-tabs__tab">All Albums</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="starks-panel">

				<?php 
	// fetch all the albums from the database 
				include 'db/db.inc.php';
				$sql = "SELECT * FROM albums ORDER BY year DESC LIMIT 5" ;
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					echo "<table class='table'>
					<thead>
					<tr>	
					<th>No.</th>
					<th>Year</th>
					<th>Album</th>
					<th>Artists</th>
					</tr>
					</thead>";
					while($row=$result->fetch_assoc()){
						static $count = 1 ;
						echo "<tbody>
						<tr>
						<td>".$count."</td>
						<td>".$row['year']."</td>
						<td><a href='play.php?name=".$row['file_loc']."'>".$row['song_name']."</a></td>
						<td>".$row['artists']."</td>
						</tr>
						</tbody>";	
						$count ++;	
					}
					echo "</table>"	;
				}else{
					echo "No Albums found";
				}

				?>
			</div>

			<div class="mdl-tabs__panel" id="lannisters-panel">
				<?php
				$sql = "SELECT * FROM albums ORDER BY year ASC LIMIT 5" ;
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					echo "<table class='table'>
					<thead>
					<tr>	
						<th>No.</th>
						<th>Year</th>
						<th>Album</th>
						<th>Artists</th>
					</tr>
					</thead>";
					while($row=$result->fetch_assoc()){
						static $cp = 1 ;
						echo "<tbody>
						<tr>
							<td>".$cp."</td>
							<td>".$row['year']."</td>
							<td><a href='play.php?name=".$row['file_loc']."'>".$row['song_name']."</a></td>
							<td>".$row['artists']."</td>
						</tr>
						</tbody>";	
						$cp ++;	
					}
					echo "</table>"	;
				}else{
					echo "No Albums found";
				}

				?>
			</div>
		</div>
</div>
<br/>

<!-- About Section -->
<div class='container'>
	<div class='card'>
    <div class="card-body">
        
        <!--Title-->
        <h4 class="card-title text-center">About</h4>
        <hr class="hr-light">
        <!--Text-->
        <p class="font-medium mb-4">Stream free albums and hits, find a song, discover music, and download songs with the Spotify free streaming and music player app. Free streaming, music search and hits library – Spotify is all that and much more. Play songs, sync music, discover music and free albums with Spotify, your go-to music downloader.</p>
    </div>
</div>
</div>
<!-- End  -- >

<!-- Footer -->

	<div class="container">
		<div class="view overlay text-center">
			<!--Card content-->
			<div class="card-body">
				<!--Title-->
				<h4 class="card-title">Connect with us !!</h4>
				<p>All rights belong to it's rightful owner/owner's. No copyright infringement intended.</p>
					  <div class="row">
      
                  <!--SOCIAL LINKS-->
                  <div class="col-md-12">
                      <div class="mb-5 flex-center">   
                          <a class="fb-ic"><i class="fa fa-facebook fa-lg black-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <a class="tw-ic"><i class="fa fa-twitter fa-lg blue-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <a class="gplus-ic"><i class="fa fa-google-plus fa-lg red-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <a class="li-ic"><i class="fa fa-linkedin fa-lg blue-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <a class="ins-ic"><i class="fa fa-instagram fa-lg red-text mr-md-5 mr-3 fa-2x"> </i></a>
                          <a class="pin-ic"><i class="fa fa-pinterest fa-lg -text fa-2x"> </i></a>
                      </div>
                  </div>    
              </div>
			</div> 
		</div>	
	</div>

<!--End of footer -->

<!-- Search bar script -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
