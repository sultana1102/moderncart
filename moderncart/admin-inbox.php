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
            <div id="admininbox">
        <table border='1'width="60%">
    <tr>
        <th>Sl.No.</th>
        <th>Complain Heading</th>
        <th>Recieve Date</th>
        <th>Sender Name </th>
    </tr>   
   <?php
   // include("dbcoonect.php");
    $user=$_SESSION["uname"];
    $query="select complain_id,complain_heading,send_date,sender_name from complain_info where reciever_name='admin' order by send_date desc";
    $rsnews=mysqli_query($conn,$query) or die("error");
    $cnt=0;
    while($row=mysqli_fetch_array($rsnews))
    {
        $cnt++;
        $id=$row["complain_id"];
        $heading=$row["complain_heading"];
        $sndrnm=$row["sender_name"];
        $dt=$row["send_date"];

        echo("<tr>");
        echo("<td>");
        echo($cnt);
        echo("</td>");

        echo("<td>");
        echo("<a href='complaindetailtoadmin.php?cid=$id'>");
         echo($heading);
        echo("</a>");
        
        
        echo("</td>");

        echo("<td>");
        echo($dt);
        echo("</td>");

        echo("<td>");
        echo($sndrnm);
        echo("</td>");
        
        echo("</tr>");
        
    }
    ?>
    </table>
</div><!--end admin inbox-->
    
    </div><!--end right admin-->

    </div><!--end admin area-->

</div><!--end container-->

<?php

    include("footer.php");
?>
