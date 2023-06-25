<?php
include("dbconnect.php") or die("connecion");
 function showtables($sql)
 
{
   $conn=$GLOBALS["con"];
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($rs);
    $col=mysqli_num_fields($rs);
    echo($row." ".$col);
    echo("<table border='1'>");



    echo("</table>");
 }
showtables("select * from category_info");
?>