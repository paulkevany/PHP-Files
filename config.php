<?php


date_default_timezone_set("Europe/Dublin"); //Set timezone for server
define("DB_DSN", "mysql:host=localhost;dbname=db1"); //Sets the host and db name for the server
define("DB_USERNAME", "root"); //DB username 
//If i want admin accounts do...

//define("ADMIN_USERNAME", "USERNAME"); //Admin USERNAME set
//define(ADMIN_PASSWORD, "PASSWORD"); //Admin PASS set, However I dont think this is very secure.

//Create a funciton to handle errors and exceptions 

function handleException($exception){

	echo("A problem has occured");
	error_log($exception->getMessage());

}

set_error_handler('handleException');










?>
