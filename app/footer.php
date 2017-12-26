	 <!-- Footer section start here -------->
	
	<footer id="footer">
		<div class="section">
			<div class="container">
				<div class="text-center">
					<a href="#nav" title="To Top">
						<span class="glyphicon glyphicon-chevron-up"></span>
					</a>
				</div>
				<h1 class="title text-center space" id="contact">Contact Us</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-content">
                            <p class="large">Feel free to get in touch with us for more information.</p>
                            <ul class="list-icons">
                                <li><i class="fa fa-map-marker pr-10"></i>Bbau Lucknow</li>
                                <li><i class="fa fa-phone pr-10"></i>(+91)912551**01</li>
                                <li><i class="fa fa-fax pr-10"></i>912-5518-*01 </li>
                                <li><i class="fa fa-envelope-o pr-10">
                                </i><a href="mailto:shailendra.phpdeveloper@gmail.com">shailendra.phpdeveloper@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="footer-content">
                            <form role="form" id="footer-form" method="post" action="index.php#contact">

                                <!-- massage display ----->

                                <?php if(isset($_POST['submit'])){
                                    if(!empty($err)){
                                        echo "<h5 class='err'>".$err.'</h5>'; 
                                    }
                                    if(!empty($msg)){
                                        echo "<h5 class='msg'>".$msg.'</h5>';
                                    }
                                }
                                ?>

                                <!-- massage display ----->
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="name2">Roll No</label>
                                    <input type="number" class="form-control" id="rollno" placeholder="Enter Your Roll No" name="rollno" required="">
                                    <i class="fa fa-user form-control-feedback"></i>
                                    <p class="text-danger"></p>			
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="email2">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name" required="" value="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                    <p class="text-danger"></p>	
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="message2">Message</label>
                                    <textarea class="form-control" rows="8" id="message2" placeholder="Submit your request" name="request" required=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                    <p class="text-danger"></p>                                   
                                </div>    

                                <p></p>	
                                <input type="submit" name="submit" value="Send" class="btn btn-default">
                            </form>
                        </div>
                    </div>
                </div>
			</div>
		</div>
        
		<div class="subfooter text-center footer">
			<a href="#nav" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
			<p class="text-primary">&copy; Copyright Reserved | Developed and Design By <a href="info.html" >Shailendra Pal Singh</a></p>
		</div>
	</footer>
	
	<!-- Footer section Ends here -------->

	
</body>
</html>
