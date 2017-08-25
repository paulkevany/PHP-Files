<?php
error_reporting(0);

$conn = require('connection.php');

$sql = 'SELECT first_name, last_name, email, country FROM users';

mysql_select_db('trackdb');

$retval = mysql_query($sql);

if(!($retval)){
	die("Couldn't Fetch Data!");
}
while($row = mysql_fetch_array($retval, MYSQL_NUM)){
	echo "<center>First Name :{$row[0]}  <br> ".
         "Last Name : {$row[1]} <br> ".
         "Email : {$row[2]} <br> ".
		 "Country: {$row[3]} <br> ".
         "--------------------------------<br>";
}
mysql_free_result($retval);
echo("Fetched Data Successfully!");
mysql_close($conn);


?>