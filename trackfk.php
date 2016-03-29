<?php
session_start();
$con=mysqli_connect("localhost","root","","shoppingsense"); /*==================================*/
$uname=$_SESSION['uname'];
$a=$_GET['links'];
$b=$_GET['affid'];
$link=$a."&affid=".$b;
$trans=$_GET['trans'];
$exp="insert into links values ('$uname','$link','$trans','pending')";
$res=mysqli_query($con,$exp);
echo "added";
?>