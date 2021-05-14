<!DOCTYPE html>
<html>	
<head>
	<title>Book Tickets</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body >
	<br/>
	&nbsp;
	<br/>
<?php

session_start();
?>
	<br/>
	
	<center>
	<table >
	<tr>
	<td>
	<center><img src="loginlogo.png" width="100" height="100"></center>&nbsp;
	<center><h3 style="color: #ffffff">USER LOGIN</h3></center>
	<form method="POST" action="loginphp.php" class="box">
		<input type="email" name="email" placeholder="Email"><br>
		<br> 
		<input type="Password" name="password" placeholder="Password"><br>
		<p >&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/movie/signin/signin.php" style="color: white">Create New account</p>
		<br><center><input type="submit" value="LOGIN" ></center><br>
	</form>
	</td>
	</tr>
	</table>
	</center>
</body>
</html>
