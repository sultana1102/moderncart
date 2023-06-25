<?php 
include("header.php");
?>
<div id="content">
    <div id='userarea'>
     
        <div id="leftuser">
        <?php
                include("userchoicelist.php");
            ?>
        
        </div><!--end left user-->

        <div id="rightuser">
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
    
        </div><!--end right user-->

    </div><!--end user area-->





</div><!--end container-->

<?php
 include("footer.php");
 
?>
        