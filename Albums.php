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
	chdir("uploaded/");
	$dir = getcwd();
	if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry\n";
        }
    }
    closedir($handle);
}
?>
</body>
</html>