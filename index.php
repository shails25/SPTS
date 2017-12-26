<?php

$page = 'index';

session_start();
if(isset($_SESSION['user'])){
	header("Location: adminlogged.php");
}

?>


<?php include 'app/header.php'; ?>	 

	<!-- Banner start here -------->
	
	<div class="container-fluid banner " id="banner">
		 <div class="row">
			 
			 <div class="banner_cont col-md-10 col-lg-10 col-md-offset-1 ">
				 <h1>Student performance tracking System<span > (SPTS)</span></h1>
				 <p class="text-center">A data analysis & reporting system built by a student for students</p>
			 </div>
			 
		</div>
	</div>
	
	<!-- Banner Ends here 
 <?php 
		include 'app/section.php';
		include 'app/footer.php'; 
	?>