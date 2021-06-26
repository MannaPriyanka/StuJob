<?php

session_start();
$user =  $_SESSION['login_user'];

include('dbcon.php');

$current_url_path = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$current_url_path = substr($current_url_path, -4) == ".php" ?
    implode("/", array_slice((explode("/", $current_url_path)), 0, -1)) : $current_url_path;

echo $current_url_path;

session_start();
//if($_SERVER["REQUEST_METHOD"] == "POST")
if (isset($_POST['submit'])) {
	require_once("dbcon.php");

	$option2 = $_POST["option"];
	$myusername = mysqli_real_escape_string($con, $_POST['username']);
	$mypassword = mysqli_real_escape_string($con, $_POST['password']);
	$a = "student";
	$b = "faculty";
	$c = "company";

	if ($option2 == $a) {

		$sql = "SELECT * FROM `student` WHERE `email`='$myusername' and `password`= '$mypassword'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);


		if ($count == 1) {
			$_SESSION['login_user'] =$row['name'];
			$_SESSION['userid'] = $row['id'];
			$myusername = $row['name'];
			echo "<script>alert('Welcome $myusername to Stujob');
			window.location.href = '$current_url_path/Studentdashboard.php';
			</script>";
		} else {
			echo "<script>alert('Wrong Username or Password!');
			window.location.href = '$current_url_path/login.html';
			</script>";
		}
	} else if ($option2 == $b) {
		$sql = "SELECT * FROM `fac` WHERE `femail`='$myusername' and `fpassword`='$mypassword'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);


		if ($count == 1) {

			$_SESSION['login_user'] = $row['fname'];
			$_SESSION['userid'] = $row['fid'];
			$_SESSION['fcollege'] = $row['fcollege'];
			$myusername = $row['fname'];
			echo "<script>alert('Welcome $myusername to Stujob');
			window.location.href = '$current_url_path/Faculty/Facultydashboard.php';
			</script>";

		} else {
			echo "<script>alert('Wrong Username or Password!');
			window.location.href = '$current_url_path/login.html';
			</script>";
		}
	}

	if ($option2 == $c) {
		$sql = "SELECT * FROM `company` WHERE `cemail`='$myusername' and `cpassword`='$mypassword'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);


		if ($count == 1) {

			$_SESSION['login_user'] =$row['cname'];
			$_SESSION['userid'] = $row['cid'];
			$myusername = $row['cname'];
			echo "<script>alert('Welcome $myusername to Stujob');
			window.location.href = '$current_url_path/Company/company_dashboard.php';
			</script>";
		} else {
			echo "<script>alert('Wrong Username or Password!');
			window.location.href = '$current_url_path/login.html';
			</script>";
		}
	}
}
