<?php
require_once("header.php");
?>
<div id="content">
   
    <div id="searchbox">
        <form method="get" action="search.php">
            <input type="text" name="srchtxt" placeholder="SEARCH">
            <input type="submit" value="ok">
</form>
    </div><!--end searchbox-->
     <div id="register"> 
        <a href="seenews.php">News</a>&nbsp;&nbsp;
    <a href="loginform.php">Login</a>&nbsp;&nbsp;
    <a href="userform.php">New User</a>
    </div><!--end register-->

<div id="catarea">
    <?php
    if(isset($_REQUEST["cid"]))
    {
        $prid=$_REQUEST["cid"];
    }
    else
    {
        $prid=0;
    }

    include("dbconnect.php");
    $sql="select * from category_info where parent_cat=$prid order by cat_Dname";
    $rs=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($rs))
    {
        echo("<div class='category'>");
        $id=$row["cat_id"];
        echo("<a href='index.php?cid=$id'>");
        echo($row["cat_name"]);
        echo("<br><br>");
        $img=$row["img_path"];
        echo("<img src='.\\upload\\$img' width='160' height='140' border='2'>");
        echo("</a>");
        echo("</div>");
    }

    ?>

</div><!--end catarea-->

 <hr>
<div id="itemarea">
<?php
    if(isset($_REQUEST["cid"]))
    {
        $prid=$_REQUEST["cid"];
    }
    else
    {
        $prid=0;
    }

    include("dbconnect.php");
    $sql="select * from item_info where parent_cat=$prid order by item_name";
    $rs=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($rs))
    {
        echo("<div class='item'>");
        $id=$row["item_id"];
        echo($row["item_name"]);
        echo("<br>");
        $img=$row["img_src"];
        echo("<img src='./upload/$img' width='150' height='130' border='2'>");
        echo("<br>");
        echo("Details : ".$row["item_desc"]);
        echo("<br>");
        echo("Rate :<s> ".$row["item_rate"]."</s>");
        echo("<br>");
        $dis=$row["item_discount"];

         $spdis=0;
         $query="select * from offer_info where now()>=offer_strdt and now()<=offer_enddt";
         $rsoffer=mysqli_query($conn,$query);

         while($rowoffer=mysqli_fetch_array($rsoffer))
         {
            $cats=$rowoffer["cat_type"];
             $catarray=explode("-",$cats);

             //echo($cats);
             //print_r($catarray);
         if(in_array($prid,$catarray))
            {
                $spdis=$spdis+$rowoffer["offer_discount"];
            }
        }
        // echo($spdis."<br>");
        // echo($dis);
        $dis=$dis + $spdis;
        $final=$row["item_rate"]-$row["item_rate"]*$dis/100;
        echo("Disc-Rate : ".$final);

        echo("<div class='buybutton'>");
        echo("<a href='checkalreadylogin.php?prodid=$id&price=$final'>Buy</a>");

        echo("</div>");//end bybutton
        
        
        echo("</div>");//end item
    }

    ?> 

</div><!--end itemarea -->

 

</div><!--end container-->
<?php

    include("footer.php");
?>
