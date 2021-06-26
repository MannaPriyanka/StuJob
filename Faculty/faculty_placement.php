<?php

session_start();
$user =  $_SESSION['login_user'];
$college = $_SESSION['fcollege'];
$cid = $_SESSION['userid'];

include('facultyheader.php');
?>


</div>
</div>
<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
  <!-- Recently Favorited -->
  <div class="widget dashboard-container my-adslist">
    <h3 class="widget-header"> Company Vacancies</h3>

    <div class="block">
      <!-- Store First Letter -->

      <!-- Store Lists -->
      <div class="row">
        <!-- Store List 01 -->

        <!-- Store List 02 -->

        <table class="table-bordered">
          <tr>
            <th> Company Name</th>
            <th> Company Email</th>
            <th> Job Title</th>
            <th>Vacancy For </th>
            <th>Time</th>
            <th>Type</th>
            <th>Description</th>
            <th>Eligibility Criteria</th>
            <th>View </th>
          </tr>
          <?php
          include("dbcon.php");

          if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
          }

          $sql = "SELECT * FROM companyaddvacancy LEFT JOIN company ON companyaddvacancy.cid = company.cid";


          $result = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
            <tr>

              <td> <?php echo $row['cname']; ?></td>
              <td> <?php echo   $row['cemail']; ?></td>
              <td> <?php echo  $row['title']; ?></td>
              <td> <?php echo   $row['vacanyfor']; ?></td>
              <td> <?php echo   $row['time']; ?></td>
              <td> <?php echo  $row['type']; ?></td>
              <td> <?php echo  $row['description']; ?></td>
              <td> <?php echo  $row['criteria']; ?></td>
              <td>
                <?php if ($row['file'] === '') { ?>
                  <button class="btn btn-main-sm" disabled>View</button>
                <?php } else { ?>
                  <a class="btn btn-main-sm" href="../uploads/<?php echo $row['file']; ?>"> View </a>
                <?php } ?>
              </td>
            </tr>


          <?php

          }

          ?>
          <tr>
          </tr>

        </table>


        <br>


      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

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