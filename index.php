<!DOCTYPE html>
<html>
<head>
	<title>PHP/MySQLi CRUD Operation</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		.body1{
			background-image: url("sinovac-vaccination-senior-citizens-comorbidities-covid-19-coronavirus-april-16-2021-002.jpg");
			background-size: cover;	
		}
	</style>

</head>

<body class= "body1">
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:red"><center><strong>PHP Vaccination System with CRUD Operation</strong></center></span>
	<span style="font-size:15px; color:orange"><center><strong>By: Christian Barbosa and Jovert Espino AI -25</strong></center></span>	

		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Middle Name</th>
				<th>Address</th>
				<th>First Dose</th>
				<th>Second Dose</th>
				<th>Action</th>

			</thead>
			<tbody>
			<?php
				include('connection.php');
 
				$query=mysqli_query($conn,"select * from `data`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo ucwords($row['firstname']); ?></td>
						<td><?php echo ucwords($row['lastname']); ?></td>
						<td><?php echo ucwords($row['middlename']); ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['firstdose']; ?></td>
						<td><?php echo $row['seconddose']; ?></td>

						<td>
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
 
			?>
			</tbody>
		</table>
		<a class="btn btn-danger" href="logout.php">Log Out</a>

<footer style="color:red; font-size:11px;">E-Mail: christian.barbosa05222001@gmail.com </></footer>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>