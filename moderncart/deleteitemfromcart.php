<?php
$a=$_REQUEST["pid"];
include("dbconnect.php");

$query="delete from cart_info where cart_id=$a";
mysqli_query($conn,$query);

header("location:displaycart.php");
?>