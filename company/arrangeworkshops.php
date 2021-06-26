<?php
	include('dbcon.php');

	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}	
			$filename = $_FILES["file"]["name"]; 
			$tempname = $_FILES["file"]["tmp_name"];     
			$folder = "uploads/".$filename; 
					
		$move = move_uploaded_file($tempname, $folder);
		
		 $title = mysqli_real_escape_string($con,$_POST['title']);
		  $speaker = mysqli_real_escape_string($con,$_POST['speaker']);
		  $date = mysqli_real_escape_string($con,$_POST['date']);
		  $time = mysqli_real_escape_string($con,$_POST['time']);
		  $venue = mysqli_real_escape_string($con,$_POST['venue']);
		  $discription = mysqli_real_escape_string($con,$_POST['discription']);
		  $eligibility = mysqli_real_escape_string($con,$_POST['eligibility']);
		  $id =mysqli_real_escape_string($con,$_POST['cid']);
		  $user =mysqli_real_escape_string($con,$_POST['user']);
	
			$sql = "INSERT INTO `workshops`(`title`, `speaker`, `date`, `time`, `venue`, `discription`, `eligibility`, `file`, `c_id`, `c_name`)VALUES('$title','$speaker','$date','$time','$venue','$discription','$eligibility','$filename','$id','$user')" ;
			
			$result = mysqli_query($con,$sql);
			if($result)
				{
					header("location:company_workshop_interview.php");
				}
				else
				{
					echo "error : try again";
				}

				mysqli_close($con);
