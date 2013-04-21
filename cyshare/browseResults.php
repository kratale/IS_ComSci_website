<?php session_start(); ?>


<html>
<head>
<link href="css/mainstyles-cyclone.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<h1><center>Search Results</center></h1>
	
	<?php 
		if($_SESSION['SESS_USER'] != ''){
			include("includes/sidebar_member.php");
		}
		else include("includes/sidebar.php");
		
	?>

	<?php
		$searchTerm = $_POST['searchTerm'];

		if(strlen($_POST['searchTerm']) == 0){
			echo "search term missing, redirect in 4 seconds";
			header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/browse.php");
		}

		$userTable = "userInfo";
		$con=mysqli_connect();
		// Check connection
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error($con) . ", redirect in 4 seconds";
		  header("Refresh: 4; URL = http://cyshare.cs.iastate.edu/browse.php");
		}
		
		$result = mysqli_query($con,"SELECT projectName FROM fileInfo WHERE tag1 LIKE '%$searchTerm%'");
		
		while($row = mysqli_fetch_array($result)){
			echo "<a href = ".$row['projectName'] . ">" . $row['projectName'] . "</a><br />";
		}
		
		mysqli_close($con);
	?>

</body>
</html>