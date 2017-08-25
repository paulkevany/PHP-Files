
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Track-Finder</title>
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
            <h1>Track-Finder</h1>
            <p>Track-Finder is a Free unique tool for people who love the outdoors. Whether your into Walking, Hiking, Mountain-Biking or other outdoor hobbies, Track finder will help you to find suitable Track's in your area based upon your search results. The unique thing about Track-Finder is that it works worldwide.</p>
            <p><small>Track-finder, Your No.1 tool for finding tracks in your area.</small> 
			<p><a href="register.php" class="btn btn-success">Sign Up &raquo;</a></p>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <h2>Sign Up</h2>
                <p>Sign up today for a free account today to get the full benefits from Track-Finder.</p>
                <p><a href="register.php" class="btn btn-success">Sign Up &raquo;</a></p>
            </div>
            <div class="col-xs-4">
                <h2>About Us</h2>
                <p> Click Below to find out more about Track-Finder and how it works.</p>
                <p><a href="about-us.php" class="btn btn-success">About Us &raquo;</a></p>
            </div>
            <div class="col-xs-4">
                <h2>Contact Us</h2>
				<p>If you're having a problem with our site, have a suggestion or found an error please Contact Us.</p>
                <p><a href="contact-us.php" class="btn btn-success">Contact Us &raquo;</a></p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <footer>
                    <p>&copy; Copyright 2014 Track Finder &nbsp &nbsp <a href="privacy-policy.php">Privacy Policy</a></p>
					
                </footer>
            </div>
        </div>
    </div>
</body>
</html>   

<!-- Start of php to check if users session is valid! -->   

<?php
session_start();
//check to see if a session is already active
//IF session is active redirect the user to the profile.php page!
if($_SESSION['login_username']){
echo '<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
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
					<li><a href="profile.php">Profile</a></li>
					<style>.login-item{
						float-right;
					}</style>
					</class>
                </ul>
            </div>';
	
}

?>                         