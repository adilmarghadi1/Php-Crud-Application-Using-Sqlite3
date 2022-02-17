<?php
	$conn = new PDO('sqlite:db/employees.sqlite3');
 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	$query = "CREATE TABLE IF NOT EXISTS student (student_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, firstname TEXT, lastname TEXT,date TEXT,département TEXT, salaire TEXT, fonction TEXT, photo filename)";
 
	$conn->exec($query);
?>