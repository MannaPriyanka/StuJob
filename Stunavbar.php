<?php
session_start();
$user =  $_SESSION['login_user'];
$id = $_SESSION["userid"];
include('dbcon.php');
$sql = " SELECT `profilepic` FROM `student` WHERE `id` = $id";
$sth = $con->query($sql);
$file = mysqli_fetch_array($sth); ?>


<!DOCTYPE html>
<html lang="en">

<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Dashboard</title>

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
										<a class="dropdown-item" href="studentplacement.php">Placement Test Updates</a>

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
	<section class="dashboard section">
		<!-- Container Start -->
		<div class="container">
			<!-- Row Start -->
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
					<div class="sidebar">
						<!-- User Widget -->
						<div class="widget user-dashboard-profile">
							<div class="widget user">
								<!-- User Image -->
								<div class="image d-flex justify-content-center">
									<img src="uploads/<?php echo $file['profilepic']; ?>" alt="" class="">
								</div>
								<!-- User Name -->
								<h5 class="text-center"><?php echo $_SESSION['login_user']; ?></h5>
								<a href="studenteditprofile.php" class="btn btn-main-sm">Edit Profile</a>
								<br>
								<br>
								<a href="stuviewprofile.php" class="btn btn-main-sm">View Profile</a>

							</div>
						</div>
						<!-- Dashboard Links -->
						<div class="widget user-dashboard-menu">
							<ul>
								<li><a href="Studentdashboard.php"><i class="fa fa-user"></i> My Dashboard</a></li>
								<li><a href="viewcompany.php"><i class="fa fa-bolt"></i> View Company</a></li>
								<li><a href="stunotifi.php"><i class="fa fa-bolt"></i> Notifications</a></li>
								<li><a href="studentplacement.php"><i class="fa fa-bolt"></i> Placement Test updates</a></li>

								<li><a href="logout.php"><i class="fa fa-cog"></i> Logout</a></li>
								<li><a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete
										Account</a></li>
							</ul>
						</div>

					</div>
				</div>