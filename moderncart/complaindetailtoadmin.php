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
        <div id="cmpdtl">
   <?php
    $id=$_REQUEST["cid"];
    include("dbconnect.php");
    $query="select * from complain_info where complain_id='$id' order by send_date desc";
    $rs=mysqli_query($conn,$query);
    
    $row=mysqli_fetch_array($rs);
    
        $id=$row["complain_id"];
        $heading=$row["complain_heading"];
        $dtl=$row["complain_detail"];
        $sndrnm=$row["sender_name"];
        $dt=$row["send_date"];
        
        echo("Heading : ".$heading);
        echo("<hr>");
        echo("Receive date : ".$dt);
        echo("<hr>");
        echo("Sender : ".$sndrnm);
        echo("<hr>");
        echo("Detail: ".$dtl);
        echo("<hr>");
    ?>
    </div><!--end cmpdtl-->

    <div id="replycomplain">
        <a href="adminreplytocomplain.php?user=<?=$sndrnm?>">Reply</a>
    </div><!--end replycomplain-->
        </div><!--end right admin-->

    </div><!--end admin area-->

</div><!--end container-->

<?php

    include("footer.php");
?>
