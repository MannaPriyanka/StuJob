<?php
session_start();
include("dbcon.php");
$companyid =  $_SESSION["userid"]; 
$studentid = $_POST["stid"];
$studentname =  $_POST["sname"];
$studentemail = $_POST["semail"];
$jobtype =  $_POST["jtype"];
$salary = $_POST["salary"];
$post = $_POST["post"];
$joindate = $_POST["joindate"];
$sql = "INSERT INTO `hiredstudent`( `cid`, `sid`, `studentname`, `studentemail`, `jobtype`, `salary`, `post`, `joindate`) VALUES ( '$companyid', '$studentid' , '$studentname' ,  '$studentemail',' $jobtype','  $salary ','$post','  $joindate')";
$result = mysqli_query($con,$sql);
			if($result)
				{
					header("location:company_pending.php");
				}
				else
				{
					echo "error : try again";
				}

				mysqli_close($con);


