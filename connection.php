<?php
 
//MySQLi Procedural
$conn = Mysqli_connect("localhost","root","","sample");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>