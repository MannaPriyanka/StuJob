<?php
	include('dbcon.php');

$cid = $_POST['cid'];

$sid = $_POST['sid'];

$noti = $_POST['noti'];

$sql = "INSERT INTO `studentnotification`( `cid`, `sid`,`noti`) VALUES ( '$cid','$sid','$noti') ";
			$result = mysqli_query($con,$sql);
			if($result)
				{
					header("location:company_hire_student.php");
				}
				else
				{
					echo "error : try again";
				}

				mysqli_close($con);