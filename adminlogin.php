<?php

$page = 'adminLogin';

session_start();
if(isset($_SESSION['user'])){
	header("Location: adminlogged.php");
}
if(isset($_SESSION['sname'])){
	header("Location: studentlogged.php");
}

include 'app/adminLogin.php';

?>


<?php include 'app/header.php'; ?>

<!-- login section start here -->
	
 <div class="container-fluid admin_banner " id="banner">
     <div class="row">

         <div class="banner_cont col-xs-6  col-xs-offset-3 col-sm-4 col-sm-offset-4">

             <div class="well wellform">
                 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                     <h1 class="text-center ">Admin Login</h1><hr>

                <!-- Meassage display -------->

                     <?php if(isset($_POST['login'])){
                        if(!empty($err)){
                            echo "<h5 class='err'>".$err.'</h5>'; 
                        }
                        if(!empty($msg)){
                            echo "<h5 class='msg'>".$msg.'</h5>';
                        }
                    }
                    ?>
                    <!-- Meassage display -------->

                     <div class="form-group">
                         <input class="form-control" type="text" name="username" placeholder="Enter Your User Name" required="" autofocus>
                     </div>
                     <div class="form-group">
                         <input class="form-control" type="password" name="password" placeholder="Enter Your Password" required="">
                     </div>
                     <div class="form-group">
                        <input class="form-control  btn btn-block btn-success" type="submit" name="login" value="LOGIN">
                    </div>
                 </form>
             </div>
         </div> 
    </div>
</div>
    
    <?php 
		include 'app/section.php';
		include 'app/footer.php'; 
	?>