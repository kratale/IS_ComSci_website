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
	<center><h1>Log in</h1></center>
	<?php include("includes/sidebar.php"); ?>

	<center>
	<table width="200" cellpadding="1" cellspacing="0" border="0">
		<tr> <td>
		<table width="198" cellpadding="3" cellspacing="0" border="0">
		    <tr>
		    <td>
			
		    <form action="newCheckLogin.php" method="post" enctype="multipart/form-data">
		   
		    <table width="192" cellpadding="2" cellspacing="0" border="0">
			<tr>
			<td> 
				<div class="signupHeader">Username</div>
				<input type="text" name="userName"> </td>
			</tr>
			  
			<tr>
			<td> 
				<div class="signupHeader">Password</div>
				<input type="password" name="pass"> </td>
			</tr>
			<tr>
			 <td><a href="newSignup.php">Create an Account</a></td>
		   </table>
		   
		   <input type="submit" name="signup" value="Log In" />
		   </form>
		   </td>
		   </tr>
		</table>
		</td></tr>
	</table>
	</center>
	

	<?php


	?>
</body>
</html>