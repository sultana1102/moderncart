<?php
require_once("header.php");
?>
<div id="content">
<?php @session_start();
$a=$_SESSION["prodid"];

$b=$_REQUEST["qntytxt"];
$c=$_SESSION["price"];
$d=$_SESSION["uname"];

include("dbconnect.php");

$sql="insert into cart_info(item_id,item_quantity,item_rate,user_name,reg_date)
values('$a','$b','$c','$d',now())";
 mysqli_query($conn,$sql) or die("Query Error 1");
    echo("<h3>Added To Your Cart</h3>");
    echo("<h3>Do You Add More Item Into Your Cart<h3>");
    echo("<h3> <a href=''> YES </a>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''> NO </a> </h3>");



</div><!--end container-->
<?php

    include("footer.php");
?>
