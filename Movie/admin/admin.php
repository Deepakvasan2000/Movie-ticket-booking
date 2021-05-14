<?php
$servername="localhost";
$username="root";
$password="";
$dbname="movie";
$tbl_name="bookticket";
session_start();
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed" . mysqli_connect_error());
}


$sql="SELECT * FROM bookticket ";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if(!$result)
{
die('Could get data:'.mysqli_error());
}
?>
<!DOCTYPE html>
<html>	
	<head>
	<body>
		<table align="center" border="1px" style="width: 600px; line-height:40px;"> <tr>
			<th colspan="4"><h2 >TICKETS SOLD</h2></th>
				</tr>
				<t>
					<th><u>Movie </th>
					<th><u>Time</th>
					<th><u>No.of Tickets </th>
					<th><u>Seat </th>
				</t>
<?php

while($rows=mysqli_fetch_assoc($result))

{
?>  <link rel="stylesheet" type="text/css" href="adminstyle.css">
	<tr id="row">
		<td><b><?php echo $rows['choice']; ?></td>
		<td><b><?php echo $rows['timing']; ?></td>
		<td><b><?php echo $rows['count1']; ?></td>
		<td><b><?php echo $rows['seat']; ?></td>
	</tr>

<?php

}
?>
</table>
</body> 
</html>

<?php
/*if($resultCheck > 0)
{
	while($row = mysqli_fetch_assoc($result)){
		echo $row['timing'].$row['count1']."<br>";
	}
}*/
?>

