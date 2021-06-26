<?php
session_start();
if(isset($_SESSION['login_user']))
	
	{
		if(isset($_POST['Update']))	   
   {
	   $user = $_SESSION['login_user'] ;

	include('dbcon.php');
		  $sname = mysqli_real_escape_string($con,$_REQUEST['sname']);
		  $SSC = mysqli_real_escape_string($con,$_REQUEST['SSC']);
		  $hname = mysqli_real_escape_string($con,$_REQUEST['hname']);
		  $HSC = mysqli_real_escape_string($con,$_REQUEST['HSC']);
		  $dpname = mysqli_real_escape_string($con,$_REQUEST['dpname']);
		  $dpDepartment = mysqli_real_escape_string($con,$_REQUEST['dpDepartment']);
		  $diplomap = mysqli_real_escape_string($con,$_REQUEST['diplomap']);
		  $dphistoryofBacklog = mysqli_real_escape_string($con,$_REQUEST['dphistoryofBacklog']);
		  $dename = mysqli_real_escape_string($con,$_REQUEST['dename']);
		  $deDepartment = mysqli_real_escape_string($con,$_REQUEST['deDepartment']);
		  $degreep = mysqli_real_escape_string($con,$_REQUEST['degreep']);
		  $dehistoryofBacklog = mysqli_real_escape_string($con,$_REQUEST['dehistoryofBacklog']);
		  
		  
		  // Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "UPDATE `student` SET `sscsname`=' $sname',`sscper`='$SSC',`hscsname`='$hname',`hscper`='$HSC',`diplomacname`='$dpname',`diplomadep`='$dpDepartment',`diplomaper`='$diplomap',`diplomaback`='$dphistoryofBacklog ',`degreecname`='$dename',`degreedep`='$deDepartment',`degreeper`='$degreep',`degreeback`= '$dehistoryofBacklog' WHERE `name`= '$user' ";

if ($con->query($sql) === TRUE) {
						header("location:Studenteditprofile.php");

    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$con->close();
		  				
			/*$sql = 0;
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

				
   }
	}	
	  ?>

