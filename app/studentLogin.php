<?php

	if(isset($_POST['s_login'])){
	$name = $_POST['name'];
	$roll = $_POST['rollno'];
	$dob = $_POST['dob'];
	
	include 'connection.php';
	$query = mysqli_query($conn,"SELECT * FROM `students` WHERE rollno = '$roll' and dob = '$dob'") ;
		
		if($query){
			$row = mysqli_num_rows($query);
			if($row == 1){
				$_SESSION['sname'] = $name;
				$_SESSION['dob'] = $dob;
				$_SESSION['roll'] = $roll;
				$msg = 'You have logged in successfully';
				header("Refresh:2; url=studentlogged.php");
			}else{
				$err = 'username or password is incorrect';
			}
		}else{
			$err = 'username or password is incorrect';
		}
		mysqli_close($conn); 
}