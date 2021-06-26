<?php
include('companyheader.php');

?>

<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
  <!-- Recently Favorited -->
  <div class="widget dashboard-container my-adslist">
    <h3 class="widget-header">Pending Approvals</h3>
    <div class="widget dashboard-container my-adslist">
      <h3 class="widget-header">Final list of students</h3>

      <table class="table-bordered">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>Job-Type</th>
          <th>Salary</th>
          <th>Joining Date</th>
          <th> hire</th>
        <tr>

          <?php
          include("dbcon.php");

          if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
          }

          $cid = $_SESSION['userid'];
          $sql = "SELECT student.id, student.name, student.email,companyapprove.sid ,companyapprove.approve FROM companyapprove INNER JOIN student ON companyapprove.sid= student.id WHERE companyapprove.approve ='1' AND companyapprove.cid = '$cid'
          ";

          $result = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
          ?>

        <tr>
          <form action="hiredstudent.php" method="post">
            <input type="hidden" name="stid" value="<?php echo $id; ?>">

            <td> <input type="hidden" name="sname" value="<?php echo $name; ?>">
              <?php echo $name; ?></td>
            <td> <input type="hidden" name="semail" value="<?php echo $email; ?>"><?php echo $email; ?></td>
            <td><input type="text" class="form-contol" name="post"></td>
            <td><input type="radio" value="parttime" name="jtype"> part-time
              <input type="radio" value="fulltime" name="jtype"> full-time
            </td>
            <td><input type="text" class="form-contol" name="salary"></td>
            <td><input type="text" class="form-contol" name="joindate"></td>
            <td> <button class="btn btn-main-sm" name="hire"> Hire</button></td>
        </tr>
        </form>
      <?php


          }
      ?>

      </table>
    </div>

  </div>
</div>
<!-- Row End -->


</div>
<!-- Container End -->
</section>


<!-- Container End -->
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
<script src="../plugins/jQuery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/popper.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap-slider.js"></script>
<!-- tether js -->
<script src="../plugins/tether/js/tether.min.js"></script>
<script src="../plugins/raty/jquery.raty-fa.js"></script>
<script src="../plugins/slick-carousel/slick/slick.min.js"></script>
<script src="../plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="../plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="../plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="../plugins/google-map/gmap.js"></script>
<script src="../js/script.js"></script>

</body>

</html>