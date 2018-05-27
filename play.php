 <?php
session_start() ;
include "db/db.inc.php" ;
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

	<style type="text/css">
		img album_art{

		
		}
	
	</style>


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
<br/>
<br/>
<div class="container">
	<?php
	
	if(isset($_GET['name'])){
	$abc =  $_GET['name']; 


	foreach(glob('uploaded/'.$abc.'*.jpg', GLOB_NOSORT) as $img){  
		echo "<div class='text-center'>
				<img  src='".$img."' width='320em' height='200em'  id='album_art'/>
			</div><br/>";
			break;
    }

	echo "<div class='container'>";
	echo "<table class='table'>
			<thead class='blue-grey lighten-4'>
				<th>No.</th>
    		 	<th>Song</th>
    		 	<th>Play</th>
			</thead>";

	foreach(glob('uploaded/'.$abc.'*.mp3', GLOB_NOSORT) as $file)   
    {  

  		$file1 = str_replace("uploaded/".$abc, "", $file);
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
 
}

else{
	header("Location: index.php");
	exit();
}
?>


<div class="card">
	<div class="card-body">
		
		<form method="POST" action="action.php"> 
			<input type="submit" name="report" class="btn btn-primary" value="Report" />
			<input type="hidden" name="location" value="<?php echo $abc ;?>" />
		</form>

	</div>	
</div>


</body>
</html>