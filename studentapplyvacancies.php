<?php
    $cid = $_GET['cid'];
	$sid = $_GET['uid'];
	$cname = $_GET['cname'];
	$vtitle = $_GET['vtitle'];
	$dt=date("Y-m-d");
	include('dbcon.php');
	
	$sql="INSERT INTO `apply_req`(`ap_id`, `u_id`, `c_id`, `c_name`, `vc_title`,`timestamp`) VALUES (DEFAULT,'".$sid."','".$cid."','".$cname."','".$vtitle."','".$dt."')";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		$sql = " SELECT * FROM `student` WHERE id='".$sid."' ";
						$result = mysqli_query($con,$sql);
						if($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
						{
						$name= $row['name'];
							//echo $name."<br/>";
						
					
						
						
						
					
	$sql2 = " SELECT * FROM `apply_req` WHERE `c_name` ='".$cname."' ";
						$result2 = mysqli_query($con,$sql2);
						if ($row2= mysqli_fetch_array($result2,MYSQLI_ASSOC))
						{
							$cmpname= $row2['c_name'];
							//$vc2title= $row2['vc_title'];
						$t= $row2['timestamp'];
							//$name= $row['name'];
							//$name= $row['name'];
						//	echo  $name,$cmpname,$vtitle,$t."<br/>";
						header("location:viewcompany.php");	
						}	
						}
	}
	else{
	echo" not inserted";	
		
	}
		$sql3 = " INSERT INTO `temp`( `s_name`, `c_id`, `c_name`, `vac_title`)VALUES ('$name', '$cid ','$cmpname' ,'$vtitle'  ) ";
		$result2 = mysqli_query($con,$sql3);

	
	
//echo $uid;
?>