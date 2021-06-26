<!--companyregistration-->
<?php
session_start();
$user =  $_SESSION['login_user'];
$cid  = $_SESSION['userid'];

include('dbcon.php');
if (isset($_POST['post'])) {



	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["file"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if (
		$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif"
	) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {

		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			$pic = $_FILES["file"]["name"];
		}


		$title = mysqli_real_escape_string($con, $_POST['title']);
		$vacancyfor = mysqli_real_escape_string($con, $_POST['vacancyfor']);
		$timestamp = mysqli_real_escape_string($con, $_POST['timestamp']);
		$type = mysqli_real_escape_string($con, $_POST['type']);
		$Description = mysqli_real_escape_string($con, $_POST['Description']);
		$Criteria = mysqli_real_escape_string($con, $_POST['Criteria']);

		$sql = " INSERT INTO `companyaddvacancy`( `title`, `vacanyfor`, `time`, `type`, `description`, `criteria`, `file`,`cid`) VALUES ('$title' ,'$vacancyfor', '$timestamp' ,'$type', '$Description', '$Criteria' ,'$pic','$cid')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location:company_faculty.php");
		} else {
			echo "error : try again";
		}

		mysqli_close($con);
	}
}
?>