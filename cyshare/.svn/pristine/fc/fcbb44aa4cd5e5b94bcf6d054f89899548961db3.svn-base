<?php session_start(); ?>

<html>
<head>
<link href="css/mainstyles-cyclone.css" rel="stylesheet" type="text/css" />
</head>
<style>
.signupHeader
{
    font-weight: bold;
    padding-top: 7px;
    color: red;
    text-shadow: 0px 2px 3px rgba(0,0,0,0.3);
}  
.signupcontainer
{
    padding-left: 20px;
    
}

input{
	padding: 3px;
}
</style>
<body>

	<h1><center>Browse</center></h1>
	
	<?php 
		if($_SESSION['SESS_USER'] != ''){
			include("includes/sidebar_member.php");
		}
		else include("includes/sidebar.php");
		
	?>
	
	<center>
	<table width="200" cellpadding="1" cellspacing="0" border="0">
		<tr> <td>
		<table width="198" cellpadding="3" cellspacing="0" border="0">
		    <tr>
		    <td>
			
		    <form action="browseResults.php" method="post" enctype="multipart/form-data">
		   
		    <table width="192" cellpadding="2" cellspacing="0" border="0">
			<tr>
			<td> 
				<div class="signupHeader">Enter Search Term</div>
				<input type="text" name="searchTerm"> </td>
			</tr>
			  

			  
		   </table>
		   
		   <input type="submit" name="search" value="Search" />
		   </form>
		   </td>
		   </tr>
		</table>
		</td></tr>
	</table>
	</center>
	
</body>
</html>