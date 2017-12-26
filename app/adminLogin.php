<?php 
	
	if(isset($_POST['login'])){
		require 'app/connection.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		
	//Select database table 
		$query = mysqli_query($conn,"select * from users where username='$username' and password='$password'") ;
		
		if($query){
			$row = mysqli_num_rows($query);
			if($row == 1){
				$_SESSION['user'] = $username;
				$_SESSION['pass'] = $password;
				$msg = 'You have logged in successfully';
				header("Refresh:2; url=adminlogged.php");
			}else{
				$err = 'username or password is incorrect';
			}
		}else{
			$err = 'username or password is incorrect';
		}
		mysqli_close($conn);
	}