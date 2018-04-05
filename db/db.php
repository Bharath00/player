<?php 

//Execute this file at first 


$servername = "127.0.0.1"  ;
$username   =   "root" ;
$password   =   ""  ; 


$conn = new mysqli($servername,$username,$password) ;

// Creating a new database 

$sql = "CREATE DATABASE IF NOT EXISTS mplayer" ;
$conn->query($sql) ;

$sql = "USE mplayer" ;
$conn->query($sql) ;

$sql = "CREATE TABLE user_details(
		
		id  INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		uname VARCHAR(30) NOT NULL UNIQUE,
		email VARCHAR(50) UNIQUE NOT NULL,
		password VARCHAR(50) NOT NULL,
		unique_code INT(4) NOT NULL 
 		)";

$conn->query($sql);

$sql = "CREATE TABLE albums(
		
		al_id INT(10) NOT NULL PRIMARY KEY UNIQUE,
		user_id INT(10) NOT NULL ,
		album_name VARCHAR(50) NOT NULL UNIQUE,
		artists VARCHAR(50) NOT NULL ,
		year DATE NOT NULL,
		file_loc VARCHAR(200) NOT NULL,
		reports INT (11),
		FOREIGN KEY (user_id) REFERENCES user_details (id) 
		)";

$conn->query($sql);


$sql = "CREATE TABLE action(

	id INT(11)	NOT NULL AUTO_INCREMENT PRIMARY KEY,
	user_id INT(11) NOT NULL ,
	album_id INT(11) NOT NULL 
	)";

$conn->query($sql);

$sql = "CREATE TABLE admin(
		id INT(10) PRIMARY KEY UNIQUE AUTO_INCREMENT,
		email VARCHAR(200) NOT NULL UNIQUE,
		password VARCHAR(200) NOT NULL 
)";

$conn->query($sql);

$conn->close();

?>