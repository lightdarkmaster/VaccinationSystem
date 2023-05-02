<?php
	session_start();
	if(!ISSET($_SESSION['user_id'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://christian.barbosa.com">VACCINATION MANAGEMENT SYSTEM</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Login And Registration</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<center><h1>WELCOME USER</h1></center>
		<body>
			<p>
				<div class="container2"style="background-color: orange;">
				You Are now successfully registered in the Vaccination Registry System.
				</div>
			</p>
		</body>
		<a class="btn btn-danger" href="logout.php">Log Out</a>
	</div>

</body>	
</html>