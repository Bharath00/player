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
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<title><?php echo "Welcome "?></title>
</head>
<body>
<!-- NAvbar -->
	<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
		<a class="navbar-brand" href="index.php">
			<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
			Music Player
		</a>
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
		if($row_cnt > 0){
			while($row = $result->fetch_assoc()){
				static $count = 1 ;
			  	$path = $row['file_loc'];
				echo"<div class='container'>
						<table class='table'>
						<thead class='blue-grey lighten-4'>
							<tr>
								<th>No.</th>
								<th>Album</th>
								<th>Artists</th>
								<th>Release Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>".$count."</td>
								<td><a href='uploaded/$path'>".$row['song_name']."</a></td>
								<td>".$row['artists']."</td>
								<td>".$row['year']."</td>
							</tr>	
						</tbody>
					</table>
					</div>" ;
				$count++ ; 	
			}
		}else{
			header("Location: uploadform.php?noAlbumsfound");
			exit();
		}

?>
</body>
</html>