<!--facultyregistration-->
<?php
	include('dbcon.php');
	if($con)
		 $fname = mysqli_real_escape_string($con,$_POST['fname']);
		  $femail = mysqli_real_escape_string($con,$_POST['femail']);
		  		  $fcollege = mysqli_real_escape_string($con,$_POST['fcollege']);

		  $fpost = mysqli_real_escape_string($con,$_POST['fpost']);
		  $fdepartment = mysqli_real_escape_string($con,$_POST['fdepartment']);
		  $contact = mysqli_real_escape_string($con,$_POST['contact']);
		  $faddress = mysqli_real_escape_string($con,$_POST['faddress']);
		  $fpassword = mysqli_real_escape_string($con,$_POST['fpassword']);
		  
		  				
			$sql = "INSERT INTO `fac`(`fname`, `femail`, `fcollege`, `fpost`, `fdepartment`, `contact`, `faddress`, `fpassword`)VALUES ('$fname','$femail','$fcollege','$fpost','$fdepartment','$contact','$faddress','$fpassword') ";
			$result = mysqli_query($con,$sql);
			if($result)
				{
					header("location:../login.html");
				}
				else
				{
					echo "error : try again";
				}

				mysqli_close($con);
		

?>