<!--companyregistration-->
<?php

include('dbcon.php');
$cname = mysqli_real_escape_string($con, $_POST['cname']);
$cownername = mysqli_real_escape_string($con, $_POST['cownername']);
$ccontact = mysqli_real_escape_string($con, $_POST['ccontact']);
$clocation = mysqli_real_escape_string($con, $_POST['clocation']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
$caddress = mysqli_real_escape_string($con, $_POST['caddress']);
$cemail = mysqli_real_escape_string($con, $_POST['cemail']);

$sql = " INSERT INTO `company`( `cname`, `cownername`, `ccontact`, `clocation`, `cpassword`, `caddress`, `cemail`) VALUES('$cname','$cownername','$ccontact','$clocation','$cpassword','$caddress','$cemail') ";
$result = mysqli_query($con, $sql);
if ($result) {
	header("location:login.html");
} else {
	echo "error : try again";
}

mysqli_close($con);


?>