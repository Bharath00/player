<?php

if(isset($_POST['submitfile'])){

	$total = count($_FILES['upload']['name']) ;
	for($i=0; $i<$total; $i++){
	$tmpFilepath = $_FILES['upload']['tmp_name'][$i] ;
	if($tmpFilepath != ""){
		$newFilepath = "upload/" .$_FILES['upload']['name'][$i] ;
		if(move_uploaded_file($tmpFilepath, $newFilepath)){
			header("Location: index.php") ;
			exit() ;	
			}
		}

	}
}

