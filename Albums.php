<?php

session_start() ;

include "db/db.inc.php" ;

if(!isset($_SESSION['user_id'])){
	header('Location: index.php?filenotfound') ;
	exit() ;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/teststyle.css">
	<title>Welcome</title>
</head>
<body>
<!-- NAvbar -->
	<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
		<a class="navbar-brand" href="index.php">
			<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
			Music Player
		</a>
		 <?php 
        if(isset($_SESSION['user_id'])){
            echo '<form action="logout.php" method="POST"> 
            <button name="logout" class="btn btn-elegant">Logout </button>
            </form>' ;  
        	}
        ?>
	</nav>


<?php 
		$user_id = $_SESSION['user_id'] ;
		$sql = "SELECT * FROM albums WHERE user_id='$user_id'" ;
		$result = $conn->query($sql) ;
		$row_cnt = $result->num_rows ;
		chdir("uploaded");
		echo "<div class='container'>
			<h4>Number of albums</h4>
			</div>";

		echo "<div class='container'>
				<table class='table table-bordered'>
					<thead class='blue-grey lighten-4'>
					<tr>
						<th>No.</th>
						<th>Album</th>
						<th>Artists</th>
						<th>Release Date</th>
						<th>Action</th>
					</tr>
					</thead>";
				
		if($row_cnt > 0){
			while($row = $result->fetch_assoc()){
				static $count = 1 ;
			  	$path = $row['file_loc'];
				echo"<tbody>
							<tr>
								<td scope='row'>".$count."</td>
								<td><a href='play.php?name=".$row['file_loc']."'>".$row['album_name']."</a></td>
								<td>".$row['artists']."</td>
								<td>".$row['year']."</td>
								<td><a class='btn btn-primary' href='deleteAlbum.php?al_id=".$row['file_loc']."'>Delete</a></td>
							</tr>
						</tbody>";
				$count++ ; 	
			}
		echo "</table>";
		}else{
			header("Location: uploadform.php?noAlbumsfound");
			exit();
		}

?>
</body>
</html>