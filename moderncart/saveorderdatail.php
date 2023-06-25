<?php @session_start();
$a=$_REQUEST["txtAddress"];
$x=$_REQUEST["txtAmount"];
$user=$_SESSION["uname"];

include("dbconnect.php");
$sql1="insert into order_master(user_name,order_date,total_amount,shipping_address,order_status,last_update_date)
values('$user',now(),'$x','$a','pending',now())";

mysqli_query($conn,$sql1) or die("query error 1");

$master_id=mysqli_insert_id($conn);
echo($master_id);

$sql2="select * from cart_info where user_name='$user'";
  $rscart=mysqli_query($conn,$sql2) or die("query error 2");
  while($row=mysqli_fetch_array($rscart))
     {
      $itm=$row["item_id"];
      $qty=$row["item_quantity"];
     $rt=$row["item_rate"];
         echo($itm);
         echo("<br>");
       echo($qty);
       echo("<br>");
       echo($rt);
  $query="INSERT INTO Order_detail(`item_id`, `item_quantity`, `item_rate`, `order_ref_id`)
  values('$itm','$qty','$rt','$master_id')";
  mysqli_query($conn,$query) or die("error 202");
     }
    
$sql3="delete from cart_info where user_name='$user'";
mysqli_query($conn,$sql3) or die("query error 3");

header("location:displayfinalorder.php?odid=$master_id");




?>