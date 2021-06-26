	<?php
	session_start();
	$id = $_SESSION['userid'];
	$user = $_SESSION['login_user'];
	include('dbcon.php');
	include('companyheader.php');

	?>

	<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
		<section class="ad-post bg-gray py-5">
			<div class="container">
				<form action="addvacancy.php" method="post" enctype="multipart/form-data">
					<!-- Post Your ad start -->
					<fieldset class="border border-gary p-4 mb-5">
						<div class="row">
							<div class="col-lg-12">
								<h3>Add Vacancy</h3>
							</div>
							<div class="col-lg-6">
								<input type="hidden" name="cid" value="<?php echo $id; ?>">
								<h6 class="font-weight-bold pt-4 pb-1">Title :</h6>
								<input type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="Add your title" name="title">
								<h6 class="font-weight-bold pt-4 pb-1">Vacancy for :</h6>
								<input type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="Add vacancy for" name="vacancyfor">
								<h6 class="font-weight-bold pt-4 pb-1">Date :</h6>
								<input type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="(starting date-ending year/ month/date )" name="timestamp">
								<h6 class="font-weight-bold pt-4 pb-1">Type :</h6>
								<div class="row px-3">
									<div>
										<input type="radio" name="type" value="Part time" id="personal"> Part time
										<label for="personal" class="py-2"></label>
									</div>
									<div>
										<input type="radio" name="type" value="Full time" id="business"> Full time
										<label for="business" class="py-2"></label>
									</div>
								</div>
								<h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
								<textarea name="Description" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your vacancy"></textarea>
							</div>
							<div class="col-lg-6">
								<h6 class="font-weight-bold pt-4 pb-1">Select Criteria:</h6>
								<select name="Criteria" id="inputGroupSelect" class="w-100">
									<option value="">Select Criteria</option>
									<option value="Post Graduate">Post Graduate</option>
									<option value="Graduate"> Graduate</option>
									<option value="Experienced">Experienced</option>
									<option value="During Graduation">During Graduation</option>
									<option value="Non-College">Non-College</option>
									<option value="Master/ Higer Graduated">Master/ Higer Graduated</option>
								</select>
								
								<div class="choose-file text-center my-4 py-4 rounded">
									<label for="file-upload">Add Any file you want to attach
										<span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
										<span class="d-block">or</span>
										<span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
										<span class="d-block">Maximum upload file size: 500 KB</span>
										<input type="file" class="form-control-file d-none" id="file-upload" name="file">
									</label>
								</div>
							</div>
						</div>
					</fieldset>
					<!-- Post Your ad end -->

					<?php

					if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
					}

					$sql = " SELECT * FROM `company` ";
					$result = $con->query($sql);

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {

							$cname = $row['cname'];
							$ccontact = $row['ccontact'];
							$cemail = $row['cemail'];
							$clocation = $row['clocation'];
							$caddress = $row['caddress'];
						}
						$result->free();
					}
					?>

					<!-- seller-information start -->
					<fieldset class="border p-4 my-5 seller-information bg-gray">
						<div class="row">
							<div class="col-lg-12">
								<h3>Contact Information</h3>
							</div>
							<div class="col-lg-6">
								<h6 class="font-weight-bold pt-4 pb-1">Company Name :</h6>
								<input type="text" placeholder="<?php echo $cname; ?>" class="border w-100 p-2">
								<h6 class="font-weight-bold pt-4 pb-1">Contact Number :</h6>
								<input type="text" placeholder="<?php echo $ccontact; ?>" class="border w-100 p-2">
							</div>
							<div class="col-lg-6">
								<h6 class="font-weight-bold pt-4 pb-1">Company Email :</h6>
								<input type="email" placeholder="<?php echo $cemail; ?>" class="border w-100 p-2">
								<h6 class="font-weight-bold pt-4 pb-1">Company Address :</h6>
								<input type="text" placeholder="<?php echo $clocation; ?>" class="border w-100 p-2">
								<h6 class="font-weight-bold pt-4 pb-1">Company website :</h6>
								<input type="text" placeholder="<?php echo $caddress; ?>" class="border w-100 p-2">

							</div>
						</div>
					</fieldset>


					<!-- submit button -->
					<div class="checkbox d-inline-flex">
						<input type="checkbox" id="terms-&-condition" class="mt-1">
						<label for="terms-&-condition" class="ml-2">By click you must agree with our
							<span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting Rules.</a></span>
						</label>
					</div>
					<button type="submit" class="btn btn-primary d-block mt-2" name="post">Post</button>
				</form>

			</div>

		</section>
		
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