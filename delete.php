<?php
include "dbcon.php";
if(isset($_GET['delete']))
{
$id=$_GET['id'];
$id=mysqli_real_escape_string($con,$id);
$id=htmlentities($id);
$sql="delete from `student` where `id`=$id";
$res=mysqli_query($con,$sql);
if($res)
{
  echo "<div class='chip green white-text'>Deleted Successfully</div>";
  header("location:approvestudents.php");
}
else
{
  echo "<div class='chip red black-text'>Something Went Wrong</div>";
}
}
?>