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
         echo("your News has been saved");
     }
     else if($_REQUEST["status"]==2)
         {
         echo("already existing user");
     }
     echo("</div>");
  }
  ?>
<form method="post" enctype="multipart/form-data" action="savenews.php">

<label>Enter News Heading</label>
<input type="text" name="newstxt">

<label>Enter News Details</label>
<textarea name="newsdetail" style=height:200px;></textarea>

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
