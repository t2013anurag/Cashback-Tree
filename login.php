<?php
session_start();
$con=mysqli_connect("localhost","siddarth_kunal","fearisnotreal25","siddarth_shoppingsense");
$uname=$_GET['uname'];
$pwd=$_GET['pwd'];
$exp="select count(*) from users where uname='$uname' and pwd='$pwd'";
$res=mysqli_query($con,$exp);
$row=mysqli_fetch_array($res);
if($row[0]!=0)
$_SESSION['uname']=$uname;
echo $row[0];
mysqli_close($con);
?>