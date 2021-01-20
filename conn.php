<?php
	$conn = mysqli_connect("localhost", "root", "", "dbmsweb");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>