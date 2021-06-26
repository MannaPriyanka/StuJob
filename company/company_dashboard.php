<?php
session_start();
$user =  $_SESSION['login_user'];
$id = $_SESSION["userid"];
include('dbcon.php');
$sql = " SELECT `file` FROM `company` WHERE `cid` = $id";
$sth = $con->query($sql);
$file = mysqli_fetch_array($sth); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company</title>

  <link href="../img/favicon.png" rel="shortcut icon">

  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap-slider.css">
  <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="../plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <link href="../plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">


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
                  <a class="nav-link" href="company_dashboard.php">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
                  </a>

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
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="about-us.html">About Us</a>
                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>


                  </div>
                </li>

                </li>
              </ul>
              <ul class="navbar-nav ml-auto mt-10">
                <li class="nav-item">
                  <a class="nav-link login-button" href="Logout.php">Logout</a>
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
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
          <div class="sidebar">
            <div class="widget user-dashboard-profile">
         
            <div class="widget user">
							<!-- User Image -->
							<div class="image d-flex justify-content-center">
								<img src="uploads/<?php echo $file['file']; ?>" alt="" class="">
							</div>
							<!-- User Name -->
							<h5 class="text-center"><?php echo $_SESSION['login_user']; ?></h5>
              <a href="company_profile.php" class="btn btn-main-sm">Edit Profile</a>

						</div>
            </div>
            <div class="widget user-dashboard-menu">
              <ul>
                <li class="active"><a href="company_dashboard.php"><i class="fa fa-user"></i>Dashboard</a></li>
                <li><a href="company_hire_student.php"><i class="fa fa-bookmark-o"></i> Hire Students</a></li>
                <li><a href="hired_student.php"><i class="fa fa-bookmark-o"></i>View Hired Students</a></li>

                <li><a href="company_workshop_interview.php"><i class="fa fa-file-archive-o"></i>Workshop</a></li>
                <li><a href="company_pending.php"><i class="fa fa-bolt"></i> Pending Approval</a></li>
                <li><a href="company_faculty.php"><i class="fa fa-bolt"></i>Add Vacancy</a></li>
                <li><a href="logout.php"><i class="fa fa-cog"></i> Logout</a></li>
                <li><a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete
                    Account</a></li>
              </ul>
            </div>

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

          </div>
        </div>



        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
          <div class="widget dashboard-container my-adslist">
            <h3 class="widget-header">Updates</h3>
            <section class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="contact-us-content p-4">
                      <h1 class="pt-3">Add trending news and updates of company</h1>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <form action="companyupdates.php" method="post" enctype="multipart/form-data">
                      <fieldset class="p-4">
                        <div class="form-group">
                          <div class="row">

                            <div class="col-lg-11 py-2">
                              <h3 class="widget-header">Add new update</h3>
                              <input type="text" placeholder="Title" class="form-control" name="addupdate" required>
                            </div>
                          </div>
                        </div>
                        <div class="choose-file text-center my-4 py-4 rounded">
                          <label for="file-upload">Add Any file you want to attach
                            <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                            <span class="d-block">or</span>
                            <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                            <span class="d-block">Maximum upload file size: 500 KB</span>
                            <input type="file" class="form-control-file d-none" id="file-upload" name="file">
                          </label>
                        </div>
                        <textarea name="message" id="" placeholder="Message *" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
                        <div class="btn-grounp">
                          <button type="submit" class="btn btn-primary mt-2 float-right" name="upload">Upload</button>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
  </section>
  <?php
  include('footer.php');
