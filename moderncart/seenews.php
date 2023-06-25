<?php
require_once("header.php");
?>
<div id="content">
    &nbsp;
    <div id="newsarea">
 <table border='1'width="100%">
    <tr>
        <th width='100'>Sl.No.</th><th>News Heading</th>
    </tr>   
   <?php
    include("dbcoonect.php");
    $query="select news_id,news_heading from news_info where delete_status=0 order by reg_date desc";
    $rsnews=mysqli_query($conn,$query);
    $cnt=0;
    while($row=mysqli_fetch_array($rsnews))
    {
        $cnt++;
        $id=$row["news_id"];
        $heading=$row["news_heading"];
        echo("<tr>");
        echo("<td>");
        echo($cnt);
        echo("</td>");

        echo("<td>");
        echo("<a href='newsdetail.php?nid=$id'>");
        echo($heading);
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
