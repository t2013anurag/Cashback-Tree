<?php
session_start();
$con=mysqli_connect("localhost","root","","shoppingsense"); /*---------------------------------------------------*/
$_SESSION["email"]=$_GET['email'];
$_SESSION["uname"]=$_GET['username'];
$_SESSION["dname"]=$_GET['dname'];
$_SESSION["pwd"]=$_GET['pwd'];
$_SESSION["cpwd"]=$_GET['cpwd'];
$_SESSION["title"]=$_GET['title'];
$_SESSION["fname"]=$_GET['fname'];
$_SESSION["add1"]=$_GET['add1'];
$_SESSION["add2"]=$_GET['add2'];
$_SESSION["zip"]=$_GET['zip'];
$_SESSION["city"]=$_GET['city'];
$_SESSION["state"]=$_GET['state'];
$_SESSION["country"]=$_GET['country'];
$_SESSION["phone"]=$_GET['phone'];
$uname=$_SESSION["uname"];
$exp="select count(*) from users where uname='$uname'";
$res=mysqli_query($con,$exp);
$row=mysqli_fetch_array($res);
if ($_SESSION["email"]=="" || $_SESSION['uname']=="" || $_SESSION['dname']==""  || $_SESSION['pwd']=="" || $_SESSION['cpwd']=="" || $_SESSION['title']=="" || $_SESSION['fname']=="" || $_SESSION['add1']=="" || $_SESSION['add2']=="" || $_SESSION['zip']=="" || $_SESSION['city']=="" || $_SESSION['state']=="" || $_SESSION['country']=="" || $_SESSION['phone']=="")
echo "1";
else if($_SESSION['pwd']!=$_SESSION['cpwd'])
echo "2";
else if($row[0]>0)
echo "3";
else
{
$rand=mt_rand(100000000,999999999);
$check=mail($_SESSION["email"],"Shopping Sense Verification Id","your Verification Id:'$rand'","admin@shoppingsense.in");
echo $rand;
}
//echo $_SESSION['fname'];
?>