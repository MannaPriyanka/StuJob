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

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company</title>

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




  <style type="text/css">
    body {
      font-family: Arail, sans-serif;
    }

    /* Formatting search box */
    .search-box {
      width: 300px;
      position: relative;
      display: inline-block;
      font-size: 14px;
    }

    .search-box input[type="text"] {
      height: 32px;
      padding: 5px 10px;
      border: 1px solid #CCCCCC;
      font-size: 14px;
    }

    .result {
      position: absolute;
      z-index: 999;
      top: 100%;
      left: 0;
    }

    .search-box input[type="text"],
    .result {
      width: 100%;
      box-sizing: border-box;
    }

    /* Formatting result items */
    .result p {
      margin: 0;
      padding: 7px 10px;
      border: 1px solid #CCCCCC;
      border-top: none;
      cursor: pointer;
    }

    .result p:hover {
      background: #f2f2f2;
    }
    td,th,table{
      height: 50px;
    }
  </style>



  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.search-box input[type="text"]').on("keyup input", function() {
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if (inputVal.length) {
          $.get("backend-search.php", {
            term: inputVal
          }).done(function(data) {
            // Display the returned data in browser
            resultDropdown.html(data);
          });
        } else {
          resultDropdown.empty();
        }
      });

      // Set search input value on click of result item
      $(document).on("click", ".result p", function() {
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
      });
    });
  </script>

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

  <section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
      <!-- Row Start -->
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
          <div class="sidebar">
            <!-- User Widget -->
            <div class="widget user">
							<!-- User Image -->
							<div class="image d-flex justify-content-center">
								<img src="uploads/<?php echo $file['file']; ?>" alt="" class="">
							</div>
							<!-- User Name -->
							<h5 class="text-center"><?php echo $_SESSION['login_user']; ?></h5>
              <a href="company_profile.php" class="btn btn-main-sm">Edit Profile</a>

						</div>
            <!-- Dashboard Links -->
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
                    <img src="../images/account/Account1.png" class="img-fluid mb-2" alt="">
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
        <table class="table-bordered">
          <tr>
            
            <th>Name</th>
            <th>Resume</th>
            <th>Approve</th>
            <th>Decline</th>
            <th>Send Notification</th>
            <th>View Profile</th>
          <tr>
            <?php


            if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
            }

            $sql = " SELECT * FROM `student` ";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
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
                $sscsname  = $row['sscsname'];
                $sscper = $row['sscper'];
                $hscsname = $row['hscsname'];
                $hscper = $row['hscper'];
                $degreecname = $row['degreecname'];
                $degreedep = $row['degreedep'];
                $degreeper = $row['degreeper'];


            ?>
          <tr>
            <td><?php echo $name ?></td>
            <td><a href="<?php echo $row['resume']; ?>">View</a></td>
            <td>
              <form action="companyapprove.php" method="post">
                <button class="btn btn-main-sm" name="Approve" value="<?php echo $id; ?>"> Approve</button>
                <input type="hidden" name="cid" value="<?php echo $_SESSION['userid']; ?>">
              </form>
            </td>
            <form action="companydecline.php" method="post">

              <td><button class="btn btn-main-sm" name="Decline" value="<?php echo $id; ?>"> Decline</button>
                <input type="hidden" name="cid" value="<?php echo $_SESSION['userid']; ?>">
            </form>


            </td>
            <td>
              <form action="stusendnoti.php" method="post"> <textarea class="form-group form-control" name="noti" col="2" row="2" placeholder="send Notification"> </textarea>
                <input type="hidden" name="sid" value="<?php echo $id ?>">
                <input type="hidden" name="cid" value="<?php echo $_SESSION['userid']; ?>">

                <button class="btn btn-main-sm" type="submit"> Send</button>
              </form>

            </td>


            <td>
              <form action="viewSA.php" method="post">

                <input type="hidden" name="name" value="<?php echo $name ?>">
                <input type="hidden" name="DateofBirth" value="<?php echo $DateofBirth ?>">
                <input type="hidden" name="gender" value="<?php echo $gender ?>">
                <input type="hidden" name="city" value="<?php echo $city ?>">
                <input type="hidden" name="nationality" value="<?php echo $nationality ?>">
                <input type="hidden" name="pincode" value="<?php echo $pincode ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="hidden" name="mobile" value="<?php echo $mobile ?>">
                <input type="hidden" name="address" value="<?php echo $address ?>">
                <input type="hidden" name="sscsname" value="<?php echo $sscsname ?>">
                <input type="hidden" name="sscper" value="<?php echo $sscper ?>">
                <input type="hidden" name="hscsname" value="<?php echo $hscsname ?>">
                <input type="hidden" name="hscper" value="<?php echo $hscper ?>">
                <input type="hidden" name="degreecname" value="<?php echo $degreecname ?>">
                <input type="hidden" name="degreedep" value="<?php echo $degreedep ?>">
                <input type="hidden" name="degreeper" value="<?php echo $degreeper ?>">
                <button class="btn btn-main-sm" type="submit" target="_blank"> View Profile</button>
              </form>

            </td>
          <tr>

        <?php

              }
              $result->free();
            }

        ?>
        </table>

      </div>
    </div>
    <!-- Row End -->
    </div>
    <!-- Container End -->
  </section>
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