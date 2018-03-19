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
	<title><?php // Artists name ?></title>
</head>
<body>
<?php 
	$user  = $_SESSION['user_id'] ;
	$sql  = "SELECT * FROM albums WHERE user_id='$user'" ;
	$result = $conn->query($sql) ;
	$row_cnt =$result->num_rows ;

	if($row_cnt > 0 ){
		while($row = $result->fetch_assoc()){
			$new_dir =  $row['file_loc'] ;
			chdir($new_dir) ;
			$my_dir = getcwd() ;

		
			
			if ($handle = opendir('.')) {
				while (false !== ($entry = readdir($handle))) {
					if ($entry != "." && $entry != "..") {
						$contents[] = $entry ;
						var_dump($contents);

						
					}
				}
				closedir($handle);
			}
		}
	}
?>
	



</body>
</html>