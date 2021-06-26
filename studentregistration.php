<!---studentregistration--->
<?php
 
	include('dbcon.php');
		  $name = mysqli_real_escape_string($con,$_POST['name']);
		  $DateofBirth = mysqli_real_escape_string($con,$_POST['DateofBirth']);
		  $gender = mysqli_real_escape_string($con,$_POST['gender']);
		  $City = mysqli_real_escape_string($con,$_POST['City']);
		  $state = mysqli_real_escape_string($con,$_POST['state']);
		  $nationality = mysqli_real_escape_string($con,$_POST['nationality']);
		  $pincode = mysqli_real_escape_string($con,$_POST['pincode']);
		  $Email = mysqli_real_escape_string($con,$_POST['Email']);
		  $Mobile = mysqli_real_escape_string($con,$_POST['Mobile']);
		  $Address = mysqli_real_escape_string($con,$_POST['Address']);
		  $password = mysqli_real_escape_string($con,$_POST['password']);
		  
		  				
			$sql = "INSERT INTO `student`( `name`, `dob`, `gender`, `city`, `state`, `nationality`, `pincode`, `email`, `mobile`, `address`, `password`) VALUES ( '$name','$DateofBirth','$gender','$City','$state','$nationality','$pincode','$Email','$Mobile','$Address ','$password') ";
			$result = mysqli_query($con,$sql);
			if($result)
				{
					header("location:login.html");
				}
				else
				{
					echo "error : try again";
				}

				mysqli_close($con);

			
	  
?>