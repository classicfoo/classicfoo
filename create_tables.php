<?php
unlink('data.db');
$db = new SQLite3('data.db');
$db->exec("CREATE TABLE IF NOT EXISTS task(
	  	id INTEGER PRIMARY KEY AUTOINCREMENT,
		subject text,
		contents text
	);"
);
$db->exec("CREATE TABLE IF NOT EXISTS blog (
	  	id INTEGER PRIMARY KEY AUTOINCREMENT,
		subject text,
		contents text,
		date text
	);"
);
?>
