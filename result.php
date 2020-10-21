<?php
	include_once('inc/header.php');
	include_once('inc/connection.php');
	databaseConnection();
	session_start();
	if(empty($_SESSION['roll'] || empty( $_SESSION['board']))){
		header('location:search.php');
	}
	$roll = $_SESSION['roll'];
	$board = $_SESSION['board'];
	$data = $conn->query("select *  from student_info where roll = $roll and board = '$board'");
	

?>
<div class="container">	
	<h2 class="text-center"> HSC RESULT 2020</h2>
  <?php while($dt = $data->fetch_assoc()){ ?>
  		<div class="showResult w-50 m-auto">	
            <h5>Candidate Name:  <?php echo $dt['name'];?></h5>
            <h5>Institution Name:  <?php echo $dt['inst'];?></h5>
            <h5>Board:  <?php echo $dt['board'];?></h5>
            <h5>Father Name:  <?php echo $dt['fname'];?></h5>
            <h5>Mother Name:  <?php echo $dt['mname'];?></h5>
            <hr>	
            <h4 class="text-center text-success">Result Sheet</h4>
            <h5>Bangla:  <?php echo $dt['bangla_g'];?></h5>
            <h5>English:  <?php echo $dt['english_g'];?></h5>
            <h5>Mathematics:  <?php echo $dt['math_g'];?></h5>
            <h5>Science:  <?php echo $dt['science_g'];?></h5>
            <h5>Social Science:  <?php echo $dt['social_g'];?></h5>
            <h5>Religion:  <?php echo $dt['religion_g'];?></h5>
            <h5 class="text-primary">Final Grade:  <?php echo $dt['f_grade'];?></h5>
            <h5 class="text-info">Final GPA:  <?php echo $dt['f_gpa'];?></h5>

  		</div>	
	<?php }?>
	<a href="inc/back.php" class="btn btn-danger">Search Again</a>
</div>	










<?php include_once('inc/footer.php')?>