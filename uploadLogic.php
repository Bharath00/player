<?php 

session_start() ;
include "db/db.inc.php" ;

function randomDigits($length){
	$numbers = range(0,100);
	shuffle($numbers);
	$digits = "";
	for($i = 0;$i < $length;$i++)
		$digits .= $numbers[$i];
	return $digits;
}
$album = randomDigits(4);

if(isset($_POST['submit'])){

	$album_name =  trim($_POST['alname']) ; 
	$artists =   trim($_POST['artname']) ;
	$year  = 	date("y/m/d") ;
	$s_id  = $_SESSION['user_id'] ;


	 

	if(empty($album_name)||empty($artists)){
		header("Location: uploadform.php?emptyfields") ;
		exit() ;
	}else{
		if(!preg_match("/[a-zA-Z]/",$album_name)||!preg_match("/[a-zA-Z]/",$artists)){
			header("Location: uploaderform.php?invalidCharacters") ;
			exit() ;
		}else{
					

			//Album logic
				foreach ($_FILES as $img) {
 					if($img['type']=='image/jpeg'){
 						$name = basename($img['name']);
 						$album_id  = $album ; 
 						//creating the folder
						mkdir("uploaded/".$album_id);
						$path = "uploaded/".$album.'/'  ;
						// moving the image file
 						move_uploaded_file($img['tmp_name'], "$path/$name")	 ;
 						$flag = true ; 					
 					}	
    			}
    			if($flag==true){
				foreach ($_FILES as $files){
					if($files['type']=="audio/mpeg" && $files['size']<104857600){
						$name = basename($files['name']) ;
						move_uploaded_file($files['tmp_name'],"$path/$name");
						
						//inserting into database code will come here ...
						$path1 = $album.'/';
						$stmt =$conn->prepare("INSERT INTO albums (al_id,user_id,album_name,artists,year,file_loc) VALUES (?,?,?,?,?,?)");
						$stmt->bind_param("iissss",$album_id,$s_id,$album_name,$artists,$year,$path1);
						$stmt->execute();

				}
			}
		}	else{
					
					header("Location: uploadform.php?uploadFailed");
					exit();
				}	
			 }
			 header("Location: albums.php");
			 exit() ;
		}
	}
else{
	header("Location: uploadform.php?error");
	exit();
}			 
		

