<?php
@session_start();
$a=$_REQUEST["ordrid"];
$b=$_REQUEST["cmbstatus"];

include("dbconnect.php");
$query="update order_master set order_status='$b',last_update_date=now()
where order_id='$a'";
mysqli_query($conn,$query);

header("location:displaycancelorderdetail.php");

?>