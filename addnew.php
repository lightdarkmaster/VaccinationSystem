<?php
	include('connection.php');
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middlename=$_POST['middlename'];
	$address=$_POST['address'];
	$firstdose=$_POST['firstdose'];
	$seconddose=$_POST['seconddose'];

 
	mysqli_query($conn,"insert into user (firstname, lastname, middlename, address, firstdose, seconddose) values ('$firstname', '$lastname','$middlename', '$address','$firstdose','$seconddose')");
	header('location:index.php');
 
?>