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

        <table border='1' align="center" width='900'>
    <tr height='50'>
    <th>SL.No.</th><th> Heading</th><th> Details</th><th>Register Date</th>
        <th>Delete Status</th>
    </tr>

<?php
include("dbconnect.php");
$query="select * FROM news_info order by reg_date";
$rs=mysqli_query($conn,$query) or die("error");

$cnt=0;
while($row=mysqli_fetch_array($rs))
{
    $cnt++;
    echo("<tr>");
            echo("<td>");
            echo($cnt);
            echo("</td>");

            // echo("<td>");
            //  echo($row["news_id"]);
            //  echo("</td>");
            
             echo("<td>");
             echo($row["news_heading"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["news_detail"]);
             echo("</td>");

             echo("<td>");
             echo($row["reg_date"]);
             echo("</td>");

             echo("<td>");
             echo($row["delete_status"]);
             echo("</td>");
}
?>
</table>
</div><!--end list-->
        </div><!--end right admin-->

    </div><!--end admin area-->





</div><!--end container-->

<?php

    include("footer.php");
?>
