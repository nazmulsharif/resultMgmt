<?php
	include_once('inc/connection.php');
	include_once('inc/header.php');
	include_once('inc/functions.php');
	session_start();
	if(empty($_SESSION['email'])||empty($_SESSION['pass'])){
		header('location:index.php');
	}
	if(isset($_POST['submit'])){


		$name =  $_POST['name'];
		$mname = $_POST['mname'];
		$roll = $_POST['roll'];

		$bangla =$_POST['bangla'];
		

		$english= $_POST['english'];
		

		$math= $_POST['math'];
		

		$fname= $_POST['fname'];
		$inst=  $_POST['inst'];
		$board= $_POST['board'];

		$science= $_POST['science'];
		

		$social=  $_POST['social'];
		

		$religion= $_POST['religion'];
		
		
		
		if(empty($name)||empty($mname)||empty($roll)||empty($bangla)||empty($english)||empty($math)||empty($fname)||empty($inst)||empty($board)||empty($science)||empty($social)||empty($religion)){

			$error = "All fields must be required";
		}
		else
		{
			$total_marks = $bangla + $english + $math + $science + $social + $religion;
			$bangla_gp = student_grade_point($bangla);
			$bangla_g = student_grade($bangla);
			$english_gp = student_grade_point($english);
			$english_g = student_grade($english);
			$math_gp = student_grade_point($math);
			$math_g = student_grade($math);
			$science_gp = student_grade_point($science);
			$science_g = student_grade($science);
			$social_gp = student_grade_point($social);
		    $social_g = student_grade($social);
		    $religion_gp = student_grade_point($religion);
		    $religion_g = student_grade($social);
		    $gp = $bangla_gp + $english_gp +$math_gp + $science_gp + $social_gp + $religion_gp;
			$final_gp = $gp/6;	
			$final_g =student_final_grade($final_gp);

			$conn->query("insert into student_info(name,mname,roll,bangla,english,math,fname,inst,board,science,social,religion,bangla_g,bangla_gp,english_g,english_gp,math_g,	math_gp,science_g,science_gp,social_g,social_gp,religion_g,religion_gp,	total_marks,f_gpa,f_grade)values('$name','$mname',$roll,$bangla,$english,$math,'$fname','$inst','$board',$science,$social,$religion,'$bangla_g',$bangla_gp,'$english_g', $english_gp,'$math_g',	$math_gp,'$science_g',$science_gp,'$social_g',$social_gp,'$religion_g',$religion_gp,$total_marks,$final_gp,'$final_g')");
			$success = "Data is inserted successfully";


		}
		
}


?>
<div class="container">
	<ul class="list-unstyled list-inline bg-info text-light">
		<li class="list-inline-item" ><img  style="width:100px;height:100px" src="images/<?php echo $_SESSION['image']?>" alt=""></li>
		<li class="list-inline-item"><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></li>
		<li class="list-inline-item float-right mt-4"><a href="inc/logout.php" style="color:#fff;float:right;">Log out</a></li>
	</ul>
</div>
<div class="container">
	<h4 class="text-center">Enter Student Result Information</h4>
	<hr>
	<?php
		if(!empty($error)){
			echo "<h4 class='alert alert-danger text-center'>".$error."</h4>";
		}
		if(!empty($success)){
			echo "<h4 class='alert alert-success text-center'>".$success."</h4>";
		}

	?>
    <form action="" method="post">
    	<div class="row">
		
		    <div class="col-md-6">
		       <div class="form-group">
			   	   <label for="">Candidate Name</label>
			   	   <input type="text" class="form-control" name="name">
			   </div>
               <div class="form-group">
			   	   <label for="">Mother Name</label>
			   	   <input type="text" class="form-control" name="mname">
			   </div>
			   <div class="form-group">
			   	   <label for="">Roll</label>
			   	   <input type="text" class="form-control" name="roll">
			   </div>
			   <div class="form-group">
			   	   <label for="">Bangla</label>
			   	   <input type="text" class="form-control" name="bangla">
			   </div>
			   <div class="form-group">
			   	  <label for="">English</label>
			   	  <input type="text" class="form-control" name="english">
			   </div>
			   <div class="form-group">
			   	  <label for="">Mathematics</label>
			   	  <input type="text" class="form-control" name="math">
			   </div>
		    </div>

		    <div class="col-md-6">
		    	<div class="form-group">
			   	   <label for="">Father Name</label>
			   	   <input type="text" class="form-control" name="fname">
			   </div>
			   <div class="form-group">
			   	   <label for="">Insititution Name</label>
			   	   <input type="text" class="form-control" name="inst">
			   </div>
			   <div class="form-group">
			   	   <label for="">Board</label>
			   	    <select name="board" id="" class="form-control">
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
			    <div class="form-group">
			   	   <label for="">Science</label>
			   	   <input type="text" class="form-control" name="science">
			    </div>
			    <div class="form-group">
			   	   <label for="">Social Science</label>
			   	   <input type="text" class="form-control" name="social">
			    </div>
			    <div class="form-group">
			   	  <label for="">Religion</label>
			   	  <input type="text" class="form-control" name="religion">
			    </div>
		    </div>
		    <div class="col-md-4">
		    	<input type="submit" class="btn btn-success" name="submit">
		    </div>
		   
	
	
		
	    </div>
    </form>
	

</div>









<?php include_once('inc/footer.php');?>