<?php
include("header.php");
?>
<div id="content">
    <div id='adminarea'>
     
        <div id="leftadmin">
            <?php
                include("adminchoicelist.php");
            ?>
        
        </div><!--end left admin-->

        <div id="rightadmin">
        <?php
            $id=$_REQUEST["odid"];
        ?>
    <div id="orderstatus">
        <form method="get" action="changeorderstatusforadmin.php">
            Order Status
            <input type="hidden" name="ordrid" value="<?php echo($id);?>"/>
            <select name="cmbstatus">
            <option>Pending</option>
            <option>Dispatch</option>
            <option>Recieved</option>
            <option>Reject</option>
            <option>Cancel</option>
            <option>Return</option>
        </select>
        <input type="submit" value="ok">
</form>
</div><!--endorder status-->
        <div id="custlist">
<table border='1' align="center" width='600'>
<tr height='50'>
<th>SL.No.</th><th>Item Name</th><th>Item Quantity</th><th>Item Rate</th>
<!-- <th>Status</th> -->
</tr>
<?php
        include("dbconnect.php");
        $query="SELECT * FROM Order_detail,item_info where Order_detail.item_id = item_info.item_id
         and order_ref_id='$id'";
        $rs=mysqli_query($conn,$query);
        $cnt=0;
        while($row=mysqli_fetch_array($rs))
        {
            $id=$row["order_id"];
            
            $cnt++;
            echo("<tr>");
                    echo("<td>");
                    echo($cnt);
                    echo("</td>");
        
                    // echo("<td>");
                    //  echo($row["news_id"]);
                    //  echo("</td>");
                    
                     echo("<td>");
                     echo($row["item_name"]);
                     echo("</td>");
                    
                     echo("<td>");
                     echo($row["item_quantity"]);
                     echo("</td>");
        
                     echo("<td>");
                     echo($row["item_rate"]);
                     echo("</td>");
        
                    //  echo("<td>");
                    //  echo("<a href='displayorderdetail.php?odid=$id'>Detail</a>");
                    //  echo("</td>");
        }
        ?>
        </table>
        
    </div>
        </div><!--end right admin-->

    </div><!--end admin area-->





</div><!--end container-->

<?php

    include("footer.php");
?>
