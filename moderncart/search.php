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
    $search=$_REQUEST["srchtxt"];

    include("dbconnect.php");
    $sql="select * from category_info where cat_name like '%$search%' order by cat_Dname";
    $rs=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($rs))
    {
        echo("<div class='category'>");
        $id=$row["cat_id"];
        echo("<a href='index.php?cid=$id'>");
        echo($row["cat_name"]);
        echo("<br><br>");
        $img=$row["img_path"];
        echo("<img src='.\\upload\\$img' width='100' height='100' border='2'>");
        echo("</a>");
        echo("</div>");
    }
    ?>
   </div><!--end catarea-->
   
</div><!--end container-->
<?php

    include("footer.php");
?>
