<?php
 $a=$_REQUEST["newstxt"];
 $b=$_REQUEST["newsdetail"];
 
 include("dbconnect.php");
 $query="insert into news_info(news_heading,news_detail,reg_date,delete_status)
 values('$a','$b',now(),'0')";
 mysqli_query($conn,$query);
 echo($a);
 echo($b);

 header("location:news.php?status=1");


?>
