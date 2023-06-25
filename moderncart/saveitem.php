<?php
$a=$_REQUEST["nametxt"];
$b=$_REQUEST["distxt"];


$c=$_REQUEST["rttxt"];
$d=$_REQUEST["discount"];
$e=$_REQUEST["cmbparent"];

$imgnm=$_FILES["imgfl"]["name"];
$tmpnm=$_FILES["imgfl"]["tmp_name"];
$fldr="upload/".$imgnm;
  move_uploaded_file($tmpnm,$fldr);

 include("dbconnect.php");
 
  $qur="insert into item_info(item_name,item_desc,img_src,item_rate,item_discount,parent_cat,reg_date)
  values('$a','$b','$imgnm','$c','$d','$e',now())";

   mysqli_query($conn,$qur) or die("Query Error 1");

   header("location:itemform.php?resmsg=1");


?>