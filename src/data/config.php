<?php

/** 
  * Configuration for database connection.
  */

$host			= "localhost";
$username		= "phpuser";
$password		= "m0s@1c$$";
$dbname			= "olc_wagesheet";						// will use later
$dsn			= "mysql:host=$host;dbname=$dbname";	// will use later
$options		= array(
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				);