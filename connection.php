<?php
$connection = mysql_connect('localhost', 'root', '');

if(!$connection){
	die('Database Connection Failed');
}

$selectdb = mysql_select_db('trackdb');
if(!$selectdb){
	die('Database selection Failed');
}

?>