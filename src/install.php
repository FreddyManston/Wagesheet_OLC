<?php

/**
  * Open a connection via PDO to create a
  * new database and table with structure.
  */

require "config.php";

try {
	$connection = new PDO("mysql:host=$host", $username, $password, $options);
	$sql_path = "data/init.sql";
	$sql = file_get_contents($sql_path);
	$connection->exec($sql);

	echo "Database and tables created successfully using the $sql_path script.";
} 
catch(PDOException $error) {
	echo $sql . "<br>" . $error->getMessage();
}