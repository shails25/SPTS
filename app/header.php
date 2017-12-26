<!DOCTYPE html>
<html>
    <head>
        <title>Welcome | SPTS</title>

        <meta charset="UTF-8">

        <meta name="description" content="Student Performance Tracking System">
        <meta name="keywords" content="student,record,marks,chart">
        <meta name="author" content="Navendra Singh">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        
        <link rel="icon" type="image/png" href="img/favicon.png">

        <script src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
       

    </head>

<body>
	
	<!-- Navigation bar start here -------->

	<nav id="nav" class="navbar navbar-default">
        <div class="container">
            <div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4">
					
					<!-- Header left start -->
					
					<div class="navbar-left">
                        <div class="brandname smooth-scroll clearfix">

                            <!-- logo -->

                            <div class="logo smooth-scroll">
                                <a href="#banner"><img id="logo" src="img/mylogo.png" alt="SPS"></a>
                            </div>

                            <!-- Brandname -->

                            <div class="site-name">
                                <a href="#banner">Student Performance Tracking System</a>
                            </div>
                       </div>
					</div>
					
					<!-- Header left Ends Here -->
					
				</div>
				
				<div class=" col-sm-8 col-md-8 col-lg-8">
					<div class="navbar-right clearfix">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span> 
				        </button>
                        
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav navbar-right">
							  <li class="active"><a href="#nav">Home</a></li>
							  <li><a href="#about">Abput SPTS</a></li>
							  <li><a href="#contact">Contact Us</a></li> 
								
							<!-- php code for logout button ------->  
								
							  <?php
								
								
								if($page == 'adminLogged'){
									$user = $_SESSION['user'];
								}
								if($page == 'studentLogged'){
									$user = $_SESSION['sname'];
								}
								if(isset($user)){
									echo "<li class='dropdown'>
											<a href='javascriipt:void();' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>Hello "
											. $user."<span class='caret'></span></a>
											<ul class='dropdown-menu'>
												<li>
												<a href='logout.php'>logout <span class='glyphicon glyphicon-log-in'></span> </a>
												</li>
											
										</li>";
								}else{
									echo "<li class='dropdown'>
											<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
												<span class='glyphicon glyphicon-log-in'></span> Login<span class='caret'></span>
												<ul class='dropdown-menu'>
												  <li class='active'><a href='adminlogin.php'>Admin login</a></li>
												  <li><a href='studentlogin.php'>Student login</a></li>
												</ul>
											  </a>
										  </li>";
								}
								?>
						<!-- php code for logout button ------->   
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav> 
	 <!-- Navigation bar Ends here -------->
	