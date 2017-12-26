<?php 

	/* --- add student form data ---- */

 if(isset($_POST['addstudent'])){
		include 'connection.php';
	 
		$adderr = '';
		$addmsg = '';
		$roll = $_POST['rollno'];
		$name = $_POST['name'];
		$father = $_POST['father'];
		$dob = $_POST['dob'];
		$add = $_POST['address'];
		$gender = $_POST['gender'];
		$mail = $_POST['mail'];
		$mobile = $_POST['mobile'];
		$year = $_POST['year'];
		$insert = mysqli_query($conn,"insert into students(rollno, name, fathername, dob, address, gender, email, mobile, year)"
				. "values('$roll', '$name', '$father', '$dob', '$add', '$gender', '$mail', '$mobile', '$year')");
		if($insert){
			$addmsg = 'Student details added successfuly';
		}else{
			$adderr = 'Student record Exist !!'; 
		}
	   
		mysqli_close($conn);
	}