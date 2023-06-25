
<?php
require_once("header.php");
?>
<div id="content">
    &nbsp;
    <div id="newsarea">
 <table border='1'width="100%">
    <tr>
        <th width='100'>Sl.No.</th><th>News Detail</th>
    </tr>   
   <?php
   $x=$_REQUEST["nid"];
    include("dbcoonect.php");
    $query="select news_id,news_detail from news_info where news_id=$x";
    $rsnews=mysqli_query($conn,$query);
    $cnt=0;
    while($row=mysqli_fetch_array($rsnews))
    {
        $cnt++;
        $detail=$row["news_detail"];
        echo("<tr>");
        echo("<td>");
        echo($cnt);
        echo("</td>");

        echo("<td>");
        echo($detail);
        echo("</a>");
        echo("</td>");
        echo("</tr>");
        
    }
    ?>
    </table>
</div><!--end news area-->
</div><!--end container-->
<?php

    include("footer.php");
?>
