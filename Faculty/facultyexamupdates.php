<?php

session_start();

$id = $_SESSION['userid'];

$user =  $_SESSION['login_user'];
include('dbcon.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faculty Exam Updates</title>

	<!-- FAVICON -->
	<link href="../img/favicon.png" rel="shortcut icon">
	<!-- PLUGINS CSS STYLE -->
	<!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap-slider.css">
	<!-- Font Awesome -->
	<link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="../plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="../plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="../plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	<link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link href="../css/style.css" rel="stylesheet">


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
									<a class="nav-link" href="facultyhome.php">Home</a>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
									</a>

									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="Facultydashboard.php">Dashboard</a>
										<a class="dropdown-item" href="approvestudents.php">Approve Student</a>
										<a class="dropdown-item" href="facultyexamupdates.php">Exam Updates</a>
										<a class="dropdown-item" href="faculty_placement.html">Placement Updates</a>
										<a class="dropdown-item" href="faculty_company_request.html">Company Requests</a>
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
								<!--li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<!--div class="dropdown-menu">
									<a class="dropdown-item" href="category.html">Ad-Gird View</a>
									<a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
								</div-->
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

	<section class="section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading text-center pb-5">
						<h2 class="font-weight-bold">Placement Test Updates </h2>

					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="package-content bg-light border text-center p-5 my-2 my-lg-0">
						<div class="package-content-heading border-bottom">
							<h2>Exam Timetable</h2>
						</div>

						<form action="facultyexamtimetableupload.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<br> <br>

								<label> Select Course </label>
								<br>

								<select name="Course">
									<option value="Dilpoma">Dilpoma</option>
									<option value="Degree">Degree</option>
								</select>

								<br> <br>

								<label> Select Stream </label>
								<br>

								<select name="Department">
									<option value="IT">IT</option>
									<option value="Civil">Civil</option>
									<option value="Mechanical">Mechanical</option>
									<option value="Power Electronics">Power Electronics</option>
									<option value="Electrical Engineering">Electrical Engineering</option>
									<option value="Computer Engineering">Computer Engineering</option>
									<option value="Textile Engineering">Textile Engineering</option>
									<option value="Chemical Engineering">Chemical Engineering</option>
									<option value="Instrumental and control">Instrumental and control</option>
								</select>

								<br> <br>

								<div class="form-group choose-file d-inline-flex ">
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file" name="image">
								</div>
								<br> <br>

								<div class="form-group choose-file d-inline-flex">

									<input type="submit" class="btn btn-transparent" value="Upload" name="submit">
								</div>


							</div>

						</form>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="package-content bg-light border text-center my-2 my-lg-0 p-5">
						<div class="package-content-heading border-bottom">
							<h2>Exam Syllabus</h2>
						</div>


						<form action="facultyexamsyllabusupload.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<br> <br>

								<label> Select Course </label>
								<br>

								<select name="Course">
									<option value="Dilpoma">Dilpoma</option>
									<option value="Degree">Degree</option>
								</select>

								<br> <br>

								<label> Select Stream </label>
								<br>

								<select name="Department">
									<option value="IT">IT</option>
									<option value="Civil">Civil</option>
									<option value="Mechanical">Mechanical</option>
									<option value="Power Electronics">Power Electronics</option>
									<option value="Electrical Engineering">Electrical Engineering</option>
									<option value="Computer Engineering">Computer Engineering</option>
									<option value="Textile Engineering">Textile Engineering</option>
									<option value="Chemical Engineering">Chemical Engineering</option>
									<option value="Instrumental and control">Instrumental and control</option>
								</select>

								<br> <br>

								<div class="form-group choose-file d-inline-flex ">
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file" name="image">
								</div>
								<br> <br>

								<div class="form-group choose-file d-inline-flex">

									<input type="submit" class="btn btn-transparent" value="Upload" name="submit">
								</div>


							</div>

						</form>

					</div>
				</div>



				<div class="col-lg-4 col-md-6 mx-sm-auto">

					<div class="package-content bg-light border text-center p-5 my-2 my-lg-0">
						<div class="package-content-heading border-bottom">
							<h2>Exam Marks</h2>
						</div>




						<form action="facultymarksupload.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<br> <br>

								<label> Select Course </label>
								<br>

								<select name="Course">
									<option value="Dilpoma">Dilpoma</option>
									<option value="Degree">Degree</option>
								</select>

								<br> <br>

								<label> Select Stream </label>
								<br>

								<select name="Department">
									<option value="IT">IT</option>
									<option value="Civil">Civil</option>
									<option value="Mechanical">Mechanical</option>
									<option value="Power Electronics">Power Electronics</option>
									<option value="Electrical Engineering">Electrical Engineering</option>
									<option value="Computer Engineering">Computer Engineering</option>
									<option value="Textile Engineering">Textile Engineering</option>
									<option value="Chemical Engineering">Chemical Engineering</option>
									<option value="Instrumental and control">Instrumental and control</option>
								</select>

								<br> <br>

								<label> Select Sem </label>
								<br>

								<select name="Sem">
									<option value="Sem 3">Sem 3</option>
									<option value="Sem 4">Sem 4 </option>
									<option value="Sem 5">Sem 5 </option>
									<option value="Sem 6">Sem 6 </option>
									<option value="Sem 7">Sem 7 </option>
									<option value="Sem 8">Sem 8 </option>
								</select>

								<br> <br>



								<div class="form-group choose-file d-inline-flex ">
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file" name="image">
								</div>
								<br> <br>

								<div class="form-group choose-file d-inline-flex">

									<input type="submit" class="btn btn-transparent" value="Upload" name="submit">
								</div>


							</div>

						</form>



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
          <p>Copyright ?? <script>
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