<?php
session_start();
$id = $_SESSION['userid'];
include('dbcon.php');
$cname = mysqli_real_escape_string($con, $_POST['cname']);
$cowner = mysqli_real_escape_string($con, $_POST['cowner']);
$connect = mysqli_real_escape_string($con, $_POST['connect']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$des = mysqli_real_escape_string($con, $_POST['Description']);
$link = mysqli_real_escape_string($con, $_POST['link']);
$cemail = mysqli_real_escape_string($con, $_POST['cemail']);

$target_dir = "uploads/";
$filename = $_FILES["file"]["name"];
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check = $_FILES["file"]["tmp_name"];

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

$sql = " UPDATE `company` SET `cname`='$cname',`cownername`='$cowner',`ccontact`='$connect',`caddress`='$address',`Description`='$des',`file`='$filename',`link`='$link',`cemail`='$cemail' WHERE `cid`= '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
	header("location:company_profile.php");
} else {
	echo "error : try again";
}

mysqli_close($con);


?>