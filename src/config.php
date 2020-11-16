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
*/

/** 
  * Configuration for Heroku database connection.
  */

$dsn = "pgsql:"
    . "host=ec2-52-5-176-53.compute-1.amazonaws.com;"
    . "dbname=daiqsc8i889tmh;"
    . "user=uecwjhvfhzqkrf;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=b3fbbc28424ae6331197dc317a0732308efcc2d51f4ddd276fc25699d549acb6";

$db = new PDO($dsn);
