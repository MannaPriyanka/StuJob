<?php

session_start();
$user =  $_SESSION['login_user'];
include('dbcon.php');

?>

<!-- 
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


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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
							<div class="image d-flex justify-content-center">
								<img src="images/user/user-thumb.jpg" alt="" class="">
							</div>
							<!-- User Name -->
							<h5 class="text-center"><?php echo $user; ?>
								<p>Joined February 06, 2017</p> <!-- todo -->
								<div><a href="stuviewprofile.php" class="btn btn-main-sm">View Profile</a> </div> &nbsp; &nbsp;

								<div><a href="studenteditprofile.php" class="btn btn-main-sm">Edit Profile</a>
									<div>


							</h5>
						</div>

					</div>
				</div>
				<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0"> -->
					<!-- Edit Profile Welcome Text -->
					<div class="widget welcome-message">
						<h2>View profile</h2>
						<p></p>
					</div>
					<!-- Edit Personal Info -->
					<div class="row">
						<div class="col-lg-6 col-md-6">

							<h3 class="widget-header user">View Personal Information</h3>
							<?php

							if ($con->connect_error) {
								die("Connection failed: " . $con->connect_error);
							}

							$sql = " SELECT * FROM `student` ";
							$result = $con->query($sql);

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {

									$name = $row['name'];
									$DateofBirth = $row['dob'];
									$gender = $row['gender'];
									$city = $row['city'];
									$state = $row['state'];
									$nationality = $row['nationality'];
									$pincode = $row['pincode'];
									$email = $row['email'];
									$mobile = $row['mobile'];
									$address = $row['address'];
								}
								$result->free();
							}


							?>
							<form action="#" method="post" enctype="multipart/form-data">
								<!-- First Name -->


								<div class="widget personal-info">
									<h3 class="widget-header user">Edit Personal Details</h3>



									<div class="form-group">
										<label> Name </label>
										<input type="text" class="form-control" placeholder="<?php echo $name; ?>" name="name" disabled>
									</div>
									<!-- Last Name -->
									<div class="form-group">
										<label for="last-name">Date of birth</label>
										<input type="text" class="form-control" placeholder=" <?php echo $DateofBirth; ?> " name="DateofBirth" disabled>
									</div>

									<div class="form-group">
										<label for="last-name">Gender</label>
										<input type="text" class="form-control" placeholder="<?php echo $gender; ?>" name="gender" disabled>
									</div>
									<div class="form-group">
										<label for="last-name">city</label>
										<input type="text" class="form-control" placeholder="<?php echo $city; ?>" name="City" disabled>
									</div>
									<div class="form-group">
										<label for="last-name">state</label>
										<input type="text" class="form-control" placeholder="<?php echo $state; ?>" name="state" disabled>
									</div>
									<div class="form-group">
										<label for="last-name"> nationality </label>
										<input type="text" class="form-control" placeholder="<?php echo $nationality; ?>" name="nationality" disabled>
									</div>
									<div class="form-group">
										<label for="last-name">pincode</label>
										<input type="text" class="form-control" placeholder="<?php echo $pincode; ?>" name="pincode" disabled>
									</div>
									<div class="form-group">
										<label for="last-name">email</label>
										<input type="email" class="form-control" placeholder="<?php echo $email; ?>" name="Email" disabled>
									</div>
									<div class="form-group">
										<label for="last-name">mobile</label>
										<input type="text" class="form-control" placeholder="<?php echo $mobile; ?>" name="Mobile" disabled>
									</div>
									<div class="form-group">
										<label for="last-name">address</label>
										<input type="text" class="form-control" placeholder="<?php echo $address; ?>" name="Address" disabled>
									</div>
									<!-- File chooser -->

									<!-- Submit button -->
									<button class="btn btn-transparent" name="Update">Save My Changes</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<?php


						if ($con->connect_error) {
							die("Connection failed: " . $con->connect_error);
						}

						$sql = " SELECT * FROM `student` ";
						$result = $con->query($sql);

						if ($result->num_rows > 0)
							while ($row = $result->fetch_assoc()) {


								$sscsname = $row['sscsname'];
								$sscper = $row['sscper'];
								$hscsname = $row['hscsname'];
								$hscper = $row['hscper'];
								$diplomacname = $row['diplomacname'];
								$diplomadep = $row['diplomadep'];
								$diplomaper = $row['diplomaper'];
								$diplomaback = $row['diplomaback'];
								$degreecname = $row['degreecname'];
								$degreedep = $row['degreedep'];
								$degreeper = $row['degreeper'];
								$degreeback = $row['degreeback'];
							}
						else {
							echo "Something wrong!";
						}
						?>
						<!-- Change Email Address -->
						<div class="widget change-email mb-0">
							<h3 class="widget-header user">Edit Educational Details</h3>

							<form action="#" method="post" enctype="multipart/form-data">
								<!-- Current Password -->
								<div class="form-group">
									<label>SSC School Name </label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $sscsname; ?>" name="sname" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>SSC % </label>
									<input type="text" class="form-control" id="new-email" placeholder="<?php echo $sscper; ?>" name="SSC" disabled>
								</div>
								<div class="form-group">
									<label>HSC School Name</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $hscper; ?> " name="HSC" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>HSC %</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $hscper; ?> " name="HSC" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Diploma College Name</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $diplomacname; ?>" name="dpname" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Department</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $diplomadep; ?>" name="dpDepartment" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>diploma %</label>
									<input type="email" class="form-control" id="current-email" placeholder="<?php echo $diplomaper; ?>" name="diplomap" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>history of Backlog</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $diplomaback; ?> " name="dphistoryofBacklog " disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Degree College Name</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $degreecname; ?>" name="dename" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Department</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $degreedep; ?>" name="deDepartment" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>Degree % </label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $degreeper; ?>" name="degreep" disabled>
								</div>
								<!-- New email -->
								<div class="form-group">
									<label>history of Backlog</label>
									<input type="text" class="form-control" id="current-email" placeholder="<?php echo $degreeback; ?> " name="dehistoryofBacklog" disabled>
								</div>
								<!-- New email -->

								<!-- Submit Button -->
								<button class="btn btn-transparent" name="Update">Add Details</button>
							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
		</div>
	</section>


	</div>
	<!-- Container End -->
	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">

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