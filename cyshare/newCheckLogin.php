<?php

	$userName = $_POST['userName'];
	$passHash = hash("sha256", $_POST['pass']);
	
	if(strlen($_POST['userName']) == 0 || strlen($_POST['pass']) == 0){
		echo "One or more fields missing, redirect in 4 seconds";
		header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/newLogin.php");
	}

	$userTable = "userInfo";
	$con=mysqli_connect("localhost");
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error($con) . ", redirect in 4 seconds";
	  header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/newLogin.php");
	}
	
	$checkUserName = "SELECT userName FROM userInfo WHERE userName='$userName'";
	$result = $con -> query($checkUserName);
	if(!result){
		echo "user name not found, redirect in 4 seconds";
		header("Refresh: 4; URL = cyshare.cs.iastate.edu/newLogin.php");
	}
	else{
		$checkpassHash= "SELECT passwordHash FROM userInfo WHERE passwordHash='$passHash'";
		$result = $con -> query($checkpassHash);
		
		if(!result){
			echo "Invalid password, redirect in 4 seconds";
			header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/newLogin.php");
		}
		else{
			session_start();
			$_SESSION['SESS_USER'] = $userName;
			header("Refresh: 1; URL = http://cyshare.cs.iastate.edu/index_member.php");
		}
	}
?>