
<?php   @session_start();
$a=$_REQUEST["usnametxt"];
$b=$_REQUEST["pswrdtxt"];

include("dbconnect.php");

$row=$row="SELECT * FROM user_info WHERE user_name='$a'";
$rsUser=mysqli_query($conn,$row);

if(mysqli_num_rows($rsUser)==0)
{
   header("location:loginform.php?resmsg=1");
}
else 
{
      $row=mysqli_fetch_array($rsUser);
      if($row["user_password"]==$b)
      {
        $_SESSION['uname']=$a;
         if($row["user_type"]=="user")
         {
            header("location:userchoice.php");
         }
         else if($row["user_type"]=="admin")
         {
            header("location:adminchoice.php");
         }

      }
      else 
      {
        header("location:loginform.php?resmsg=2");
      }

}
?>