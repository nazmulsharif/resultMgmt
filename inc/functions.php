<?php 
	include_once('connection.php');
	databaseConnection();
		
	function insertData(){
		global $conn;
		global $msg;
		if(isset($_POST['submit'])){
			$fname =  $_POST['fname'];
			$lname =  $_POST['lname'];
			$email = $_POST['email'];
			$pass =  $_POST['pass'];
			$conpass =  $_POST['conpass'];
			$gender = $_POST['gender'];
			$img_name= $_FILES['image']['name'];
			$img_name_array = explode('.',$img_name);
			$ext = end(	$img_name_array);
			$img_final_name = time().md5($img_name).".".$ext;
			$img_temp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($img_temp_name, 'images/'.$img_final_name);
			if(empty($fname)|| empty($lname) || empty($email) || empty($pass) || empty($conpass)|| empty($gender)){
				echo "All fields must be required";
			}
			elseif ($pass != $conpass) {
				echo "please confirm password";
			}
			elseif(in_array($ext, ['jpg','png','jpeg','gif'])==false){
				echo "image is invalid";
			}
			else{
				$conn->query("insert into reg_info(fname,lname,email,pass,gender,image)values('$fname','$lname','$email','$pass','$gender','$img_final_name')");
				$msg = "Data is inserted successfully";
			}
		}
	}


	function student_grade_point($num){
		if($num>=0 && $num<33){
			$grade = 0;
		}elseif($num>=33 && $num<40){
			$grade =1;
		}elseif($num>=40 && $num<50){
			$grade =2;
		}elseif($num>=50 && $num<60){
			$grade =3;
		}elseif($num>=60 && $num<70){
			$grade =3.5;
		}elseif($num>=70 && $num<80){
			$grade =4;
		}elseif($num>=80 && $num<=100){
			$grade =5;
		}else{
			$grade =0;
		}
		return $grade;
	}
	function student_grade($num){
		if($num>=0 && $num<33){
			$grade = 'F';
		}elseif($num>=33 && $num<40){
			$grade ='D';
		}elseif($num>=40 && $num<50){
			$grade ='C';
		}elseif($num>=50 && $num<60){
			$grade ='B';
		}elseif($num>=60 && $num<70){
			$grade ='A-';
		}elseif($num>=70 && $num<80){
			$grade ='A';
		}elseif($num>=80 && $num<=100){
			$grade = 'A+';
		}else{
			$grade ='F';
		}
		return $grade;
	}
	function student_final_grade($gp){
		if($gp==5){
			$grade = 'A+';
		}elseif($gp>=4 && $gp<5){
			$grade = 'A';
		}elseif($gp>=3.5 && $gp<4){
			$grade = 'A-';
		}elseif($gp>=3 && $gp<3.5){
			$grade = 'B';
		}elseif($gp>=2 && $gp<3){
			$grade = 'C';
		}elseif($gp>=1 && $gp<2){
			$grade = 'D';
		}else
			$grade = 'F';
		return $grade;
	}
	
	



?>