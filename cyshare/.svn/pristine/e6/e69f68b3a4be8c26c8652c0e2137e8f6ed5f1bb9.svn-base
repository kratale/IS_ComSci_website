<?php

	$userName = $_POST['userName'];
	$pass = hash("sha256",$_POST['pass']);
	$confirmPass = hash("sha256",$_POST['confirmPass']);
	$email = $_POST['email'];
	
	if(strlen($userName) == 0 || strlen($pass) == 0 || strlen($confirmPass) == 0 || strlen($email) == 0 ){
		echo "One or more fields missing, redirect in 4 seconds";
		header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/newSignup.php");
	}
	
	if($pass != $confirmPass){
		echo "Passwords do not match, redirect in 4 seconds";
		header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/newSignup.php");
	}
	
	$userTable = "userInfo";
	$con=mysqli_connect("localhost","cyshare", "cyshare1", "cyshare");
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error($con) . ", redirect in 4 seconds";
	  header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/newSignup.php");
	}
	
	$checkUserName = "SELECT userName FROM userInfo WHERE userName='$userName'";
	$result = $con -> query($checkUserName);
	if($result){
		echo "User name already exists, redirect in 4 seconds";
		header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/newSignup.php");
	}
	
	$sql = "INSERT INTO " .$userTable." (userName, passwordHash, email) VALUES ('$userName', '$pass', '$email')";
	$result = $con -> query($sql);
	
	if(result){
		echo "Registration successful!";
		header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/index.php");
	}
?>