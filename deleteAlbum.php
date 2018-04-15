<?php

session_start() ;


if(!isset($_SESSION['user_id'])){
	header('Location: index.php?filenotfound') ;
	exit() ;
}


include "db/db.inc.php";

$path  =  $_GET['al_id'];
$dir = "uploaded/$path";



// Removing from the database 
$sql = "DELETE FROM albums WHERE al_id='$path'" ;
$result = $conn->query($sql) ;


//To remove the files
array_map('unlink', glob("$dir/*.*"));
rmdir($dir);
header("Location: albums.php?albumDeleted");
exit();



?>
