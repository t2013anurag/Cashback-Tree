<?php
session_start();
$con=mysqli_connect("localhost","root","","shoppingsense"); /*==================================*/
$uname=$_SESSION['uname'];
$a=$_GET['links'];
$b=$_GET['MID'];
$c=$_GET['PID'];
$d=$_GET['CID'];
$e=$_GET['CRID'];
$f=$_GET['WID'];
$link=$a."&MID=".$b."&PID=".$c."&CID=".$d."&CRID=".$e."&WID=".$f;
$trans=$_GET['trans'];
$exp="insert into links values ('$uname','$link','$trans','pending')";
$res=mysqli_query($con,$exp);
echo "added omgpm";
?>