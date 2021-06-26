<!--companyupdates---->
<?php
session_start();
$id = $_SESSION['userid'];

include('dbcon.php');
if ($con) {
	$filename = $_FILES["file"]["name"];
	$tempname = $_FILES["file"]["tmp_name"];
	$folder = "uploads/" . $filename;

	$move = move_uploaded_file($tempname, $folder);
	$addupdate = mysqli_real_escape_string($con, $_POST['addupdate']);
	$message = mysqli_real_escape_string($con, $_POST['message']);



	$sql = "INSERT INTO `companyupdates`( `title`, `file`, `message`, `cid`) VALUES ('$addupdate' ,' $filename ','$message' ,'$id')";
	$result = mysqli_query($con, $sql);
	if ($result == 1) {
		header("location:company_dashboard.php");
	} else {
		echo "error : try again";
	}

	mysqli_close($con);
}

?>