<!DOCTYPE html>
<html>
<head>
	<title>Admin Login!</title>
</head>
<body>

	<?php 

	session_start();

	include '../db/db.inc.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	$username = test_input($_POST['ad_Id']);
	$password = test_input($_POST['ad_Pass']);

	if(empty($username)|| empty($password)){
		header("Location: Logadmin.php?error1");
		exit();
	}else{

		$sql = "SELECT id FROM admin WHERE email='$username' AND password='$password'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$_SESSION['admin_id'] = $row['id'];
			header("Location: adminhome.php");
			exit();
		}else{
			header("Location: logadmin.php?error2");
			exit();
		}
	}
}
?>

	<style type="text/css">
	#test{
		padding-top: 10em;
		padding-left: 27em;
	}
</style>


<div id='test'>
	<h3>Admin Portal</h3>
	<form method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
		<lable>Admin Id : <input type="text" name="ad_Id" min="3" max="10" id="inp1"><br/></lable>
		<br/>
		<lable> Password : <input type="password" name="ad_Pass" min="3" max="30" id='inp2'></lable>
		<br/>
		<br/><button type='submit'>Submit</button>
	</form>
</div>


</body>
</html>