<?php session_start(); ?>

<html>
<head>
<link href="css/mainstyles-cyclone.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<h1><center>Upload A Project</center></h1>

	<div class = "leftmenu">
		<?php include("includes/sidebar_member.php"); ?>
	</div>
	
	
	<form action="file_upload.php" method="post"
			enctype="multipart/form-data">
	
		<input type="checkbox" name="cTag" value="c"> C <br>
		<input type="checkbox" name="dataStructTag" value="dataStructures" /> Data Structures<br />
		<input type="checkbox" name="cPlusPlusTag" value="cPlusPlus" /> C++<br />
		<input type="checkbox" name="memManTag" value="memoryManagement" /> Memory Management<br />
		<input type="checkbox" name="cSharpTag" value="cSharp" /> C#<br>
		<input type="checkbox" name="objCTag" value="objectiveC" /> Objective C<br />
		<input type="checkbox" name="javaTag" value="java" /> Java<br />
		<input type="checkbox" name="pythonTag" value="python" /> Python<br />
	<center>
		Tags: <input type="text" name="tags"><br>
		<h6>separate multiple tags by white spaces</h6>
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file" /><br>
		<input type="submit" name="submit" value="Submit" />
	</center>
	</form>
	
</html>
</body>