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
     if(isset($_REQUEST["status"]))
     {
        echo("<div id=message>");
        if($_REQUEST["status"]==1)
        {
            echo("your data has been saved");
        }
         echo("</div>");
     }
     ?>
<form method="post" enctype="multipart/form-data" action="saveoffer.php">

<label>Enter Offer Name</label>
<input type="text" name="nametxt">

<label>Choose Offer Start Date</label>
<input type="date" name="strtdate">

<label>Choose Offer End Date  </label>
<input type="date" name="enddate">

<label>Choose Category</label>
<select name="cmbcat">
    <option>Choose Category Name</option>
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
 
<label>Enter Offer Discount in %</label>
<input type="text" name="discount">


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
