


<html lang="en">
<head>
<meta charset="UTF-8">
<title>Track-Finder</title>
<link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="Bootstrap/dist/css/list-style.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-alert.js"></script>
<style type="text/css">
    body{
      padding-top: 70px;
    }
</style>
</head>
<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Track-Finder</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
	
	<div class="container">
        <div class="jumbotron" align="block">
            <h1><center>Sign Up</center></h1><br />
            <form action="register.php" method="POST">
			<center>
			<p><?php$success ?></p>
			<ul>
			<li><p>First Name: </li> <li>	<input type="text" name="first_name"/></p><br /></li>
			<li><p>Last Name: </li>	<li><input type="text" name="last_name"/></p><br /></li>
			<li><p>Username:</li> <li><input type="text" name="username" /></p><br /></li>
			<li><p>Email: </li>	<li><input type="email" name="email"/></p><br /></li>
			<li><p>Confirm it:</li>	<li><input type="email" name="confirm_email"/></p><br /></li>
			<li><p>Password: </li> <li><input type="password" name="Password"/></p><br /></li>
			<li><p>Confirm it:</li><li> <input type="password" name="confirm_password"/></p><br /></li>
			<li><p>Country:</li><li> <input type="text" name="country"/></p><br /></li>
			<li><p>Date of birth:</li><li> <input type="date" name="dob"/></p><br /></li>
			<li><p>Referrer:</li><li> <input type="text" placeholder="Email or Username" name="referrer"/><br /></li>
			<li><p><input type="submit" value="Sign Up!" name="register"/></p></li>
			</center>
        </div>
		</div>
		<hr>
        <div class="row">
            <div class="col-xs-12">
                <footer>
                  &nbsp  <p>&copy; Copyright 2014 Track Finder &nbsp &nbsp <a href="privacy-policy.php">Privacy Policy</a></p>
					
                </footer>
            </div>
        </div>
		
		
<?php
//Include the connection script
require('connection.php');

if(isset($_POST['email'])){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = ($_POST['Password']);
$email = $_POST['email'];
$confirm_password = $_POST['confirm_password'];
$confirm_email = $_POST['confirm_email'];
$dateofbirth = $_POST['dob'];
$country = $_POST['country'];
$referrer = $_POST['referrer'];



$query = "INSERT INTO `users` (id, first_name, last_name, username, email, Password, dob, country, referrer) VALUES ('NULL', '$first_name', '$last_name', '$username', '$email', '$password', '$dateofbirth', '$country', '$referrer')";
	$result = mysql_query($query);
	$result = 0;
	if($result = 1){
	header('Location:login.php');
	echo '<script type="text/javascript">alert("User Created Successfully!");</script>';
	
	}else{
		
	}
	}


?>
