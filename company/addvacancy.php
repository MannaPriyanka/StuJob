<?php
session_start();
 $id =$_SESSION['userid'] ;
	$user = $_SESSION['login_user'] ;

	include('dbcon.php');
	if(isset($_POST['post']))
	
	{
			  
			$filename = $_FILES["file"]["name"]; 
			$tempname = $_FILES["file"]["tmp_name"];     
			$folder = "uploads/".$filename; 
					
		move_uploaded_file($tempname, $folder);
		
		  $title = mysqli_real_escape_string($con,$_POST['title']);
		  $vacancyfor = mysqli_real_escape_string($con,$_POST['vacancyfor']);
		  $timestamp = mysqli_real_escape_string($con,$_POST['timestamp']);
		  $type = mysqli_real_escape_string($con,$_POST['type']);
		  $Description = mysqli_real_escape_string($con,$_POST['Description']);
		  $Criteria = mysqli_real_escape_string($con,$_POST['Criteria']);
		  $cid =mysqli_real_escape_string($con,$_POST['cid']);
			
			$sql = "INSERT INTO `companyaddvacancy`( `title`, `vacanyfor`, `time`, `type`, `description`, `criteria`, `file`, `cid`) VALUES('$title ','$vacancyfor ',' $timestamp   ','$type  ','$Description  ','$Criteria ', '$filename','$cid' )";
			$result = mysqli_query($con,$sql);
			if($result)
				{
					header("location:company_faculty.php");
				}
				else
				{
					echo "error : try again";
				}

				mysqli_close($con);

	}
