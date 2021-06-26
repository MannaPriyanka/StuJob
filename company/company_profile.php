<?php
session_start();
$user =  $_SESSION['login_user'];
$id = $_SESSION["userid"];
include('dbcon.php');
$sql = " SELECT `file` FROM `company` WHERE `cid` = $id";
$sth = $con->query($sql);
$file=mysqli_fetch_array($sth);

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Company Profile </title>

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


</head>

<body class="body-wrapper">


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="index.html">
							<!--img src="images/logo.png" alt=""-->
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="company_dashboard.php">Home</a>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
									</a>

									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="company_dashboard.php">Dashboard</a>
										<a class="dropdown-item" href="company_hire_student.php">Hire Students</a>
										<a class="dropdown-item" href="company_workshop_interview.php">Workshop</a>
										<a class="dropdown-item" href="company_pending.php">Pending Approval</a>
										<a class="dropdown-item" href="company_faculty.php">Add Vacancy</a>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Pages <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="company_about_us.html">About Us</a>
										<a class="dropdown-item" href="company_contact_us.html">Contact Us</a>
										<a class="dropdown-item" href="company_profile.php">User Profile</a>
										<a class="dropdown-item" href="blog.html">Updates</a>

									</div>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Listing <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="category.html">Ad-Gird View</a>
										<a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
									</div>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="login.html">Login</a>
								</li>

							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="user-profile section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
					<div class="sidebar">
						<!-- User Widget -->
						<div class="widget user">
							<!-- User Image -->
							<div class="image d-flex justify-content-center">
								<img src="uploads/<?php echo $file['file']; ?>" alt="" class="">
							</div>
							<!-- User Name -->
							<h5 class="text-center"><?php echo $_SESSION['login_user']; ?></h5>
						</div>
						<!-- Dashboard Links -->
						<div class="widget dashboard-links">

						</div>
					</div>
				</div>
				<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
					<!-- Edit Profile Welcome Text -->
					<div class="widget welcome-message">
						<h2>Edit profile</h2>
					</div>
					<!-- Edit Personal Info -->
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="widget personal-info">
								<h3 class="widget-header user">Edit Personal Information</h3>
								<form action="company_update_profile.php" method="post" enctype="multipart/form-data">
									<!-- First Name -->
									<div class="form-group">
										<label for="company--name">Company Name</label>
										<input type="text" class="form-control" id="company-name" name="cname">
									</div>
									<!-- Last Name -->
									<div class="form-group">
										<label for="owner-name">Owner Name</label>
										<input type="text" class="form-control" id="owner-name" name="cowner">
									</div>
									<!-- File chooser -->
									<div class="form-group choose-file d-inline-flex">
										<i class="fa fa-user text-center px-3"></i>
										<input type="file" class="form-control-file mt-2 pt-1"  name="file">
									</div>
									<div class="form-group">
										<label for="current-email">Current number</label>
										<input type="text" class="form-control" id="current-email" name="connect">
									</div>
									<div class="form-group">
										<label for="new-email"> Address</label>
										<input type="text" class="form-control"  name="address">
									</div>
									<div class="form-group">
										<label for="current-email">Description</label>
										<input type="text" class="form-control"  name="Description">
									</div>
									<div class="form-group">
										<label for="new-email"> website link</label>
										<input type="text" class="form-control"  name="link">
									</div>
									<div class="form-group">
										<label for="new-email">New email</label>
										<input type="email" class="form-control" id="new-email" name="cemail">
									</div>

									<button class="btn btn-transparent">Save My Changes</button>
								</form>
							</div>
						</div>

					</div>
					<div class="col-lg-6 col-md-6">

						<div class="widget change-password">
							<h3 class="widget-header user">Edit Password</h3>
							<form action="#">
								<!-- Current Password -->
								<div class="form-group">
									<label for="current-password">Current Password</label>
									<input type="password" class="form-control" id="current-password">
								</div>
								<!-- New Password -->
								<div class="form-group">
									<label for="new-password">New Password</label>
									<input type="password" class="form-control" id="new-password">
								</div>
								<!-- Confirm New Password -->
								<div class="form-group">
									<label for="confirm-password">Confirm New Password</label>
									<input type="password" class="form-control" id="confirm-password">
								</div>
								<!-- Submit Button -->
								<button class="btn btn-transparent">Change Password</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>


	</section>



	<?php
	include('footer.php');
