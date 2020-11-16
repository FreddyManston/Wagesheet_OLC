<?php

/** 
  * Configuration for local database connection.
  */
/**
$host			= "localhost";
$username		= "phpuser";
$password		= "m0s@1c$$";
$dbname			= "olc_wagesheet";						// will use later
$dsn			= "mysql:host=$host;dbname=$dbname";	// will use later
$options		= array(
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				);
$db = new PDO($dsn, $username, $password, $options);
*/

/** 
  * Configuration for Heroku database connection.
  */

$credentials = parse_url(getenv("DATABASE_URL"));

$db = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $credentials["host"],
    $credentials["port"],
    $credentials["user"],
    $credentials["pass"],
    ltrim($credentials["path"], "/")
));
