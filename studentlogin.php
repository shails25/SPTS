<?php

$page = 'studentLogin';

session_start();

include 'app/studentLogin.php';
?>


<?php include 'app/header.php'; ?>

<!------- student login section start here ------->

<div class="container-fluid admin_banner " id="banner">
     <div class="row">

         <div class="banner_cont col-xs-6  col-xs-offset-3 col-sm-4 col-sm-offset-4">

             <div class="well wellform">
                 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                     <h1 class="text-center ">Student Login</h1><hr>

                <!-- Meassage display --------> 
                    <?php 
                                if(isset($_POST['s_login'])){
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
                         <input class="form-control" type="text" name="name" placeholder="Enter Your Full Name" required="">
                     </div>
                     <div class="form-group">
                         <input class="form-control" type="number" pattern="[0-9]{5}" title="Enter 5 Digit Roll No" name="rollno" placeholder="Enter Your Roll No" required="" >
                     </div>
                     <div class="form-group">
                         <input class="form-control" type="text" name="dob" placeholder="DD-MM-YYY | Date of birth" required="">
                     </div>
                     <div class="form-group">
                        <input class="form-control  btn btn-block btn-success" type="submit" name="s_login" value="SUBMIT">
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
	
	


