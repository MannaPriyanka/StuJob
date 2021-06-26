<?php 
   
session_start();
 $user =  $_SESSION['login_user'] ;
include('dbcon.php');
include('Stunavbar.php');
?>

          
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Recently Favorited -->
		
		
		<div class="widget dashboard-container my-adslist">
          <h3 class="widget-header"> Timetable</h3>
         <a href="StuExamTimeTable.php" class="btn btn-main-sm">View  Timetable</a>

		  </div>
		  
		  <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">Exam Marks</h3>
         <a href="Stuexammarks.php" class="btn btn-main-sm">View  Marks</a>

		  </div>
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header"> Syllabus</h3>
         
		 
		 
		 
		  
		 
		 <?php						   
														

										if ($con->connect_error) {
											die("Connection failed: " . $con->connect_error);
										}

										$sql = " SELECT * FROM `examsyllabus` ";
						$result = mysqli_query($con,$sql);
						while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
						{					
															$course= $row['course'];
															$department	=$row['depart'];
															$file = $row['file'];	
															
															$timestamp= $row['timestamp'];
															?>
															
       
<div class="block">
					<!-- Store First Letter -->
					<h5 class="store-letter"> </h5>
					<hr>
					<!-- Store Lists -->
					<div class="row">
						<!-- Store List 01 -->
						
						<div class="col-md-3 col-sm-6">
						
							<ul class="store-list">
							<li><?php echo "<b>Course</b><br> ".$course?></li>
								
								</ul>	
						</div>
						<div class="col-md-3 col-sm-6">
						
							<ul class="store-list">
							<li><?php  echo  "<b>department</b><br>".$department; ?></li>
								
								</ul>	
						</div>
						<!-- Store List 02 -->
						<div class="col-md-3 col-sm-6">
							<ul class="store-list">
							<li><?php  echo  "<b>Time Table</b><br> "?> </li>
								 <td><a href="uploads\<?php echo $row['file']; ?>">download</a></td>
								
							</ul>	
						</div>
						
						
						
						<!-- Store List 03 -->
						<div class="col-md-3 col-sm-6">
							<ul class="store-list">
							<li><?php  echo  " date<br>".$timestamp; ?></li>
							
								
								</ul>	
						</div>
						<!-- Store List 04 -->
						
					</div>
				</div>
				<!-- Second Letter -->
				
				
			<?php	
				//end of while loop
						}?>				
		
		 
		
		 
		 
		 
		  </div>
            <!-- User Name -->
             </div>
		 
        </div>

                <!-- Modal -->
                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                        <h6 class="py-2">Are you sure you want to delete your account?</h6>
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                        <textarea name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
                      </div>
                      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- delete account popup modal end-->
          <!-- delete-account modal -->

        </div>
      </div>
      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->

<!--footer align="center" class="footer section section">
  <!-- Container Start -->
        <!--div class="block about">
          <!-- footer logo -->
		  <!--center>
          <!--img src="images/wicon.png" alt="">
          
		  <!-- description -->
          <!--p class="alt-color">Stay Connected</p>
		  </center>
        </div>
      <!-- Link list -->
      <!--div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <!--div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="category.html">Category</a></li>
            <li><a href="single.html">Single Page</a></li>
            <li><a href="store.html">Store Single</a></li>
            <li><a href="single-blog.html">Single Post</a>
            </li>
            <li><a href="blog.html">Blog</a></li>



          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <!--div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <!--div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              <!--img src="images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p>Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <!--div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>

</html>