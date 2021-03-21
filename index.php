<?php
$con= mysqli_connect("localhost","root","","ecommerce")
or die(mysqli_error($con));
$select_query= "SELECT id,email_id,first_name FROM users";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
echo $total_rows_fetched;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Lifestyle Store</a>
        </div>
<div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="sign up.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </ul>
</div>
</div>
</nav>
		<div class="inner-header">
			<div class="logo">
				<link rel="stylesheet" type="text/css" href="header">
				<div class="signup">
					<link rel="stylesheet" type="text/css" href="header">
					<div class="login">
						<link rel="stylesheet" type="text/css" href="header">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="content">
		<div class="banner-image">
			<div class="inner-banner-image">
				<center>
				<div class="banner_content">
					<h1>We sell lifestyle.</h1>
					<p>Flat 40% OFF on premium brands.</p>
					<link rel="stylesheet" type="button/css" class="button">
					<a href="login.php"><button class="button">Shop Now</button></a>
					
				</div>
			</center>
			</div>
		</div>
		<div class="container">
		
		<div class="items">
			<a href="login.php">
				<img src="Webimage/10.jpg" class="thumbnail">
				<div class="caption">
					<h2>Watches</h2>
					<p>Original watches from the best brands</p>
				</div>
			</a>
			
		</div><div class="items">
			<a href="login.php">
				<img src="Webimage/1.jpg" class="thumbnail">
				<div class="caption">
					<h2>Cameras</h2>
					<p>Original watches from the best brands</p>
				</div>
			</a>
			
		</div><div class="items">
			<a href="login.php">
				<img src="Webimage/13.jpg" class="thumbnail">
				<div class="caption">
					<h2>Shirts</h2>
					<p>Original watches from the best brands</p>
				</div>
			</a>
			
		</div>
    </div>
<footer class="footer">
	<center>
	<div class="container">
		<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
	</div>
	</center>
</footer>	
</div>
</body>
</html>