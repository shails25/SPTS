<?php

$page = 'studentLogged';

session_start(); 
if(!isset($_SESSION['sname'])){
header("Location: studentlogin.php");
}
?>

<?php include 'app/header.php' ?>

<div class="container-fluid adminlogged_banner " id="banner">
		 <div class="row">
			 
			 <div class="banner_cont col-sm-10 col-sm-offset-1 ">
				 
				 <div class="well wellform">
					 <div class="well wellform ">
						<div class="clearfix">
							<div class="left"> <h4>Welcome : <b><span style="text-transform:uppercase;"><?php echo $_SESSION['sname']; ?></span></b></h4></div>
							 <div class="right">
								 <form method="post" action="?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-inline ">
									 <div class="form-group">
										 <button class="form-control btn btn-warning" type="submit" name="detail">Full Details</button>
									 </div>
								 </form>
							 </div>
						 </div>
                         
						 <?php
						   if(isset($_POST['detail'])){
								include 'app/connection.php';
							$roll = $_SESSION['roll'];
							$dob = $_SESSION['dob'];
							$name = $_SESSION['sname'];
						 
							 $select = mysqli_query($conn,"SELECT * FROM `students` WHERE rollno = '$roll' and dob = '$dob'");
							 if($select){
								 $viewmsg = "Data Found ";
								 $row =  mysqli_fetch_array($select);
								 echo "<div class='clearfix'>
											<div class='left'>
												<h4>ROLL NO : <b>".$row['rollno']."</b></h4>
												<h4>FATHER'S NAME :  <b><span style='text-transform: capitalize;'>".$row['fathername']."</span></b></h4>
												<h4>DATE OF BIRTH : <b>".$row['dob']."</b></h4>
												<h4>GENDER :  <b><span style='text-transform:capitalize;'>".$row['gender']."</span></b></h4>
											</div>
											<div class='right'>
												<h4>ADDRESS : <b>".$row['address']."</b></h4>
												<h4>EMAIL :  <b><span style='text-transform:capitalize;'>".$row['email']."</span></b></h4>
												<h4>MOBILE : <b>".$row['mobile']."</b></h4>
												<h4>YEAR OF ENROLL :  <b><span style='text-transform:capitalize;'>".$row['year']."</span></b></h4>
											</div>
									   </div>
									   ";
								 
							 }else{
								 $viewerr = 'Data not Found !!';
								 mysqli_close($conn);
							 }
						 
						   }
						 ?>               
					</div>       
					 <hr> 
					 <form class="form-inline text-center" method="post" action="">
						 <div class="form-group">
							 <select class="form-control" name="semester">
								 <option value="1">Semester 1</option>
								 <option value="2">Semester 2</option>
								 <option value="3">Semester 3</option>
								 <option value="4">Semester 4</option>
								 <option value="5">Semester 5</option>
								 <option value="6">Semester 6</option>
								 
							 </select>
						 </div>
						  <div class="form-group">
							 <input class="form-control btn btn-info" type="submit" value="VIEW PERFORMANCE" name="view">
						 </div>
						 
					 </form>         
					 <?php 
						if(isset($_POST['view'])){
							include 'app/connection.php';
													
							$sem = $_POST['semester'];
							$roll = $_SESSION['roll'];
							
								$select = mysqli_query($conn,"SELECT * from marks where rollno = $roll and semester = $sem");
								if(mysqli_num_rows($select)>0){
									$viewmsg = "Data Found ..";
									$row = mysqli_fetch_array($select);
					?>
					<hr>
					 <?php
						$percent = ($row['total']*100)/500;
					 ?>
					<div class="row ">           
						<div class="col-md-6"> 
							<table class="table table-stirped">
								<thead >
									<tr>
										<th>S.No</th>
										<th>Subject Name</th>
										<th>Obtained Marks</th>
										<th>Maximum Marks</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th >1</th>
										<th >Subject 1</th>
										<td><?php echo $row['subject1']; ?></td>
										<td>100</td>
									</tr>
									<tr>
										<th >2</th>
										<th >Subject 2</th>
										<td><?php echo $row['subject2']; ?></td>
										<td>100</td>
									</tr>
									<tr>
										<th >3</th>
										<th >Subject 3</th>
										<td><?php echo $row['subject3']; ?></td>
										<td>100</td>
									</tr>
									<tr>
										<th >4</th>
										<th >Subject 4</th>
										<td><?php echo $row['subject4']; ?></td>
										<td>100</td>
									</tr>
									<tr>
										<th >5</th>
										<th >Practical</th>
										<td><?php echo $row['practical']; ?></td>
										<td>100</td>
									</tr>
									<tr>
										<th >6</th>
										<th >Total</th>
										<td><?php echo $row['total']; ?></td>
										<td>500</td>
									</tr>
								
								</tbody>
							</table>
							<hr>
							<div class="left">
								 <p><strong>Result : </strong><?php if($percent>33){echo 'Pass';}else{echo 'Failed !';} ?></p>
							</div>
							<div class="right">
								<p><strong>Percentage : </strong><?php echo $percent."%"; ?></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="graph">
								<div class="sub1" style="background-color:bisque; height:<?php echo $row['subject1']?>%;"><?php echo $row['subject1']?></div>
								<div class="sub2" style="background-color:blue; height:<?php echo $row['subject2']?>%;"><?php echo $row['subject2']?></div>
								<div class="sub3" style="background-color:brown; height:<?php echo $row['subject3']?>%;"><?php echo $row['subject3']?></div>
								<div class="sub4" style="background-color:yellow; height:<?php echo $row['subject4']?>%;"><?php echo $row['subject4']?></div>
								<div class="sub5" style="background-color:green; height:<?php echo $row['practical']?>%;"><?php echo $row['practical']?></div>
								
								<div class="name s1">Subject1</div>
								<div class="name s2">Subject2</div>
								<div class="name s3">Subject3</div>
								<div class="name s4">Subject4</div>
								<div class="name s5">Practical</div>
							</div>   
						</div>
					</div>
					<?php 
							}else{
                                    echo "<hr><p class='text-center'>Data Not Found !!!</p>";
								}
						}
					 ?>
				 </div>
			 </div>               
		</div>
</div>
    
      <?php 
		include 'app/section.php';
		include 'app/footer.php'; 
	?>