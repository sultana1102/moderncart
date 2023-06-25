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

<table border='1' align="center">
    <tr height='50'>
        <th>SL.No.</th><th>Customer Name</th><th>Customer Email</th><th>Customer Mobile</th>
        <th>User Name</th><th>User Password</th><th>Reg_Date</th>
    </tr>

<?php
include("dbconnect.php");
$query="select * FROM user_info where user_type='user'";
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
            //  echo($row["cust_id"]);
            //  echo("</td>");
            
             echo("<td>");
             echo($row["cust_name"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["cust_email"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["cust_mobile"]);
             echo("</td>");

             echo("<td>");
             echo($row["user_name"]);
             echo("</td>");

             echo("<td>");
             echo($row["user_password"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["reg_date"]);
             echo("</td>");           
}
?>
</table>


</div><!--end custlist-->

</div><!--end right admin-->

</div><!--end container-->

<?php
 include("footer.php");
 
?>
