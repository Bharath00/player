<?php

if(isset($_POST['submitfile']) )
{

	$target_dir = "upload/";
	$target_file = $target_dir.basename($_FILES["audioFile"]["name"]);
	//move_uploaded_file($_FILES['audioFile']["tmp_name"] , $target_file);

    if (move_uploaded_file($_FILES["audioFile"]["tmp_name"], $target_file)) {
    	echo "The file ". basename( $_FILES["audioFile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



