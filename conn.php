<?php
	$conn=mysqli_connect("localhost", "root", "", "db_register_login");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>