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
    <th>SL.No.</th><th> Offer Name</th><th>Start Date</th><th>End Date</th>
    <th>Parent Category</th><th>Discount in %</th><th>Register Date</th>
    </tr>

<?php
include("dbconnect.php");
$query="select * FROM offer_info order by reg_date";
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
            //  echo($row["offer_id"]);
            //  echo("</td>");
            
             echo("<td>");
             echo($row["offer_name"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["offer_strdt"]);
             echo("</td>");

             echo("<td>");
             echo($row["offer_enddt"]);
             echo("</td>");

            //  echo("<td>");
            //  echo($row["cat_type"]);
            //  echo("</td>");


            $id = $row["cat_type"];
            if ($id == 0) 
            {
               echo("<td>");
               echo("</td>");
            }  
            else 
            {
                $query_parent = "SELECT cat_name FROM category_info WHERE cat_id='$id'";
                   $rs_parent = mysqli_query($conn, $query_parent);
                echo("<td>");
               while ($arr = mysqli_fetch_array($rs_parent)) {
                    $pc = $arr["cat_name"];
                   echo($pc);
                }
                 echo("</td>");
            }
   
            echo("<td>");
             echo($row["offer_discount"]);
             echo("</td>");


             echo("<td>");
             echo($row["reg_date"]);
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
