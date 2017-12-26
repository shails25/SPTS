<?php

	/*---- Delete Student Details Sql Coding --*/

if(isset($_POST['delete'])){
	include 'connection.php';
    
	$roll = $_POST['rollno'];
	echo  $roll;
	$select = mysqli_query($conn,"DELETE FROM marks WHERE marks.rollno = '$roll'");

	if($select){
		$delete = mysqli_query($conn,"DELETE FROM students WHERE students.rollno = '$roll'");
        
		if($delete){
			$delmsg = 'Student Record Deleted Successfully';
		}else{
			
			$delerr = "Student does'nt exist";
			mysqli_close($conn);
		}
	}else{
		$delerr = "Student doesn't exist";
		mysqli_close($conn);
	}
    echo $delerr;
    echo $delmsg;
}