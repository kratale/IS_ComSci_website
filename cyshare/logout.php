<?php
	// 


	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_NAME']);
	session_unset();
	
	echo "logout succesful, redirecting";
	header("Refresh: 1; URL = http://cyshare.cs.iastate.edu/index.php");
?>
