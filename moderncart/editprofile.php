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
            &nbsp;&nbsp;&nbsp;
        <div id="newuserform">
    <?php
     if(isset($_REQUEST["resmsg"]))
     {
        echo("<div id=message>");
        if($_REQUEST["resmsg"]==1)
        {
            echo("your data has been updated");
        }
        echo("</div>");
     }
     ?>
     <?php

     include("dbconnect.php");
     $user=$_SESSION ["uname"];
     $query="select * from user_info where user_name='$user'";
     $rsuser=mysqli_query($conn,$query);
     $row=mysqli_fetch_array($rsuser);

     $a=$row["cust_name"];
     $b=$row["cust_email"];
     $c=$row["cust_mobile"];
     $d=$row["user_password"];
   ?>
<form method="get" action="updateprofile.php">

<label>Enter your name</label>
<input type="text" name="nametxt" value="<?=$a?>"/>

<label>Enter your Email-Id</label>
<input type="text" name="emailtxt" value="<?=$b?>"/>

<label>Enter your Mobile</label>
<input type="text" name="mobiletxt" value="<?=$c?>"/>

<label>Enter your user name</label>
<input type="text" name="usnametxt" readonly="readonly" value="<?=$user?>"/>

<label>Enter your password</label>
<input type="text" name="pswrdtxt" value="<?=$d?>"/>

<div id="button">
<input type="submit" value="ok">
<input type="reset" value="cancel">
</div><!--end button-->





</form>

</div><!--end new user form-->

        </div><!--end right user-->

    </div><!--end user area-->





</div><!--end container-->

<?php
 include("footer.php");
 
?>
