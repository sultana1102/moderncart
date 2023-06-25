<?php
@session_start();
$a=$_REQUEST["ordrid"];
$b=$_REQUEST["cmbstatus"];

include("dbconnect.php");
$query="update order_master set order_status='$b',last_update_date=now()
where order_id='$a'";
mysqli_query($conn,$query);

// if($_SESSION["user_type"]=="user")
// {
// header("location:displaycancelorderdetail.php");
// }
// else
// {
header("location:orderlist.php");

// }

?>