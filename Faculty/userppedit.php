

<?php

session_start();
require_once("dbcon.php");
$user = $_SESSION['login_user'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		$pic = $_FILES["image"]["name"];
		echo $user;
		$sql = "UPDATE `fac` SET `profilepic`='$pic' WHERE `fname` = '$user' ";

		$result = mysqli_query($con, $sql);


		if ($result == 1) {

			echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
		}
		header("location:facultyviewprofile.php");
	} else {
		echo "<script>alert('Sorry, there was an error uploading your file.');
			window.location.href = '$current_url_path/facultyviewprofile.php';
			</script>";
	}

?>