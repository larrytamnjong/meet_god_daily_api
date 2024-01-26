<?php
	$conn = new mysqli('localhost', 'root', '', 'meet_god_daily_db');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>