<html lang="en">
<head>
<meta charset="UTF-8">
<title>Track-Finder</title>
<link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
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
        <div class="jumbotron">
           <center> <h1>Contact Us</h1><br />
		   <form action="contact-us.php" method="POST"/>
		   <ul>
		   <li>Your Name: </li>
		   <li><input type="text" name="name"/></li><br />
		   <li>Email Address:</li>
		   <li><input type="text" name="email"/></li><br />
		   <li>Username:</li>
		   <li><input type="text" name="username"/></li><br />
		   <li>Your Message:</li>
		   <li><textarea name="message"> </textarea><br />
		   <br />
		   <li><input type="submit" name="send" value="Send"/></li>
		   </form>
		   </center>
		   </div>
		  <hr>
        <div class="row">
            <div class="col-xs-12">
                <footer>
                    <p>&copy; Copyright 2014 Track Finder &nbsp &nbsp <a href="privacy-policy.php">Privacy Policy</a></p>
					
                </footer>
            </div>
			</body>
		   
		   
<?php
require('connection.php');

error_reporting(0);

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$message = $_POST['message'];

if(isset($_POST['send'])){
$query = "INSERT INTO `contact-us` (name, email, username, message) VALUES ('$name', '$email', '$username', '$message')";
$query = mysql_query($query);
}

?>
		   