<?php
	
	$servername  =  "127.0.0.1" ;
	$username  =    "root" ;
	$password  =    "root" ; 

	$conn = new mysqli($servername,$username,$password) ;


	$sql = 'CREATE DATABASE IF NOT EXISTS testdb' ;

	$conn->query($sql)  ;

	$sql = 'USE testdb' ;
	$conn->query($sql) ;

	$sql = "CREATE TABLE creators (
			id int(10) AUTO_INCREMENT PRIMARY KEY ,
			uname VARCHAR(20) NOT NULL UNIQUE ,
			mail VARCHAR(50) NOT NULL UNIQUE ,
			password VARCHAR(50) NOT NULL  
		)" ;

	if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

