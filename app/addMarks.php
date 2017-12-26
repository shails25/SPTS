<?php 

	/* ---   Add Student Marks Sql Coding ---*/

if(isset($_POST['addmarks'])){
	include 'connection.php';
	
	$roll = $_POST['rollno'];
	$sem = $_POST['semester'];
	$sub1 = $_POST['subject1'];
	$sub2 = $_POST['subject2'];
	$sub3 = $_POST['subject3'];
	$sub4 = $_POST['subject4'];
	$practical = $_POST['practical'];
	$total = $_POST['total'];
	
	$addmarks = mysqli_query($conn,"INSERT INTO marks(rollno, semester, subject1, subject2, subject3, subject4, practical, total) VALUES('$roll', '$sem', '$sub1',  '$sub2', '$sub3', '$sub4', '$practical', '$total') ");
	
	if($addmarks){
		$addmsg = 'Marks Added Successfully';
	}else{
		$adderr = "Student Record Doesn't Exist<br>";
		mysqli_close($conn);
	}
	
}