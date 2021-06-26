<?php
session_start();
$user =  $_SESSION['login_user'];
$id = $_SESSION["userid"];
include('dbcon.php');
$sql = " SELECT `profilepic` FROM `fac` WHERE `fid` = $id";
$sth = $con->query($sql);
$file = mysqli_fetch_array($sth); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Faculty Dashboard</title>

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
              <img src="../images/wicon.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="Facultydashboard.php">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
                  </a>

                  <!-- Dropdown list -->
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Facultydashboard.php">Dashboard</a>
                    <a class="dropdown-item" href="approvestudents.php">Approve Student</a>
                    <a class="dropdown-item" href="faculty_placement.php">Placement Updates</a>
                    <a class="dropdown-item" href="faculty_company_request.php">Company Requests</a>
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
                  <a class="nav-link login-button" href="logout.php">Logout</a>
                </li>

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
            
            <!-- Dashboard Links -->
            <div class="widget user-dashboard-profile">
							<div class="widget user">
								<!-- User Image -->
								<div class="image d-flex justify-content-center">
									<img src="uploads/<?php echo $file['profilepic']; ?>" alt="" class="">
								</div>
								<!-- User Name -->
								<h5 class="text-center"><?php echo $_SESSION['login_user']; ?></h5>
                <a href="facultyviewprofile.php" class="btn btn-main-sm">view Profile</a>
                <br><br>
              <a href="facultyeditprofile.php" class="btn btn-main-sm">Edit Profile</a>

							</div>
						</div>
            <div class="widget user-dashboard-menu">
              <ul>
                <li class="active"><a href="Facultydashboard.php"><i class="fa fa-user"></i> My Dashboard</a></li>
                <li><a href="approvestudents.php"><i class="fa fa-file-archive-o"></i>Approve Students</a></li>
                <li><a href="faculty_placement.php"><i class="fa fa-file-archive-o"></i>Placement Updates</a></li>
                <li><a href=" facultyexamupdates.php"><i class="fa fa-file-archive-o"></i>Placement Test Updates
                  </a></li>

                <li><a href="faculty_company_request.php"><i class="fa fa-bolt"></i>Workshop</a></li>
                <li><a href="logout.php"><i class="fa fa-cog"></i> Logout</a></li>
                <li><a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete
                    Account</a></li>
              </ul>
            </div>

            <!-- delete-account modal -->
            <!-- delete account popup modal start-->
            <!-- Modal -->
            <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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