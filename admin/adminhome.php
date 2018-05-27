<?php
session_start();
if(!isset($_SESSION['admin_id'])){
	header("Location: ../index.php?error");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminHome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="../css/teststyle.css">
</head>
<body>
	
<!--Navbar-->
	
	<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
		<a class="navbar-brand" href="../index.php">
			<img src="../assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
			Music Player
		</a>
		<?php
		if(isset($_SESSION['admin_id'])){
			echo '<form action="adminlogout.php" method="POST"> 
            <button name="logout" class="btn btn-elegant">Logout </button>
            </form>';
		}
	?>
	</nav><br/>	


<!--end-->
<?php
include "../db/db.inc.php" ;
$sql = "SELECT * from albums";
$result = $conn->query($sql);
$row_cnt = $result ->num_rows;
	echo "<div class='container'>";
	echo "<table class='table'>
			<thead class='blue-grey lighten-4'>
				<th>No.</th>
				<th>Album id</th>
    		 	<th>Album</th>
    		 	<th>Reports</th>
    		 	<th>Delete</th>
			</thead>";
	if($row_cnt > 0 ){
		while($row = $result->fetch_assoc()){
			static $count = 1;
				echo"<tbody>
    		 	<tr>
    		 		<td>".$count." </td>	
    		 		<td>".$row['al_id']."</td>
    		 		<td><a href='adminlist.php?name=".$row['file_loc']."'>".$row['album_name']."</a></td>
    		 		<td>". $row['reports'] ."</td>
    		 		<td><a href='delete.php?delid=".$row['al_id']."'>".$row['al_id']."</a></td>
    		 	</tr>
    		</tbody>";
    		$count ++ ;
		}
	echo "</table>"	;
	}
			
?>



</body>
</html>
<td>