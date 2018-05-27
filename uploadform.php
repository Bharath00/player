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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/teststyle.css">
    
</head>

<body> 

<nav class="navbar  navbar-light" style="background-color : #50a8a1;">
			<a class="navbar-brand" href="index.php">
				<img src="assets/logo.svg" width="32" height="32" class="d-inline-block align-centre" alt="media img">
				Music Player
			</a>
        <?php 
        if(isset($_SESSION['user_id'])){
            echo '<form action="logout.php" method="POST"> 
            <a href="albums.php" class="btn btn-link"><i class="fa fa-archive">&nbsp; My Albums</i></a>
            <button name="logout" class="btn btn-mdb-color">Logout </button>
            </form>' ;  
        }
        ?>
</nav>
<br/>


<!-- Main upload form -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="uploadLogic.php" enctype="multipart/form-data">
                <p class="h4 text-center py-4">Upload your content here ..</p>
                <div class="md-form">
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="alname" required>
                    <label for="materialFormCardNameEx" class="font-weight-light">Album name</label>
                </div><br/>

            <!-- Material input email -->
                <div class="md-form">
                    <input type="text" id="materialFormCardEmailEx" class="form-control" name="artname" required>
                    <label for="materialFormCardEmailEx" class="font-weight-light">Artists name..</label>
                </div><br/>

                <!-- Album thumbnail -->
                 <div class="alert alert-info" role="alert">
                    <strong>Upload Cover / Thumbnail</strong> Only jpeg format supported
                </div>

                <div class="md-form">
                	<input type="file" accept="image/*" name="cover_art" required>
                </div><br/>

                <!-- File upload -->

                <div class="alert alert-info" role="alert">
                    <strong>Maximum limit !</strong> Only a maximum of 5 tracks can be uploaded.
                </div>

                <div class="md-form" id="file_id" accept="audio/*">
                    <input type="file" name="file_0">
                </div>
           
                <div class="text-center py-4 mt-3">
                    <a id="add_more" class="btn btn-indigo" type="submit"><i class="fa fa-plus">&nbsp; Add next</i></a>
                    <button  class="btn btn-dark" type="submit" name="submit"><i class="fa fa-cloud-upload">&nbsp; Upload</i>
                    </button>     
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

