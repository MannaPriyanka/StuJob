<?php
include('dbcon.php');

$sid = $_POST['Decline'];
$cid = $_POST['cid'];
$a = 0;
$sql = "INSERT INTO `companyapprove`( `cid`, `sid`, `approve`) VALUES ('$cid','$sid','$a') ";
$result = mysqli_query($con, $sql);
if ($result) {
	header("location:company_hire_student.php");
} else {
	echo "error : try again";
}

mysqli_close($con);
