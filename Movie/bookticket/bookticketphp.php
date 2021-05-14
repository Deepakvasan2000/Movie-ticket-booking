<?php
$servername="localhost";
$username="root";
$password="";
$dbname="movie";
$tbl_name="bookticket";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("COnnection failed" . mysqli_connect_error());
}
	session_start();
$name=$_SESSION["mail"];
$choice=$_POST['choice'];
$time=$_POST['time'];
$count=$_POST['count'];
$seat=$_POST['seat'];

$sql="INSERT INTO $tbl_name(name,choice,timing,count1,seat)VALUES('$name','$choice','$time','$count','$seat')";

if(mysqli_query($conn,$sql))
{
header("Location: http://localhost/movie/bookticket/bookticket2.php");
}
else
{
echo "Error" .$sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);

?>
