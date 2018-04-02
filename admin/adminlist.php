<?php 
session_start();
if(!isset($_SESSION['admin_id'])){
	header("Location: index.php?error");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="../css/teststyle.css">
</head>
<body>
	<!-- navbar -->


	<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
		<a class="navbar-brand" href="index.php">
			<img src="../assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
			Music Player
		</a>
	</nav><br/>


	<!-- end -->
	<?php
	$abc =  $_GET['name']; 
	echo "<div class='container'>";
	echo "<table class='table'>
			<thead class='blue-grey lighten-4'>
				<th>No.</th>
    		 	<th>Song</th>
    		 	<th>Play</th>
			</thead>";

	foreach(glob('../uploaded/'.$abc.'*.mp3', GLOB_NOSORT) as $file)   
    {  

  		$file1 = str_replace("../uploaded/".$abc, "", $file);
		Static $count=1;
		echo "<tbody>
    		 	<tr>
    		 		<td>".$count."</td>	
    		 		<td>".$file1."</td>
    		 		<td><audio controls><source src='".$file."' type='audio/mpeg'></audio></td>
    		 	</tr>
    		</tbody>";
        $count++ ;
    }  
    echo "</table>";

?>
</body>
</html>