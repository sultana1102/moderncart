<?php  @session_start();

$x=$_REQUEST["prodid"];
$_SESSION["prodid"]=$x;
$_SESSION["price"]=$_REQUEST["price"];
if(isset($_SESSION["uname"]))
{
 header("location:choosequantity.php");
}
else
{
    header("location:loginformtobuy.php");
}

?>