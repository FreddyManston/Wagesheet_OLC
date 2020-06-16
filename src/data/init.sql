CREATE DATABASE olc_wagesheet;

	use olc_wagesheet;

	CREATE TABLE users (
		id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		contact VARCHAR(12) NOT NULL,		-- allow for e.g. +27xxyyyzzzz
		sa_id VARCHAR(13) NOT NULL,
		bank VARCHAR(20) NOT NULL,
		account VARCHAR(12) NOT NULL,
		date TIMESTAMP
	);