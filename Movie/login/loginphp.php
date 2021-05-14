<?php
$servername="localhost";
$username="root";
$password="";
$dbname="movie";
$tbl_name="login";
session_start();
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed" . mysqli_connect_error());
}
$mail=$_POST['email'];
$password=$_POST['password'];
if($mail!=NULL)
{
$sql="SELECT * FROM login WHERE email='$mail'";
$result = mysqli_query($conn,$sql);
if(!$result)
{
die('Could get data:'.mysqli_error());
}
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$d="{$row['password']}";
$user="{$row['name']}";
if($d==$password)
{
	if ($user=='admin') {
		header("Location:http://localhost/movie/admin/admin.php");
	}
	else
	{
	header("Location: http://localhost/movie/main/main.php");
	$_SESSION["mail"]=$user;
	}
}
else
{
	header("Location: http://localhost/movie/login/login2.php");
$_SESSION["in"]="Incorrect Password";
}
mysqli_close($conn);
}
else
{
	header("Location: http://localhost/movie/login2.php");
}
?>
