<?php
include "dbcon.php";
if(isset($_GET['approve']))
{
$id=$_GET['id'];
$id=mysqli_real_escape_string($con,$id);
$id=htmlentities($id);
$sql="update `student` set `status`=1 where `id`='$id' ";
$res=mysqli_query($con,$sql);
if($res)
{
  echo"<div class='chip green white-text'>Comment Approved.</div>";
    header("location:approvestudents.php");

}
else
{
  echo "<div class='chip red black-text'> Sorry, Something Went Wrong.</div>";
}
}
?>