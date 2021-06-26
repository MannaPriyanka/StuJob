<?php
include "dbcon.php";
if(isset($_GET['approve']))
{
$id=$_GET['id'];
$id=mysqli_real_escape_string($con,$id);
$id=htmlentities($id);
$sql="UPDATE `temp` SET `status`=1  WHERE `t_id` = '$id' ";
$res=mysqli_query($con,$sql);
if($res)
{
  echo"<div class='chip green white-text'>Comment Approved.</div>";
    header("location:studentappliedvacancies.php");

}
else
{
  echo "<div class='chip red black-text'> Sorry, Something Went Wrong.</div>";
}
}
?>