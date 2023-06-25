<?php @session_start();
require_once("header.php");
?>
<div id="content">
    <div id="iteminfo">

 <?php
        include("dbconnect.php");
        $id=$_REQUEST["odid"];
       $user=$_SESSION["uname"];
    //    echo($id);
    //    echo($user);

    $query="SELECT * FROM order_master WHERE order_id=$id";
    $rsmain=mysqli_query($conn,$query) or die("query error");
    $row=mysqli_fetch_array($rsmain);
    echo("Bill No : ".$row["order_id"]."<br>");
    echo("Order_Date : ".$row["order_date"]."<br>");
    echo("Shipping Address : ".$row["shipping_address"]."<br>");
    echo("Total Amount: ".$row["total_amount"]."<br>");
    ?>
      <table border='1'>
      <tr width='100'>
         <th>Sl. No.</th><th>Item Name</th><th>Image</th><th>Rate</th><th>Quantity</th>
           <th>Amount</th><th>Status</th>
         </tr>
    

     <?php
       $sql= "select * from Order_detail,item_info where Order_detail.order_ref_id=$id and Order_detail.item_id=item_info.item_id";
    //   $sql="select Od.Order_detail_id,Od.item_rate,Od.item_quantity,ii.item_name,ii.img_src 
    // from Order_detail as Od,item_info as ii where Od.order_ref_id=$id and Od.item_id=ii.item_id";
    $rscart=mysqli_query($conn,$sql) or die("query error");
            $cnt=0;
            $total=0;
            while($row=mysqli_fetch_array($rscart))
            {
                $cnt++;
                echo("<tr>");
                echo("<td>");
                echo($cnt);
                echo("</td>");
    
                 echo("<td>");
                 echo($row["item_name"]);
                 echo("</td>");
                
                 $img=$row["img_src"];
                 echo("<td>");
                 echo("<img src='./upload/$img' width='50' height='50' border='1'>");
                 echo("</td>");

                 echo("<td>");
                 echo($row["item_rate"]);
                 echo("</td>");

                 echo("<td>");
                 echo($row["item_quantity"]);
                echo("</td>");

                echo("<td>");
            $amount=$row["item_quantity"]*$row["item_rate"];
            echo($amount);
            $totalamount=$totalamount+$amount;
             echo("</td>");

            echo("<td>");
            $did=0;
             echo("<a href='deleteitemfromcart.php?pid=$did'>Delete</a>");
             echo("</td>");

             echo("</tr>");
            }
            echo("<tr> <td colspan='5' align='right'><b>Total Amount :&nbsp;</b></td> <td colspan='2'><b>$totalamount</b> </td> </tr>");
            echo("</table>");    
 ?>
 </div><!--end iteminfo -->
 <div id="bill">
<a href='printorderbill.php?amount=<?=$totalamount?>'id='place order'>Print Bill</a> 
          </div>

</div> <!--end container-->
<?php

    include("footer.php");
?>
