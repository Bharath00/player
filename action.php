<?php 
	session_start();
	include "db/db.inc.php" ;

	if(isset($_POST['report'])){
		if(!isset($_SESSION['user_id'])){
			header("Location: loginform.php?required");
			exit();
		}else{
				$tmp_id = $_POST['location'];	
				$file_id = str_replace("/","",$tmp_id);
				$user_id = $_SESSION['user_id'] ;


				// check if the user already has reported it 

				$sql = "SELECT * FROM action WHERE user_id='$user_id' AND album_id='$file_id'";
				$result = $conn->query($sql) ;

				if($result->num_rows > 0 ){
					header("Location: index.php?alreadyReported");
					exit();
				}
				else{

				$sql = "SELECT reports FROM albums WHERE al_id='$file_id'"  ;
				$result = $conn->query($sql) ;
				$row = $result->fetch_assoc();
				$n = $row['reports'];

				$sql = "INSERT INTO action (user_id,album_id) VALUES ('$user_id','$file_id')";
				$conn->query($sql) ;
				$sql = "UPDATE albums SET reports=$n+1 WHERE al_id='$file_id'" ;
				$conn->query($sql) ;



			}
		}
	}

?>