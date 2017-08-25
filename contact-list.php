<?php
error_reporting(0);

$conn = require('connection.php');

$sql = 'SELECT name, email, username, message FROM contact_us';

mysql_select_db('trackdb');

$retval = mysql_query($sql);

if(!($retval)){
	die("Couldn't Fetch Data!" . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_NUM)){
	echo "<center>Name :{$row[0]}  <br> ".
         "Email : {$row[1]} <br> ".
         "Username : {$row[2]} <br> ".
		 "Message: {$row[3]} <br> ".
         "--------------------------------<br>";
}
mysql_free_result($retval);
echo("Fetched Data Successfully!");
mysql_close($conn);


?>