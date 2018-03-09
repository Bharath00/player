<?php 
	if(isset($_POST["submit"])){
		// Fetch the files and store them in the folder..
		foreach ($_FILES as $files) {
			$dir = "uploaded/"  ;
			$target_dir = $dir.basename($files['name']) ;
			if(move_uploaded_file($files['tmp_name'], $target_dir)){
				echo "moved" ;
			}else{
					echo "no" ;
			}
		}
		// Fetch the album name and all the artists ..
		$album_name = 	trim($_POST['alname']) ; 
		$artists    =   trim($_POST['artname']) ;


		if(empty($album_name)||empty($artists)){
			header("Location: uploadform.php?name=empty") ;
			exit() ;
		}else{
			if(!preg_match("/^[a-z][A-Z]/", $album_name)|| !preg_match("/^[a-z][A-Z]/", $artname)){
				header("Location: uploadform.php?invalidCharacters") ;
				exit() ;
			}else{
					// Insert it into the databases ....
			}
		}
}