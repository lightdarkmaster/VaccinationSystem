<?php
	include('connection.php');
 
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middlename=$_POST['middlename'];
	$address=$_POST['address'];
	$firstdose=$_POST['firstdose'];
	$seconddose=$_POST['seconddose'];

 
	mysqli_query($conn,"update user set firstname='$firstname', lastname='$lastname', middlename='$middlename', address='$address', firstdose='$firstdose', seconddose='$seconddose' where userid='$id'");
	header('location:index.php');
 
?>