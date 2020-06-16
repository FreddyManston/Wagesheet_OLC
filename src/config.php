<?php

/** 
  * Configuration for database connection.
  */

$host			= "localhost";
$username		= "phpuser";
$password		= "phpuser";
$dbname			= "olc_wagesheet";
$dsn			= "mysql:host=$host;dbname=$dbname";
$options		= array(
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				);
