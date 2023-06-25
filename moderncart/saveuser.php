<?php
$a=$_REQUEST["nametxt"];
$b=$_REQUEST["emailtxt"];
$c=$_REQUEST["mobiletxt"];
$d=$_REQUEST["usnametxt"];
$e=$_REQUEST["pswrdtxt"];

include("dbconnect.php");

$row="SELECT * FROM user_info WHERE user_name='$d'";
$rsUser=mysqli_query($conn,$row);




//$rsUser=mysqli_query($con,"select * from customer_info where user_name='$d'");
if(mysqli_num_rows($rsUser)==0)
{
    $sql="insert into user_info(cust_name, cust_email, cust_mobile, user_name, user_password, user_type, reg_date) values('$a', '$b', '$c', '$d', '$e', 'user', now())";
    mysqli_query($conn,$sql) or die("Query error");

    header("location:userform.php?resmsg=1");
 }
 else 
  {
      header("location:userform.php?resmsg=2");
  }