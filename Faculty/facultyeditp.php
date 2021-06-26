<?php
session_start();
if(isset($_SESSION['login_user']))
$user =	$_SESSION['login_user'];
$id =   $_SESSION['userid'];	
	{
		if(isset($_POST['Update']))	   
   {
	   $user = $_SESSION['login_user'] ;

	include('dbcon.php');
		  $fname = mysqli_real_escape_string($con,$_REQUEST['fname']);
		  $femail = mysqli_real_escape_string($con,$_REQUEST['femail']);
		 // $gender = mysqli_real_escape_string($con,$_REQUEST['gender']);
		  $fcollege = mysqli_real_escape_string($con,$_REQUEST['fcollege']);
		  $fpost = mysqli_real_escape_string($con,$_REQUEST['fpost']);
		  $fdepartment = mysqli_real_escape_string($con,$_REQUEST['fdepartment']);
		  $contact = mysqli_real_escape_string($con,$_REQUEST['contact']);
		  $faddress = mysqli_real_escape_string($con,$_REQUEST['faddress']);
		  		
			/*$sql = "UPDATE `student` SET `name`='$name',`dob`='$DateofBirth',`gender`='$gender',`city`='$City',`state`='$state',`nationality`='$nationality',`pincode`=' $pincode ',`email`='$email',`mobile`='$mobile',`address`='$address' WHERE `name`= '$user'";
			$result = mysqli_query($con,$sql);
			if($result)
				{
					header("location:Studenteditprofile.php");
					echo "Data update successfully";
				}
				else
				{
					echo "error : try again";
				}

				mysqli_close($con);
				
				*/
				
									if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
					}

					$sql = "UPDATE `fac` SET `fname`='$fname',`femail`='$femail',`fcollege`='$fcollege',`fpost`='$fpost',`fdepartment`='$fdepartment',`contact`=' $contact ',`faddress`='$faddress' WHERE `fid`= '$id'";
							
					if ($con->query($sql) === TRUE) {
											header("location:facultyeditprofile.php");

						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}
					$con->close();
   }
	}	
	  ?>

