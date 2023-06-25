
<?php   @session_start();
$a=$_REQUEST["usnametxt"];
$b=$_REQUEST["pswrdtxt"];

include("dbconnect.php");

$row=$row="SELECT * FROM user_info WHERE user_name='$a'";
$rsUser=mysqli_query($conn,$row);

if(mysqli_num_rows($rsUser)==0)
{
   header("location:newchecklogintobuy.php?resmsg=1");
}
else 
{
      $row=mysqli_fetch_array($rsUser);
      if($row["user_password"]==$b)
      {
        $_SESSION['uname']=$a;
         if($row["user_type"]=="user")
         {
            header("location:choosequantity.php");
         }
         else if($row["user_type"]=="admin")
         {
            header("location:choosequantity.php");
         }

      }
      else 
      {
        header("location:newchecklogintobuy.php?resmsg=2");
      }

}
?>