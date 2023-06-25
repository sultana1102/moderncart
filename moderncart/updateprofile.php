<?php
$a=$_REQUEST["nametxt"];
$b=$_REQUEST["emailtxt"];
$c=$_REQUEST["mobiletxt"];
$d=$_REQUEST["usnametxt"];
$e=$_REQUEST["pswrdtxt"];

include("dbconnect.php");
$query="UPDATE user_info SET cust_name='$a',cust_email='$b',cust_mobile='$c',
user_name='$d',user_password='$e' WHERE user_name='$d'";
mysqli_query($conn,$query) or die("query error");

header("location:editprofile.php?resmsg=1");

?>