<?php 

//Execute this file at first 


$servername = "127.0.0.1"  ;
$username   =   "root" ;
$password   =   "root"  ; 


$conn = new mysqli($servername,$username,$password) ;

// Creating a new database 

$sql = "CREATE DATABASE IF NOT EXISTS mplayer" ;
$conn->query($sql) ;

$sql = "USE mplayer" ;
$conn->query($sql) ;

$sql = "CREATE TABLE user_details(
		
		id  INT(10) PRIMARY KEY AUTO_INCREMENT,
		uname VARCHAR(30) NOT NULL UNIQUE,
		email VARCHAR(50) UNIQUE NOT NULL UNIQUE,
		password VARCHAR(50) NOT NULL,
		unique_code INT(4) NOT NULL 
 		)";

$conn->query($sql);

$sql = "CREATE TABLE albums(
		
		al_id int(10) PRIMARY KEY AUTO_INCREMENT,
		song_name VARCHAR(50) NOT NULL UNIQUE,
		artists VARCHAR(50) NOT NULL UNIQUE,
		year DATE NOT NULL
		)";

$conn->query($sql);

$conn->close();

?>