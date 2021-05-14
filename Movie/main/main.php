<!DOCTYPE html>
<html>
<head>
	<title>Book tickets | Enjoy your movie</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	session_start();
	?>
	<div style="width: 100%" >
		<div style="margin: 0px 0px 0px 400px">
		<img src="tk.png" width="100" height="80">
		<div>	<h4 style="float: right;margin: 30px 50px 0px 0px">Welcome <?php print_r($_SESSION["mail"]) ?> <br><a href="main2.php">LOGOUT <br></a></h4>
		<h1 style="font-family: Trebuchet MS;font-size: 80px">&nbsp;BOOK TICKETS</h1>
	</div>
	</div>
	</div>
			<div class="cont">
	<div class ="tab" id="mytab">
		<img src="mail.png" hspace="15" width="25" height="25"><font size ="3"face= "black"><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm%26ogbl&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" style="text-decoration: none;">
		booktickets@gmail.com</a>
		<button onclick = "window.location.href='http://localhost/movie/login/login.php';" class ="tablinks" target="blank">Login </button>
		<button onclick="window.location.href='http://localhost/movie/signin/signin.php';" class ="tablinks" target="blank">Signin</button>
		<button onclick="window.location.href='http://localhost/movie/bookticket/bookticket.php';" class ="tablinks" target="blank">Book Ticket </button>
		<button onclick="window.location.href='http://localhost/movie/main/main.php';" class ="tablinks" target="blank">Home</button>
	</div>

  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="minari.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="alien.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="inception.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="littlewomen.jpg" alt="New york" style="width:100%;">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>

 <div >
 	&nbsp;<br>
 	<div>
  	<center>
  <h2 style="font-family: arial;color:red">Why Book With Us?</h2>
  <h4 style="font-family: arial;color: red">We offer best movie, special discounts and a seamless online ticket booking experience.</h4>
    <h4 style="font-family: arial;color:red">...............................................................</h4>
  </center>
  <div>
  <table class="table">
  	<tr >
  <td><img src="t1.jpg" width="650" height="400"></td>
  <td><img src="t3.jpg" width="650" height="400"></td>
  </div>
	</tr>
	<tr>
  <div>
  <td><img src="t4.jpg" width="650" height="400"></td>
  <td><img src="t2.jpg" width="650" height="400"></td>
   </tr>
  </table>
  </div>
</div>
</div>

</body>
</html>
