<?php
include("header.php");
?>
<div id="content">
  &nbsp;
<div id="newuserform">
<?php 
   if(isset($_REQUEST['resmsg']))
   {
     echo("<div id='message'>");
      if($_REQUEST['resmsg']==1)
      {
        echo("Invalid User Name");
      }
      else if($_REQUEST['resmsg']==2)
      {
        echo("Invalid Password");
      }
     
     echo("</div>");
   }
  ?>

<form method="get" action="newchecklogintobuy.php">

<label>Enter your user name</label>
<input type="text" name="usnametxt">

<label>Enter your password</label>
<input type="text" name="pswrdtxt">

<div id="button">
<input type="submit" value="ok">
<input type="reset" value="cancel">
</div><!--end button-->

</form>



</div><!--end new user form-->

</div><!--end container-->

<?php

    include("footer.php");
?>
