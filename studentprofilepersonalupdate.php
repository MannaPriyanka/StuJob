<?php
session_start();
if(isset($_SESSION['login_user']))
$user =	$_SESSION['login_user'];
  $id = $_SESSION['userid'] ;
				
	
	{
		if(isset($_POST['Update']))	   
   {
	   $user = $_SESSION['login_user'] ;

	include('dbcon.php');
		  $name = mysqli_real_escape_string($con,$_REQUEST['name']);
		  $DateofBirth = mysqli_real_escape_string($con,$_REQUEST['DateofBirth']);
		  $gender = mysqli_real_escape_string($con,$_REQUEST['gender']);
		  $City = mysqli_real_escape_string($con,$_REQUEST['City']);
		  $state = mysqli_real_escape_string($con,$_REQUEST['state']);
		  $nationality = mysqli_real_escape_string($con,$_REQUEST['nationality']);
		  $pincode = mysqli_real_escape_string($con,$_REQUEST['pincode']);
		  $email = mysqli_real_escape_string($con,$_REQUEST['email']);
		  $mobile = mysqli_real_escape_string($con,$_REQUEST['mobile']);
		  $address = mysqli_real_escape_string($con,$_REQUEST['address']);
		 			
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

					$sql = "UPDATE `student` SET `name`='$name',`dob`='$DateofBirth',`gender`='$gender',`city`='$City',`state`='$state',`nationality`='$nationality',`pincode`=' $pincode ',`email`='$email',`mobile`='$mobile',`address`='$address' WHERE `id`= '$id'";
							
					if ($con->query($sql) === TRUE) {
											header("location:Studenteditprofile.php");

						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}
					$con->close();
   }
	}	
	  ?>

