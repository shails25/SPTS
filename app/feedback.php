<?php

	if(isset($_POST['submit'])){
	include 'connection.php';
	
	$roll = $_POST['rollno'];
	$name = $_POST['name'];
	$request = $_POST['request'];
	$date = date("l jS \of F Y");
  
	$insert = "insert into feedback(rollno, name, request, date) values('$roll','$name','$request','$date')";
		if(mysqli_query($insert)){
			$msg = 'Request submitted successfully';
		}else{
		   $err = 'Contact Your Admin bla bla';
		}
	
	mysqli_close();
	
}