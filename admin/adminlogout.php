<?php 

	if(!isset($_SESSION['admin_id'])){
		header("Location: ../index.php?error");
		exit ();
	}
	


	if(isset($_POST['logout'])){

	session_start();
	session_unset();
	session_destroy();
	
	header("Location: index.php") ;
	exit() ;
	
}
