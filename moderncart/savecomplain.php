<?php @session_start();
$rec=$_REQUEST["reciever"];
$a=$_REQUEST["complaintxt"];
$b=$_REQUEST["complaindetail"];

$user=$_SESSION["uname"];

include("dbconnect.php");

$query="insert into complain_info(complain_heading,complain_detail,sender_name,reciever_name,send_date)
values('$a','$b','$user','$rec',now())";
mysqli_query($conn,$query);

if($_SESSION["user_type"]=="user")
  header("location:usercomplainform.php?status=1");
else
header("location:admin-inbox.php");
?>