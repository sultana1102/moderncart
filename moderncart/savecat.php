<?php
$a=$_REQUEST["nametxt"];
$b=$_REQUEST["dnmtxt"];

$d=$_REQUEST["cmbcattype"];
if($d=="Primary")
{
   $e=0;
}
else 
{
$e=$_REQUEST["cmbparent"];
}
$imgnm=$_FILES["imgfl"]["name"];
$tmpnm=$_FILES["imgfl"]["tmp_name"];
$fldr="upload/".$imgnm;
  move_uploaded_file($tmpnm,$fldr);

 include("dbconnect.php");

  $sql="Insert Into category_info(cat_name,cat_Dname,img_path,cat_type,parent_cat,reg_date)
    values('$a','$b','$imgnm','$d','$e',now())";

  mysqli_query($conn,$sql) or die("Query Error 1");

header("location:categoryform.php?resmsg=1");


?>