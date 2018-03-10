<?php

	session_start() ;

	if(isset($_POST['submit'])) {

		include 'db/db.inc.php' ; 

		$u_id = $_POST['user_id'] ;
		$password = $_POST['password'] ;

	
		if(empty($u_id)||empty($password)) {
			header("Location: loginform.php?login=empty") ;
			exit();
		}else{

			 $sql = "SELECT * FROM user_details WHERE email='$u_id' OR uname='$u_id'" ;
			 $result = $conn->query($sql) ;
			 $resultCheck = mysqli_num_rows($result) ;
			 if($resultCheck < 1){
			 	header("Location: loginform.php?login=error") ;
			 	exit() ;
			 }else{
			 	
				$row  = mysqli_fetch_assoc($result) ;
				// Hashing code will come here
				if($password == $row['password']){
					$_SESSION['user_id'] = $row['id'] ;
					header("Location: uploadform.php") ;
					exit() ;
					

				}else{
						header("Location: loginform.php?login=error") ;
						exit() ;
				}	
		}
	}
}else{
		header("Location: loginform.php?login=error") ;
		exit();
}