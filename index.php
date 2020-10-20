<?php 
	include_once('inc/connection.php');
	databaseConnection();
	session_start();
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$data = $conn->query("select * from reg_info where email = '$email' and pass = '$pass' ");
		$row = $data->num_rows;
		if($row==1){
			header('location:profile.php');
			$_SESSION['email']=$email;
			$_SESSION['pass']=$pass;
			while($dt = $data->fetch_assoc()){
				$_SESSION['fname'] = $dt['fname'];
				$_SESSION['lname'] = $dt['lname'];
				$_SESSION['image'] = $dt['image'];
			}
		}
		else{
			
			header("location:index.php");
		}
	}
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
			<h3 class="text-center">Login Form</h3>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Enter Email Address</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Enter Password</label>
					<input type="password" name="pass" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" value="Log In" name="submit" class="btn btn-primary">
					<a href="">New Member? Please</a>
					<a href="reg.php" class="btn btn-info">Registration</a>
				</div>

				
			</form>
		</div>
	</div>


	






	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
</body>
</html>
