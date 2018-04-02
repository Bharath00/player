<?php 
session_start();

include "../db/db.inc.php";

$path  =  $_GET['delid'];
$dir = "../uploaded/$path";


// Removing from the database 
$sql = "DELETE FROM albums WHERE al_id='$path'" ;
$result = $conn->query($sql) ;


// To remove the files
array_map('unlink', glob("$dir/*.*"));
rmdir($dir);
header("Location: adminhome.php?albumDeleted");
exit();