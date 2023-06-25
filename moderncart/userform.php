<?php
include("header.php");
?>
<div id="content">
    &nbsp;
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
<form method="get" action="saveuser.php">

<label>Enter your name</label>
<input type="text" name="nametxt">

<label>Enter your Email-Id</label>
<input type="text" name="emailtxt">

<label>Enter your Mobile</label>
<input type="text" name="mobiletxt">

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
&nbsp;
</div><!--end container-->

<?php

    include("footer.php");
?>
