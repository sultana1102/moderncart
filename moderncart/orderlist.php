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
        <div id="custlist">

<table border='1' align="center" width='600'>
<tr height='50'>
<th>SL.No.</th><th>Customer Name</th><th>order Date</th><th>Total Amount</th>
<th>Current Status</th><th>Status</th>
</tr>
<?php
        include("dbconnect.php");
        $query="SELECT * FROM `order_master` order by order_date";
        $rs=mysqli_query($conn,$query);
        $cnt=0;
        while($row=mysqli_fetch_array($rs))
        {
            $cnt++;
            $id=$row["order_id"];
            echo("<tr>");
                    echo("<td>");
                    echo($cnt);
                    echo("</td>");
        
                    // echo("<td>");
                    //  echo($row["news_id"]);
                    //  echo("</td>");
                    
                     echo("<td>");
                     echo($row["user_name"]);
                     echo("</td>");
                    
                     echo("<td>");
                     echo($row["order_date"]);
                     echo("</td>");
        
                     echo("<td>");
                     echo($row["total_amount"]);
                     echo("</td>");
        
                     echo("<td>");
                     echo($row["order_status"]);
                     echo("</td>");
        

                     echo("<td>");
                     echo("<a href='displayorderdetail.php?odid=$id'>Detail</a>");
                     echo("</td>");
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
