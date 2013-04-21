<?php 
	// Config file connecting to database. 

	date_default_timezone_set("America/Chicago");	// for Central Time

	$connection = new mysqli('localhost','cyshare','lo7’;ISq','cyshare');
	
	if($connection->connect_error)
	{
		die('Connection Issue: '.$connection->connect_errno .' '.$connection->connect_error);
	}
	
?>