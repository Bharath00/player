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
</head>
<body>
		<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
		<a class="navbar-brand" href="index.php">
			<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
			Music Player
		</a>
</nav>
<br/>

	<?php
	$abc =  $_GET['name']; 
	echo "<div class='container'>";
	echo "<table class='table'>
			<thead class='blue-grey lighten-4'>
				<th>No.</th>
    		 	<th>Artists</th>
    		 	<th>Song</th>
			</thead>
	</table>";

	
	foreach(glob('uploaded/'.$abc.'*.mp3', GLOB_NOSORT) as $file)   
    {  
    	Static $count=1;
		echo "
    		<table class='table'>
    		 	<tr>
    		 		<td>".$count."</td>
    		 		<td></td>
    		 		<td><audio controls><source src='".$file."' type='audio/mpeg'></audio></td>
    		 	</tr>	 
    		</table>";
        $count++ ;
    }  

?>
</body>
</html>