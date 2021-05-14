<!DOCTYPE html>
<html>
<head>
	<title>BOOK TICKET</title>
		<link rel="stylesheet" type="text/css" href="bookticket.css">
</head>
<body>
	<br/>
	&nbsp;
	<br/>
	&nbsp;
	<br/>
	<br/>
	<br/>
	
	<br/>
	<br/>
		<?php 
	session_start();
	?>
	<center>
	<table >
	<tr>
	<td>
	<form method="POST" action="bookticketphp.php" class="box">
		
		<h3 style="color: white"><center>BOOK TICKET</center></h3>
		<label for="choice" >Choose A Movie : </label>

		<select name="choice" id="choise">
  			<option value="Minari">Minari</option>
 			<option value="Inception">Inception</option>
  			<option value="Alien">Alien</option>
  			<option value="Little women">Little women</option>
		</select>
		<br><br>
		<label for="time" >Show Timing &nbsp; &nbsp; &nbsp;: </label>
		<select name="time" id="choise">
  			<option value="9.00 AM">9.00 AM</option>
 			<option value="1.00 PM">1.00 PM</option>
  			<option value="4.00 PM">4.00 PM</option>
  			<option value="7.00 PM">7.00 PM</option>
  			<option value="10.00 PM">10.00 PM</option>
		</select>
		<br><br>
		<label for="count" >NO. Of Tickets &nbsp; : </label>

		<select name="count" id="choise">
  			<option value="1">1</option>
 			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
		</select>
		<br><br>
	  <p style="color: white">SEAT&nbsp;&nbsp;&nbsp;:
		&nbsp &nbsp<input type="radio" name="seat" value="DIAMOND">DIAMOND
		&nbsp &nbsp<input type="radio" name="seat" value="GOLD">GOLD
		&nbsp &nbsp<input type="radio" name="seat" value="SILVER">SILVER<br></p>
		<h6 style="color: white">&nbsp &nbsp*By clicking Book ticket, you agree to our Terms and condition.<br> &nbsp &nbsp You may receive SMS notifications from us on sucessful booking.</h6>
		<h4 style="color: red;text-align: center" >SUCCESSFULLY BOOKED</h6>
		<h4 style="text-align: center"><a href="http://localhost/movie/main/main2.php" style="color: red">HOME</a></h6> 
		<center><input type="submit" value="BOOK TICKET" placeholder="BOOK TICKET"></center>
	</form>
	</td>
	</tr>
	</table>
	</center>
</body>
</html>
