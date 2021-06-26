<?php
session_start();
$user =  $_SESSION['login_user'];
$id = $_SESSION["userid"];
include('dbcon.php');
$sql = " SELECT `profilepic` FROM `student` WHERE `id` = $id";
$sth = $con->query($sql);
$file = mysqli_fetch_array($sth); 
// print_r($file);
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student profile </title>

	<!-- FAVICON -->
	<link href="img/favicon.png" rel="shortcut icon">
	<!-- PLUGINS CSS STYLE -->
	<!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
	<!-- Font Awesome -->
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="index.html">
							<img src="images/wicon.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="Studentdashboard.php">Home</a>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
									</a>

									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="Studentdashboard.php">My Dashboard</a>
										<a class="dropdown-item" href="viewcompany.php">View Company</a>
										<a class="dropdown-item" href="stunotifi.php">Notification</a>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Pages <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="about-us.html">About Us</a>
										<a class="dropdown-item" href="contact-us.html">Contact Us</a>


									</div>
								</li>
								
								</li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="logout.php">logout</a>
								</li>
								<!--li class="nav-item">
								<a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li-->
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!--==================================
=            User Profile            =
===================================-->

	<section class="user-profile section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
					<div class="sidebar">
						<!-- User Widget -->
						<div class="widget user">
							<!-- User Image -->
							<h5 class="text-center"><?php echo $user; ?>
							</h5>
							<div class="image d-flex justify-content-center">
								<img src="uploads/<?php echo $file['profilepic'];?>" alt="" class=" d-inline-flex">

							</div>
							<form method="post" action="userppedit.php" enctype="multipart/form-data">
								<center>
									<label class=""> Change Profile picture </label>
									<div class="form-group choose-file d-inline-flex">
										<input type="file" class="form-control-file mt-2 pt-1" id="input-file" name="image">
									</div>
									<div class="form-group choose-file d-inline-flex">
										<input type="submit" class="btn btn-transparent" value="change" name="submit">
									</div>
								</center>
							</form>
							<!-- User Name -->

						</div>
						<!-- Dashboard Links -->
						<div class="widget dashboard-links">
							<!--ul>
							<li><a class="my-1 d-inline-block" href="">Savings Dashboard</a></li>
							<li><a class="my-1 d-inline-block" href="">Saved Offer <span>(5)</span></a></li>
							<li><a class="my-1 d-inline-block" href="">Favourite Stores <span>(3)</span></a></li>
							<li><a class="my-1 d-inline-block" href="">Recommended</a></li>
						</ul-->
						</div>
					</div>
				</div>
				<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
					<!-- Edit Profile Welcome Text -->
					<div class="widget welcome-message">
						<h2>Edit profile</h2>
						<!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p-->
					</div>
					<!-- Edit Personal Info -->
					<div class="row">
						<div class="col-lg-6 col-md-6">

							<h3 class="widget-header user">
								<form action="studentprofilepersonalupdate.php" method="post" enctype="multipart/form-data">
									<!-- First Name -->


									<div class="widget personal-info">
										<h3 class="widget-header user">Edit Personal Details</h3>



										<div class="form-group">
											<label> Name </label>
											<input type="text" class="form-control" name="name" required>
										</div>
										<!-- Last Name -->
										<div class="form-group">
											<label for="last-name">Date of birth</label>
											<input type="text" class="form-control" name="DateofBirth" required>
										</div>

										<div class="form-group">
											<label for="last-name">Gender</label>
											<input type="text" class="form-control" name="gender" required>
										</div>
										<div class="form-group">
											<label for="last-name">city</label>
											<input type="text" class="form-control" name="City" required>
										</div>
										<div class="form-group">
											<label for="last-name">state</label>
											<input type="text" class="form-control" name="state" required>
										</div>
										<div class="form-group">
											<label for="last-name"> nationality </label>
											<input type="text" class="form-control" name="nationality" required>
										</div>
										<div class="form-group">
											<label for="last-name">pincode</label>
											<input type="text" class="form-control" name="pincode" required>
										</div>
										<div class="form-group">
											<label for="last-name">email</label>
											<input type="email" class="form-control" name="Email" required>
										</div>
										<div class="form-group">
											<label for="last-name">mobile</label>
											<input type="text" class="form-control" name="Mobile" required>
										</div>
										<div class="form-group">
											<label for="last-name">address</label>
											<input type="text" class="form-control" name="Address" required>
										</div>

										<!-- Submit button -->
										<button class="btn btn-transparent" name="Update">Save My Changes</button>
								</form>
						</div>
					</div>




					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
						<div class="widget change-email mb-0">
							<h3 class="widget-header user">Edit Educational Details</h3>


							<form action="studentprofileeducationalupdate.php" method="post" enctype="multipart/form-data">
								<!-- Current Password -->
								<div class="form-group">
									<label>SSC School Name </label>
									<input type="text" class="form-control" id="current-email" name="sname">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>SSC % </label>
									<input type="text" class="form-control" id="new-email" name="SSC">
								</div>
								<div class="form-group">
									<label>HSC School Name</label>
									<input type="text" class="form-control" id="current-email" name="HSC">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>HSC %</label>
									<input type="text" class="form-control" id="current-email" name="HSC">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Diploma College Name</label>
									<input type="text" class="form-control" id="current-email" name="dpname">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Department</label>
									<input type="text" class="form-control" id="current-email" name="dpDepartment">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>diploma %</label>
									<input type="text" class="form-control" id="current-email" name="diplomap">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>history of Backlog</label>
									<input type="text" class="form-control" id="current-email" name="dphistoryofBacklog ">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Degree College Name</label>
									<input type="text" class="form-control" id="current-email" name="dename">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Department</label>
									<input type="text" class="form-control" id="current-email" name="deDepartment">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Degree % </label>
									<input type="text" class="form-control" id="current-email" name="degreep">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>history of Backlog</label>
									<input type="text" class="form-control" id="current-email" name="dehistoryofBacklog ">
								</div>
								<!-- New email -->

								<!-- Submit Button -->
								<input type="submit" class="btn btn-transparent" value="Add Details" name="Update">
							</form>
						</div>
					</div>
				</div>

				<div class="row">
					
				<br> 
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
						<div class="widget change-password">
							<h3 class="widget-header user">Upload Resume</h3>
							<form action="resumeupload.php" method="post" enctype="multipart/form-data">
								<!-- File chooser -->
								<div class="form-group choose-file d-inline-flex">

									<i class="fa fa-user text-center px-3"></i>
									<input type="file" class="form-control-file mt-2 pt-1" name="file" id="input-file">
								</div>
								<!-- Checkbox -->
								<!-- Submit Button -->
								<button class="btn btn-transparent" name="upload">Upload</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
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