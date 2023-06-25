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
         echo("your Complain has been saved");
     }
     
     echo("</div>");
  }
  ?>
<form method="post" enctype="multipart/form-data" action="savecomplain.php">
<?php
$rec=$_REQUEST["user"];
?>
<label>Complain To</label>
<input type="text" name="reciever" readonly="readonly" value='<?php echo("$rec");?>'/>

<label>Complain Heading</label>
<input type="text" name="complaintxt">

<label>Complain Detail</label>
<textarea name="complaindetail" style=height:200px;></textarea>

<div id="button">
<input type="submit" value="ok">
<input type="reset" value="cancel">
</div><!--end button-->

</form>
         <!--end new userform-->
    
     </div><!--end right user-->

        </div><!--end right admin-->

    </div><!--end admin area-->





</div><!--end container-->

<?php

    include("footer.php");
?>
