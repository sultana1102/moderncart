<?php
 $cats="";
  function getchildcat($prnt)
  {
    $GLOBALS["cats"]=$GLOBALS["cats"].$prnt."-";
    include("dbconnect.php");
    $sql="select cat_id from category_info where parent_cat='$prnt'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0)
    {
        return;
    }
    else
    {
      while($row=mysqli_fetch_array($result))
      {
        getchildcat($row["cat_id"]);
      }
    }
  }

$a=$_REQUEST["nametxt"];
$b=$_REQUEST["strtdate"];
$c=$_REQUEST["enddate"];
$d=$_REQUEST["cmbcat"];
$e=$_REQUEST["discount"];

$tempdt=strtotime("1 day",strtotime($c));
$newdate=date('y-m-d',$tempdt);


getchildcat($d);


 include("dbconnect.php");
$sql="insert into offer_info(offer_name,offer_strdt,offer_enddt,cat_type,offer_discount,reg_date)
values('$a','$b','$newdate','$cats','$e',now())";
 mysqli_query($conn,$sql) or die("query error");

 header("location:offer.php?status=1");
?>