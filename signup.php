<?php

if(isset($_POST['submit'])){

	include_once "db/db.inc.php" ;

	$uname =  $_POST['uname'];
	$mail =  $_POST['email'];
	$password = $_POST['pass'] ;
	$pin = $_POST['code'] ;

	// Checking empty fields ,email pattern and any possible duplicate accounts.

	if(empty($uname)||empty($mail)|| empty($password)||empty($pin)){
		header("Location: signupform.php?signup=empty");	
		exit();
	}else{
		if(!preg_match("/^[a-zA-Z]*$/",$uname)){
			header("Location: signupform.php?signup=invalidCharacters") ;
			exit();
		}else{
			if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
				header("Location: signupform.php=invalidEmail") ;
				exit() ;
			}else{
				$sql = "SELECT * FROM user_details WHERE uname='$uname' OR email='$mail'" ;
				$result = $conn->query($sql) ;
				$resultCheck = mysqli_num_rows($result) ; 
				if($resultCheck > 0) {
					header("Location: signupform.php?signup=usernameAlreadytaken");
					exit();
				}else{
					
 					// using prepared statements here 
					$stmt = $conn->prepare("INSERT INTO user_details(uname,email,password,unique_code) VALUES (?,?,?,?)") ;
					$stmt->bind_param("sssi",$uname,$mail,$password,$pin) ;
					$stmt->execute();
					header("Location: loginform.php") ;
					exit();
				}
			}
		}

	}
	
}else{
	header('Location: signupform.php') ;
}

