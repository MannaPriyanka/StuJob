<?php
session_start();
$user =  $_SESSION['login_user'];
$id = $_SESSION['userid'];
include('dbcon.php');

$target_dir = "uploads/";
$name = $_FILES["file"]["name"];
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["upload"])) {
	$check = $_FILES["file"]["tmp_name"];
}
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$sql = "UPDATE `student` SET `resume`='$name' WHERE `id` = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
	echo '<script language="javascript">alert("success")</script>';

	header("location:studenteditprofile.php");
}
