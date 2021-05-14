<?php
$servername="localhost";
$username="root";
$password="";
$dbname="movie";
$tbl_name="login";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("COnnection failed" . mysqli_connect_error());
}
$username=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];

$sql="INSERT INTO $tbl_name(name,email,phone,dob,gender,password)VALUES('$username','$email','$phone','$dob','$gender','$pass')";

if(mysqli_query($conn,$sql))
{
header("Location: http://localhost/movie/login/login.php");
}
else
{
echo "Error" .$sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);

?>
