<?php

	/* --- update marks section ---*/

if(isset($_POST['update'])){
	include 'connection.php';
	
	$roll = $_POST['rollno'];
	$sem = $_POST['semester'];
	$sub1 = $_POST['subject1'];
	$sub2 = $_POST['subject2'];
	$sub3 = $_POST['subject3'];
	$sub4 = $_POST['subject4'];
	$prct = $_POST['practical'];
	$total = $_POST['total'];
	
	 $updatemarks = mysqli_query($conn,"UPDATE `marks` SET `subject1`=$sub1,`subject2`=$sub2,`subject3`=$sub3,`subject4`=$sub4,`practical`=$prct,`total`=$total WHERE rollno = $roll and semester = $sem ");
	
	if($updatemarks){
		$srchmsg = 'Marks Updates Successfully';
	}else{
		$srcherr = "Student Record Doesn't Exist<br>";
		
	}
}
?>