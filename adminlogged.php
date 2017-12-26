<?php

$page = 'adminLogged';

session_start();
$_SESSION['sroll'] = '';
$_SESSION['ssem'] = '';

if(!isset($_SESSION['user'])){
	header("Location: index.php");
}
if(isset($_SESSION['sname'])){
	header("Location: studentlogged.php");
}


	include 'app/addStudent.php';

	include 'app/addMarks.php';

	include 'app/deletestudent.php';
	
	include 'app/searchStudent.php';
	
	include 'app/updateMarks.php';

?>

<?php include 'app/header.php'; ?>


<div class="container-fluid adminlogged_banner " id="banner">
    
		 <div class="row">
			 
			 
			 <div class="banner_cont col-md-10 col-md-offset-1  ">
				<div class="well wellform">  
					 <ul class="nav nav-tabs " id="myTab">
						  <li class="active"><a data-toggle="tab" href="#addstudent">Add New Student</a></li>
						  <li><a data-toggle="tab" href="#addmarks">Add Student Marks</a></li>
						  <li ><a data-toggle="tab" href="#update">Update Student Marks</a></li>
						  <li><a data-toggle="tab" href="#delete">Delete Student</a></li>
						  <li><a data-toggle="tab" href="#feedback">Solve Request</a></li>
						 <li><a data-toggle="tab" href="#view">View Students</a></li>
					</ul>

					<div class="tab-content">
					  <div id="addstudent" class="tab-pane fade in active">
			   
			<!-- add student data tab is active --->
					   
						  <div class="row">
							  <div class="col-sm-6 col-sm-offset-3">
								  <h1 class="text-center">Add New Student</h1><hr> 
                                  
								  <?php if(isset($_POST['addstudent'])){
									if(!empty($adderr)){
										echo "<h5 class='err'>".$adderr.'</h5>'; 
									}
									if(!empty($addmsg)){
										echo "<h5 class='msg'>".$addmsg.'</h5>';
									}
								}
								?>
								<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

								<!-- roll no -->

									<div class="form-group">
										<input class="form-control" type="text" pattern="[0-9]{5}" title="Enter 5 digit roll no" name="rollno" placeholder="Enter Student Roll No" min="1" max="30000" required="">
									</div>
								<!-- name -->

									<div class="form-group">
										<input class="form-control" type="text" name="name" placeholder="Enter Student Name" required="">
									</div>

								<!-- fathers name -->

									<div class="form-group">
										<input class="form-control" type="text" name="father" placeholder="Enter Student Father's Name" required=""> 
									</div>

								<!-- date of birth  -->

									<div class="form-group">
										<input class="form-control" type="text" name="dob" placeholder="DD-MM-YY | Enter Student Date of Birth" required="">
									</div>

								<!-- address -->

									<div class="form-group">
										<textarea class="form-control" name="address" placeholder="Enter Student Address"></textarea>
									</div>

								<!-- gender -->

									<div class="form-group">
										<select class="form-control" name="gender" required="">
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>

								<!-- email -->

									<div class="form-group">
										<input class="form-control" type="email" name="mail" placeholder="Enter Student Email Id" required="">
									</div>

								<!-- mobile -->

									 <div class="form-group">
										<input class="form-control" type="text" title="Enter 10 Digit mobile" name="mobile" placeholder="Enter Student 10 digit Mobile No" required="">
									</div>

								<!-- year of ecrollment  -->

									<div class="form-group">
										<select class="form-control" name="year" required="" placeholder="Select year of enrollment">
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
										</select>
									</div>

								<!-- submit button--> 

									<div class="form-group">
										<input class=" btn btn-lg btn-block btn-success" type="submit" name="addstudent" value="ADD STUDENT DETAILS">
									</div>
								</form>
							  </div>
						  </div>
						
					  </div>
						
			 <!-- add student tab is active --->
					  
					  <div id="addmarks" class="tab-pane fade">
						  <div class="row">
							  <div class="col-sm-6 col-sm-offset-3">
								  <h1 class="text-center">Add Student Marks</h1><hr> 
                                 
									<?php if(isset($_POST['addmarks'])){
										if(!empty($adderr)){
											echo "<h5 class='err'>".$adderr.'</h5>'; 
										}

										if(!empty($addmsg)){
											echo "<h5 class='msg'>".$addmsg.'</h5>';
											}
										}
									?>
								<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
									<div class="form-group">
										<input class="form-control" type="number" pattern="[0-9]{5}" title="Enter 5 digit roll no" name="rollno" placeholder="Enter Student Roll No" min="1" max="30000" required="" autofocus>
									</div>
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
										<input class="form-control" type="number" name="subject1" id="subject1" placeholder="Subject 1 Marks" min="0" max="100" required="" > 
									</div>
									<div class="form-group">
										<input class="form-control" type="number" name="subject2" id="subject2" placeholder="Subject 2 Marks" min="0" max="100" required="" > 
									</div>
									<div class="form-group">
										<input class="form-control" type="number" name="subject3" id="subject3" placeholder="Subject 3 Marks" min="0" max="100" required="" > 
									</div>
									<div class="form-group">
										<input class="form-control" type="number" name="subject4" id="subject4" placeholder="Subject 4 Marks" min="0" max="100" required="" > 
									</div>
									<div class="form-group">
										<input class="form-control" type="number" name="practical" id="practical" placeholder="Practical Marks" min="0" max="100" required="" onchange="sum()" > 
									</div>
									<div class=  "form-group">
										<input class="form-control" type="number" name="total" id="total" placeholder="Total Marks" min="0" max="100" readonly > 
									</div>
									<div class="form-group">
										<input class=" btn btn-lg btn-block btn-success" type="submit" name="addmarks" value="ADD MARKS">
									</div>
								</form>

							  </div>
						  </div>
					  </div>
						
			<!-- update tab start here ------->
						
						<div id="update" class="tab-pane fade">
  							<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<h1 class="text-center">Search Student Data</h1><hr> 
                                  
									<?php 
																		
									if(isset($_POST['search']) OR isset($_POST['update'])){
										if(!empty($srcherr)){
											echo "<h5 class='err'>".$srcherr.'</h5>'; 
										}

										if(!empty($srchmsg)){
											echo "<h5 class='msg'>".$srchmsg.'</h5>';
											}
										}
                                    
									?>
									<form class="form-inline text-center" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
										<div class="form-group">
											<input class="form-control" type="number" name="rollno" pattern="[0-9]{5}" title="Enter 5 digit roll no" placeholder="Enter Roll No To Search" autofocus required>
										</div>
                                        
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
											<input class="form-control btn btn-success" type="submit" name="search" value="Search Student">
										</div>
									</form>
									<hr> 
                                   
				<!-- after search form ---->
									
									<?php
											include 'app/connection.php';
											$sroll = $_SESSION['sroll'];
											$ssem = $_SESSION['ssem'];
											$select = mysqli_query($conn,"select * FROM marks where rollno = '$sroll' and semester = '$ssem'");
											$row = mysqli_fetch_array($select);                                    
									?>
                                     
										<div class='row'>
                                            <form  method='post' action='adminlogged.php'>
											<div class='col-sm-6'>
												
													<div class='form-group'>
													<label> Roll No</label>
														<input type='number' class='form-control' name = 'rollno' readonly value = "<?php echo $row['rollno']; ?>">
													</div>
													<div class='form-group'>
													<label> Semester</label>
														<input type='number' class='form-control' name = 'semester' readonly value = "<?php echo $row['semester']; ?>">
													</div>
													<div class='form-group'>
													<label> Subject 1</label>
														<input type='number' class='form-control' name = 'subject1' id='sbjct1' value = "<?php echo $row['subject1']; ?>">
													</div>
												
													<div class='form-group'>
													<label> Subject 2</label>
														<input type='number' class='form-control' name = 'subject2' id='sbjct2' value = "<?php echo $row['subject2']; ?>">
													</div>
								            </div>
                                              
												<div class='col-sm-6'>
													<div class='form-group'>
													<label> Subject 3</label>
														<input type='number' class='form-control' name = 'subject3' id='sbjct3' value = "<?php echo $row['subject3']; ?>">
													</div>
													<div class='form-group'>
													<label> Subject 4</label>
														<input type='number' class='form-control' name = 'subject4' id='sbjct4' value = "<?php echo $row['subject4']; ?>">
													</div>
													<div class='form-group'>
													<label> Practical</label>
														<input type='number' class='form-control' name = 'practical' id='prctcl' value = "<?php echo $row['practical']; ?>" onchange="add()">
													</div>
													<div class='form-group'>
													<label>Total</label>
														<input type='number' class='form-control' name = 'total' id='ttl' readonly>
													</div>
												</div>
								
                                                <div class='form-group'>
                                                        <input type='submit' class='btn btn-warning btn-block' name = 'update' readonly value ='UPDATE'>
                                                </div>
												</form> 
                                           
                                              												
									</div>   
							</div>
						</div>  
					</div>
													
			<!-- Delete tab start here ------->
						
						<div id="delete" class="tab-pane fade">
                            
							<div class="row">
                                
								<div class="col-sm-6 col-sm-offset-3">
									<h1 class="text-center">Delete Student Data</h1><hr> 
                                   
									<?php 
									if(isset($_POST['delete'])){
                                     
										if(!empty($delerr)){
											echo "<h5 class='err'>".$delerr.'</h5>'; 
										}

										if(!empty($delmsg)){
											echo "<h5 class='msg'>".$delmsg.'</h5>';
											}
										}
									?>
									<form class="form-inline text-center" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
										<div class="form-group">
											<input class="form-control" type="number" pattern="[0-9]{5}" title="Enter 5 Digit Roll no" name="rollno" placeholder="Enter Roll no Delete" required autofocus>
										</div>
										
										<div class="form-group">
											<input class="form-control btn btn-warning " type="submit" name="delete" value="DELETE">
										</div>
									</form>
								</div>
							</div>
						  </div>
						
			<!-- feedback tab start here ------->
						
						<div id="feedback" class="tab-pane fade">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
								   

									<?php
										if(!empty($feederr)){
											echo "<h5 class='err'>".$feederr.'</h5>'; 
										}

										if(!empty($feedmsg)){
											echo "<h5 class='msg'>".$feedmsg.'</h5>';
											}
									
									
									include 'app/connection.php';
										
									$select = mysqli_query($conn,"SELECT rollno, name, request, date FROM feedback");
									
									if(mysqli_num_rows($select)>0){
										echo "<h1 class='text-center'>Request Record</h1><hr>
										<table class='table table-hover'>";
										
										echo "<thead>
												<tr>
													<th class='text-center'>Roll No</th>
													<th class='text-center'>Name</th>
													<th class='text-center'>Request</th>
													<th class='text-center'>Date</th>
												</tr>
											  </thead><tbody>";
									   while($row = mysqli_fetch_array($select)){
											echo "
													<tr>
														<td class='text-center'>".$row[0]."</td>
														<td class='text-center'>".$row[1]."</td>
														<td class='text-center'>".$row[2]."</td>
														<td class='text-center'>".$row[3]."</td>
																													
													</tr>
												  </tbody>
												  ";
										}
										echo "</table>";
									}else{
										$feederr = 'Record Not found';  
										mysqli_close($conn);
                                        
									}
									
									?>
								
								</div>
							</div>
						</div>
					
			<!-- view tab start here ------->
						
						<div id="view" class="tab-pane fade">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<h1 class="text-center"><?php if(isset($_POST['view'])){echo 'Semester '.$_POST['semester'];} ?> Student Data</h1><hr> 
                                    
									<form class="form-inline text-center" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
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
										<div class="form-group ">
											<input class="form-control btn btn-success" type="submit" name="view" value="VIEW STUDENTS">
										</div>
									</form>
								</div> 
							</div>
							
							<div class='row'>
								<div class='col-sm-10 col-sm-offset-1'> 
									<?php
										if(isset($_POST['view'])){
											$sem = $_POST['semester'];
											include 'app/connection.php';
											
											$select = mysqli_query($conn,"SELECT students.rollno,students.name,students.fathername,students.dob,students.gender,students.email,students.mobile,students.year FROM students,marks WHERE marks.semester=$sem AND marks.rollno = students.rollno ");
											
											 if(mysqli_num_rows($select)>0){
												echo "<hr>
													<table class='table table-hover'>";

												echo "<thead>
													   <tr>
															<th>Roll No</td>
															<th>Student Name</td>
															<th>Father's Name</td>
															<th>Date Of Birth</td>
															<th>Gender</td>
															<th>Email</td>
															<th>Mobile</td>
															<th>Year</td>
														</tr>
													  </thead><tbody>";
											   while($row = mysqli_fetch_array($select)){
													echo "
															<tr>
																<td>".$row[0]."</td>
																<td>".$row[1]."</td>
																<td>".$row[2]."</td>
																<td>".$row[3]."</td>
																<td>".$row[4]."</td>
																<td>".$row[5]."</td>
																<td>".$row[6]."</td>
																<td>".$row[7]."</td>

															</tr>
														  ";
												}
												echo "</tbody></table>";
											}else{
												$feederr = 'Record Not found';  
												mysqli_close($conn);
											}   
											
										}
									?>
							</div>
                        <!-- Error message if no student data found -->
                            <?php
                                    if(!empty($feederr)){
                                        echo "<h5 class='err'>".$feederr.'</h5>'; 
                                    }
                            ?>  
						</div> 
                           
					</div>    
				 </div>
			 </div>
		</div>
	</div>
	</div>

	 <?php 
		include 'app/section.php';
		include 'app/footer.php'; 
	?>
    