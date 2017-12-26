<?php

	
/*-- search student section ---*/							
									
if(isset($_POST['search'])){
	$roll = $_POST['rollno'];
	$sem = $_POST['semester'];

	include 'connection.php';

	$select = mysqli_query($conn,"select * FROM marks where rollno = '$roll' and semester = '$sem'");
	if(mysqli_num_rows($select)>0){
		$srchmsg = 'Student record found';
		$_SESSION['sroll'] = $roll;
		$_SESSION['ssem'] = $sem;
	}else{
        $srcherr = 'Student not found !!';
    }
}