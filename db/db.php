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
		
		id  INT(10) PRIMARY KEY AUTO_INCREMENT,
		uname VARCHAR(30) NOT NULL UNIQUE,
		email VARCHAR(50) UNIQUE NOT NULL,
		password VARCHAR(50) NOT NULL,
		unique_code INT(4) NOT NULL 
 		)";

$conn->query($sql);

$sql = "CREATE TABLE albums(
		
		al_id INT(10) PRIMARY KEY UNIQUE,
		user_id INT(10) NOT NULL ,
		song_name VARCHAR(50) NOT NULL UNIQUE,
		artists VARCHAR(50) NOT NULL UNIQUE,
		year DATE NOT NULL,
		file_loc VARCHAR(200) NOT NULL,
		FOREIGN KEY (user_id) REFERENCES user_details (id) 
		)";

$conn->query($sql);

$conn->close();

?>