

<?php
	session_start();
		$college= $_SESSION['fcollege'];
		 $myusername =$_SESSION['login_user'];
		 $id = $_SESSION['userid'] ;
			   include("dbcon.php"); 
  

 if(isset($_POST['submit']))	   
   {
      
	  $Course = mysqli_real_escape_string($con,$_POST['Course']);
	  $Department = mysqli_real_escape_string($con,$_POST['Department']); 
	


   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
     $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      //The explode() function breaks a string into an array.
      $extensions= array("jpeg","jpg","png","pdf","doc");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed";
      }
     
      if(empty($errors)==true) {
       $img =  move_uploaded_file($file_tmp,"../uploads/".$file_name);
      // echo "Success";
	   	   header("location:facultyexamupdates.php");

		  
      }else{
         print_r($errors);
      }
   }
  
  
  $sql = "INSERT INTO `examsyllabus`( `fid`, `course`, `depart`, `file`) VALUES( '$id','$Course','$Department','$img' )";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
      
if($count == 1) {
								 	   echo '<script language="javascript">alert("success")</script>';
	 
				 header("location:facultyexamupdates.php");

			  }
			  else {
				 $error = "Your Login Name or Password is invalid";
				 echo $error;
			  }
	  
	  		
   } 

?>

