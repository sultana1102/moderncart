<?php @session_start();
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
    
    <div id="list">
<table border='1' align="center">
    <tr>
        <th>SL.No.</th><th>Product Name</th><th>Image</th><th>Quantity</th><th>Rate</th>
        <th>Amount</th><th>Status</th>
    </tr>
    <?php
        include("dbconnect.php");
        $user=$_SESSION['uname']; 
        $sql="select ci.cart_id,ci.item_rate,ci.item_quantity,ii.item_name,ii.img_src from cart_info as ci,item_info as ii where ci.item_id=ii.item_id  and user_name='$user'";
        
        $rscart=mysqli_query($conn,$sql);
            $cnt=0;
            $total=0;
          while ($row=mysqli_fetch_array($rscart))
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
             echo($row["item_quantity"]);
            echo("</td>");

            echo("<td>");
             echo($row["item_rate"]);
             echo("</td>");

            echo("<td>");
            $amount=$row["item_quantity"]*$row["item_rate"];
            echo($amount);
            $totalamount=$totalamount+$amount;
             echo("</td>");

            echo("<td>");
            $id=$row["cart_id"];
             echo("<a href='deleteitemfromcart.php?pid=$id'>Delete</a>");
             echo("</td>");

          

            echo("</tr>");
         }
         echo("<tr> <td colspan='5' align='right'><b>Total Amount :&nbsp;</b></td> <td colspan='2'><b>$totalamount</b> </td> </tr>");
    ?>

</table>
        </div><!--end table-->

        <div id="orderplace">
            <a href="placeorderform.php?amnt=<?=$totalamount;?>">Place Order</a>

        </div><!--end order place-->
        </div><!--end right admin-->

    </div><!--end admin area-->




</div> <!--end container-->
<?php

    include("footer.php");
?>
