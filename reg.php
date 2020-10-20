<?php 
	include_once('inc/connection.php');
	include_once('inc/functions.php');
	databaseConnection();
	insertData();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container mt-5">
		<div class="log_form col-md-6 m-auto">
			<h3 class="text-center">Registration Form</h3>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">First Name</label>
					<input type="text" name="fname" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Last Name</label>
					<input type="text" name="lname" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Enter Email Address</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Enter Password</label>
					<input type="password" name="pass" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Confirm  Password</label>
					<input type="password" name="conpass" class="form-control">
				</div>
				<div class="form-group">
					<label for="">image</label>
					<input type="file" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Gemder</label>
					<input type="radio" name="gender"value="male">male
					<input type="radio" name="gender" value="female">female
				</div>
				<div class="form-group">
					<input type="submit" value="Registration" name="submit" class="btn btn-primary">
					<a href="index.php">are you already registered member?</a>
					<a href="index.php" class="btn btn-info">Login</a>
				</div>
				
			</form>
		</div>
	</div>


	






	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
</body>
</html>
