<?php @session_start(); ?>

<html>
    <head>
        <link href=".//css/style.css" type="text/css" rel="stylesheet"/> 
</head>
 <body>
  <div id="main">
      <div id="header">
      <div id="leftlogo">
            <a href="index.php">
            <img src="./images/logo 2.png" title="Go To Home Page"></a>
          </div> <!--end of leftlogo-->

      
          <div id="tittle">
            <h1>MODERN-CART</h1>
            <h3> One-stop for head to toe look </h3> 
            <?php
             if(isset($_SESSION["uname"]))
            {
              echo("<div id='userinfo'>");

              $user=$_SESSION["uname"];
              echo("Welcome ".$_SESSION["uname"]. ","." ");
             
              echo("<a href='logout.php'>Logout</a>");

              if($_SESSION["user_type"]="user")
              {
                echo("&nbsp;&nbsp; <a href='displaycart.php'> <img src='./images/logo.png' height='20' width='30' align='center'>");
                  
                include("dbconnect.php");
                $query="select count(*) from cart_info where user_name='$user'";
                $rscart= mysqli_query($conn,$query);
                $row=mysqli_fetch_array($rscart);
                $cnt=$row[0];
                echo("[$cnt]");
                
                echo("</a>");
              }

              echo("</div>");
            }
            ?>
        
            </div><!--end of tittle"-->

<div id="rightlogo">
  <img src="./images/logo 3.jpeg">
 </div><!--end of rghtlogo-->    


</div><!--end of head-->
