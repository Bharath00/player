<?php
    session_start() ;
        if(!isset($_SESSION['user_id'])){
            header('Location: index.php?filenotfound') ;
            exit() ;
        }
        

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload your files...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body> 

<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
			<a class="navbar-brand" href="index.php">
				<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
				Music Player
			</a>
</nav>
<br/>


<!-- Main upload form -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="uploadLogic.php" enctype="multipart/form-data">
                <p class="h4 text-center py-4">Upload your content here ..</p>
                <div class="md-form">
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="alname">
                    <label for="materialFormCardNameEx" class="font-weight-light">Album name</label>
                </div><br/>

            <!-- Material input email -->
                <div class="md-form">
                    <input type="text" id="materialFormCardEmailEx" class="form-control" name="artname">
                    <label for="materialFormCardEmailEx" class="font-weight-light">Artists name..</label>
                </div><br/>

                <div class="alert alert-info" role="alert">
                    <strong>Maximum limit !</strong> Only a maximum of 5 tracks can be uploaded.
                </div>

                <div class="md-form" id="file_id">
                    <input type="file" name="file_0">
                </div>
           
                <div class="text-center py-4 mt-3">
                    <a id="add_more" class="btn btn-cyan" type="submit">Add next</a>
                    <button  class="btn btn-primary" type="submit" name="submit">Upload</button>     
                </div>
            </form>
        </div>
    </div>
</div>



<!-- End -->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/ext.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>


</body>
</html>

