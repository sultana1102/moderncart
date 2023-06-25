<?php
require_once("header.php");
?>
<div id="content">
<div id='userarea'>
     
     <div id="leftuser">
     <?php
             include("userchoicelist.php");
         ?>
     
     </div><!--end left admin-->

     <div id="rightuser">
 <div id="addmoretocart">

<?php @session_start();
$a=$_SESSION["prodid"];

$b=$_REQUEST["qntytxt"];
$c=$_SESSION["price"];
$d=$_SESSION["uname"];

include("dbconnect.php");

$sql="insert into cart_info(item_id,item_quantity,item_rate,user_name,reg_date)
values('$a','$b','$c','$d',now())";
 mysqli_query($conn,$sql) or die("Query Error 1");
    echo("<h2>Added To Your Cart....!!</h2 >");
    echo("<h3>Do You Want To Add More Item Into Your Cart...???<h3>");
    echo("<div id='button'>");
    echo("<h4> <a href='index.php'> YES </a></h4>");
    // echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displaycart.php'> NO </a> </h3>");
    
   echo("<h4><a href='displaycart.php'> NO </a> </h4>");
   echo("</div>");//end button
    echo("</div>");//end addmoretocart
?>
</div><!--end right admin-->

</div><!--end admin area-->

</div><!--end container-->

<?php

    include("footer.php");
?>
