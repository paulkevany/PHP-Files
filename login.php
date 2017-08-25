<!DOCTYPE html>
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
					<li><a href="login.php">Login</a></li>
					<style>.login-item{
						float-right;
					}</style>
					</class>
                </ul>
            </div>
        </div>
    </nav>
	<div class="container">
        <div class="jumbotron">
		<form action="login.php" method="POST">
		<ul>
		<center>
		<h1>Log in</h1><br />
		<li>Username:</li>
		<li><input type="text" name="login_username"/></li><br />
		<li>Password:</li>
		<li><input type="password" name="login_password"/></li><br />
		<li><input type="submit" name="login_btn" value="Log In!"/></li>
		</center>
		</form>
		</div>
		</body>
		<hr>
        <div class="row">
            <div class="col-xs-12">
                <footer>
                    <p>&copy; Copyright 2014 Track Finder &nbsp &nbsp <a href="privacy-policy.php">Privacy Policy</a></p>
					
                </footer>
            </div>
        </div>


<?php
session_start();
error_reporting(0);
require('connection.php');

if(isset($_POST['login_username'])&& isset($_POST['login_password'])){
	$username = $_POST['login_username'];
	$password = $_POST['login_password'];
	$query = "SELECT * FROM `users` WHERE login_username = '$username' and login_password = '$password' and id = '$id'";
	
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	

	
	if($count = 1){
		$_SESSION['login_username'] = $username;
		while($row = mysql_fetch_assoc($query))
		{
		
	}
	
}
}

?>