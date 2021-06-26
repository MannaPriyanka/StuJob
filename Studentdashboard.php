<?php
session_start();
$user =  $_SESSION['login_user'];
include('dbcon.php');
include('Stunavbar.php');
?>
<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
  <!-- Recently Favorited -->
  <div class="widget dashboard-container my-adslist">
    <h3 class="widget-header">COMPANY LATEST UPDATES</h3>

    <div class="block">

      <?php


      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }

      $sql = "SELECT company.cid, company.cname, companyupdates.cid , companyupdates.title , companyupdates.file , companyupdates.message FROM companyupdates INNER JOIN company On company.cid = companyupdates.cid ";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {


        $cname = $row['cname'];
        $title = $row['title'];
        $file = $row['file'];
        $message = $row['message'];
      ?>




        <div class="block">
          <!-- Store First Letter -->

          <hr>
          <!-- Store Lists -->
          <div class="row">
            <!-- Store List 01 -->
            <div class="col-md-12 col-sm-12">

              <ul class="store-list">
                <li><?php echo  "<b>Name of company</b><br>" . $cname; ?></li>
                <li><?php echo  "<b>title </b><br>" . $title; ?></li>

                <li><img src='company/uploads/<?php echo trim($file);?>' height='100' width='100'><?php echo $file; ?></li>
                <li><?php echo "<b>News</b><br>" . $message; ?></li>


              </ul>

            </div>
            <br><br>

          <?php
          //end of while loop
        } ?>

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
<!--============================
=            Footer            =
=============================-->


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