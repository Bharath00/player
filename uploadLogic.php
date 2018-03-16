<?php 

include "db/db.inc.php" ;

if(isset($_POST["submit"])){
		// Fetch the files and store them in the folder..
	foreach ($_FILES as $files) {
			//Checking for the file type..
		if($files['type']=="audio/mpeg"){
			$dir = "uploaded/"  ;
			$target_dir = $dir.basename($files['name']) ;
			if(file_exists($target_dir)){
				header("Location: uploadform.php?file_exists") ;
				exit();
			}
			else if(move_uploaded_file($files['tmp_name'], $target_dir)){
				 echo "Sucess" ;
			}
		}
		else {
			header("Location: uploadform.php?errorType");
			exit();
		}
	}

		// Fetch the album name and all the artists ..
		$album_name = 	trim($_POST['alname']) ; 
		$artists    =   trim($_POST['artname']) ;

		if(empty($album_name)||empty($artists)){
			header("Location: uploadform.php?name=empty") ;
			exit() ;
		}else{
			if(!preg_match("/[a-zA-Z]/", $album_name)|| !preg_match("/[a-zA-Z]/", $artists)){
				header("Location: uploadform.php?invalidCharacters") ;
				exit() ;
			}else{
				$sql = "INSERT INTO albums (artists,song_name) VALUES ('$artists','$album_name')" ;
				$conn->query($sql) ;
			}
		}
	}