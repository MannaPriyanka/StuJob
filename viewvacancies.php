<?php 
    $cid = $_GET['cid'];
	$sid = $_GET['uid'];
	$cname = $_GET['cname'];
						
				
session_start();
 $user =  $_SESSION['login_user'] ;
 $id = $_SESSION['userid'];
include('dbcon.php');
include('Stunavbar.php');
?>

      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">find your job here..</h3>
          
						

		  

		<?php						   
													

										if ($con->connect_error) {
											die("Connection failed: " . $con->connect_error);
										}

										$sql =" SELECT * FROM `companyaddvacancy` WHERE `cid` = '$cid' " ;
            $result = mysqli_query($con,$sql);
            
						while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
						{
						
															
															$title= $row['title'];
															$vacanyfor=$row['vacanyfor'];
															$time = $row['time'];							
															$type= $row['type'];
															$description=$row['description'];
															$criteria=$row['criteria'];
															$file=$row['file'];

															 ?>
						
															
															
       
			<div class="block">
					<!-- Store First Letter -->
					
					<hr>
					<!-- Store Lists -->
					<div class="row">
						<!-- Store List 01 -->
						<div class="  col-md-3 col-sm-3">
						
							<ul class="store-list">
							<li><?php  echo  "<b> Title</b><br>".$title; ?></li>
							<li><?php  echo  "<b> vacanyfor</b><br>".$vacanyfor; ?></li>


								</ul>	
						</div>
						<!-- Store List 02 -->
						<div class="col-md-3 col-sm-3">
							<ul class="store-list">
							<li><?php  echo  "<b>time </b><br>".$time; ?></li>
							<li><?php  echo  "<b>type </b><br>".$type; ?></li>

							</ul>	
						</div>
						
						<div class="col-md-3 col-sm-3">
							<ul class="store-list">
														<li><?php  echo  "<b>description </b><br>".$description; ?></li>
														<li><?php  echo  "<b>criteria </b><br>".$criteria; ?></li>

							</ul>	
						</div>
						<div class="col-md-3 col-sm-3">
							<ul class="store-list">
														<li><a  class="btn btn-main-sm" href="company/uploads/<?php echo $file; ?>"> View Advertisement </a></li>

							</ul>	
						</div>
						
						
						
							</div>
                     <br>
					   
					  <div>
										  <?php
										   $cid = $_GET['cid'];
						$sid = $_GET['uid'];
						$cname = $_GET['cname'];?>
						
						<a  class="btn btn-main-sm" href="studentapplyvacancies.php?cid=<?php echo"$cid";?>&uid=<?php echo $sid;?>&cname=<?php echo $cname;?>&vtitle=<?php  echo  $vacanyfor; ?>" > Apply</a> 
                 </div>   

					<br>
					
					
					
			<?php	
				//end of while loop
						}?>				
		
				
				<!-- Second Letter -->
				
				
				
		
		
	


          <!-- delete-account modal -->
          						  <!-- delete account popup modal start-->
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

       
      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
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
