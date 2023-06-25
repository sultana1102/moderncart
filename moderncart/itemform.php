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
            <div id="newuserform">
    <?php
     if(isset($_REQUEST["resmsg"]))
     {
        echo("<div id=message>");
        if($_REQUEST["resmsg"]==1)
        {
            echo("your data has been saved");
        }
        else if($_REQUEST["resmsg"]==2)
            {
            echo("already existing user");
        }
        echo("</div>");
     }
     ?>
<form method="post" enctype="multipart/form-data" action="saveitem.php">

<label>Enter Item Name</label>
<input type="text" name="nametxt">

<label>Enter Item Description</label>
<input type="text" name="distxt">

<label>Choose Item Image </label>
<input type="file" name="imgfl">

<label>Enter Item Rate</label>
<input type="text" name="rttxt">

<label>Enter Discount On Items in %</label>
<input type="text" name="discount">



<label>Choose Parent Category</label>
<select name="cmbparent">
    <option value='0'>Choose Parent Category Here</option>
    <?php
    include("dbconnect.php");
    $sql="select cat_name,cat_id from category_info";
    $row=mysqli_query($conn,$sql);

    while($rscat=mysqli_fetch_array($row))
    {
        $id=$rscat['cat_id'];
        echo("<option value='$id'>");
        echo($rscat['cat_name']);
        echo("</option>");
    }
    ?>
 </select>

<div id="button">
<input type="submit" value="ok">
<input type="reset" value="cancel">
</div><!--end button-->





</form>
                <!--end new userform-->
        </div><!--end right admin-->

    </div><!--end admin area-->





</div><!--end container-->

<?php
include("footer.php");
?>
