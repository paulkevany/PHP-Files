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
                    <li class="active"><a href="tracks.php">My Tracks</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
	
		
<?php
error_reporting(0);
require('connection.php');
session_start();

		$id = $_GET['id'];
		if(ctype_digit($id))
		{
			$query = mysql_query("SELECT * FROM users WHERE id = '$id' limit 1");
			if(mysql_num_rows($query) == 1)
			{
				while($row = mysql_fetch_assoc($query))
				{
					echo'<div class="container">
					<div class="jumbotron" align="block">';
					echo $row['first_name'];
					echo $row['last_name'];
					echo $row['country'];
					echo $row['username'];
					echo'</div>';
					echo'</div>';
				}	
			}
			else
			{
				echo 'not found';
			}
		}
		else
		{
			echo 'not valid';
		}
?>