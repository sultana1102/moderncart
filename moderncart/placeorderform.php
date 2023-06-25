<?php
include("header.php");
?>
<div id="content">
<div id='userarea'>
     
     <div id="leftuser">
     <?php
             include("userchoicelist.php");
         ?>
     
     </div><!--end left admin-->

     <div id="rightuser">
     &nbsp;
<div id="newuserform">
    <?php
    //  if(isset($_REQUEST["resmsg"]))
    //  {
    //     echo("<div id=message>");
    //     if($_REQUEST["resmsg"]==1)
    //     {
    //         echo("your data has been saved");
    //     }
    //     else if($_REQUEST["resmsg"]==2)
    //         {
    //         echo("already existing user");
    //     }
    //     echo("</div>");
    //  }
    //  ?>
<form method="get" action="saveorderdatail.php">
<label>Total Amount </label>
<input type="text" name='txtAmount' value=<?=$_REQUEST['amnt']?> readonly>
<label>Enter Shipping Address</label>
<textarea rows='5' name="txtAddress" ></textarea>
<div id='Button'>
<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</div><!--end button-->
</form>

</div><!--end new user form-->

</div><!--end right admin-->

    </div><!--end admin area-->

</div><!--end container-->

<?php

    include("footer.php");
?>
