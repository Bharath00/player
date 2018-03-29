<?php
session_start();

	include "db/db.inc.php";
	if(isset($_POST['submit'])){
		$username = $_POST['user_name']	;
		$code = $_POST['code'];
		if(empty($username)||empty($code)){
			header("Location: forgotform.php?invalid");
			exit();
		}else{
			// check if username exists  in db 
			$sql = "SELECT * FROM  user_details WHERE uname='$username'" ;
			$result = $conn->query($sql);
			$count = $result->num_rows ;
			if($count < 0){
				header("Location: forgotForm.php?error");
				exit();
			}else{
				$sql = "SELECT *  FROM  user_details WHERE unique_code='$code'" ;
				$result = $conn->query($sql) ;
				$cnt = $result->num_rows;
				$row = $result->fetch_assoc();
				if($cnt > 0){
					$_SESSION['user_id'] = $row['id'] ;
					header("Location: newpass.php");
					exit();
				}else{
					header("Location: forgotform.php?error");
					exit();
				}
			}
		}
	}else if(isset($_POST['change'])){
		if(empty($_POST['newpass'])){
			header("Location: newpass.php?empty");
			exit();
		}else{
			$pass = $_POST['newpass'];
			$sql = " UPDATE user_details SET password = '$pass'" ;
			$conn->query($sql);
			header("Location: index.php?changeSucess");
			exit();
		}
	}else{
		header("Location: forgotform.php?error");
		exit();
	}
