<?php
	require_once'conn.php';
	if(ISSET($_POST['register'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
 
 
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$name', '$username', '$password')") or die(mysqli_error());
 
		
		echo "<center><h4 class='text-success'>Successfully registered!</h4></center>";
	}
?>