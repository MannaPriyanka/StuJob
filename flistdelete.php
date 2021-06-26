<?php
include "dbcon.php";
if(isset($_GET['reject']))
{
$id=$_GET['id'];
$id=mysqli_real_escape_string($con,$id);
$id=htmlentities($id);
$sql="UPDATE `temp` SET `status`=0  WHERE `t_id` = '$id' ";
$res=mysqli_query($con,$sql);
if($res)
{
 // echo "<div class='chip green white-text'>Deleted Successfully</div>";
  header("location:studentappliedvacancies.php");
}
else
{
  echo "<div class='chip red black-text'>Something Went Wrong</div>";
}
}
?>