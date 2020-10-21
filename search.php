<?php
	include_once('inc/header.php');
	include_once('inc/connection.php');
	session_start();
	databaseConnection();
	if(isset($_POST['submit'])){
		$roll = $_POST['roll'];
		$board = $_POST['board'];
		if(empty($roll) && empty($board)){
			$error = "All fields are required";
		}
		else if(empty($roll)){
			$error = "Roll can not be empty";
		}
		elseif(empty($board)){
			$error = "Board can not be empty";
		}
		
		else{
			$data = $conn->query("select * from student_info where roll = $roll and board = '$board'");
			$row = $data->num_rows;
			if($row==1){
				header('location:result.php');
				$_SESSION['roll']= $roll;
				$_SESSION['board']= $board;
			}
			else{
				$error = "The roll number doesn't exist";
			}




		}
	}

?>

<div class="container mt-5">
	
	<form action="" class="w-50 m-auto" method="post">
		<h5 class="text-center">HSC RESULT 2020 (FAKE)</h5>
		<?php
			if(!empty($error)){
				echo "<h4 class='text-danger'>".$error."</h4>";
			}

		?>
		<div class="form-group">
			<div class="row">
				<label for="" class="col-md-2">Enter Roll</label>
			    <input type="text" class="col-md-6 form-control" name="roll">
			</div>
			
		</div>
		<div class="form-group">
			<div class="row">
				 <label for=""class="col-md-2">Board</label>
			   	    <select name="board" id=""class="col-md-6 form-control">
				   	  	<option value="">--Select--</option>
				   	  	<option value="Dhaka">Dhaka</option>
				   	  	<option value="Cumilla">Cumilla</option>
				   	  	<option value="Mymensingh">Mymensingh</option>
				   	  	<option value="Chittagong">Chittagong</option>
				   	  	<option value="Jessore">Jessore</option>
				   	  	<option value="Rajshahi">Rajshahi</option>
				   	  	<option value="Sylhet">Sylhet</option>
				   	  	<option value="Barishal">Barishal</option>
				   	  	<option value="Rangpur">Rangpur</option>
				   	  	<option value="Dinajpur">Dinajpur</option>
			   	  </select>
			</div>
			
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="search" name="submit">		
		</div>
	</form>
</div>

















<?php
	include_once('inc/footer.php');


?>