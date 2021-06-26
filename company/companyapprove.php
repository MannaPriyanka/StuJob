<?php
include('dbcon.php');

$sid = $_POST['Approve'];
$cid = $_POST['cid'];
$sql = "INSERT INTO `companyapprove`( `cid`, `sid`, `approve`) VALUES ('$cid','$sid','1') ";
$result = mysqli_query($con, $sql);
if ($result) {
	header("location:company_hire_student.php");
} else {
	echo "error : try again";
}

mysqli_close($con);
