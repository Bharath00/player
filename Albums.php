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
	<title></title>
</head>
<body>
<style>
	table, th, td {
    border: 1px solid black;
}
</style>
<?php 
		$user_id = $_SESSION['user_id'] ;
		$sql = "SELECT * FROM albums WHERE user_id='$user_id'" ;
		$result = $conn->query($sql) ;
		$row_cnt = $result->num_rows ;
		if($row_cnt > 0){
			echo "<h1>Number of Albums</h1>";
			while($row = $result->fetch_assoc()){
				static $count = 0 ;
				$path = $row['file_loc'];
				echo "<table>
				<tr>
					<th>Count</th>
					<th>Albums</th>
					<th>Artists</th>
					
				</tr>
				<tr>
					<td>".$count."</td>
					<td><a href='$path'>".$row['song_name']."</a></td>
					<td><p>".$row['artists']."</td>
				</tr>" ;
				$count++ ; 
				
			}
		}

?>
</body>
</html>