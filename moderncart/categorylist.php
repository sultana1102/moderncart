<?php 
include("header.php");
?>
<div id="content">

    <div id='adminarea'>
     
        <div id="leftadmin">
            <?php
                include("adminchoicelist.php");
            ?>
        
        </div><!--end left admin-->

        <div id="rightadmin">
<div id="custlist">

<table border='1' align="center" width='600'>
    <tr height='50'>
    <th>SL.No.</th><th>Category Name</th><th>Display Name</th><th>Image</th>
        <th>Parent Category</th><th>Register Date</th>

    </tr>

<?php
include("dbconnect.php");
$query="select * FROM category_info  order by cat_name";
$rs=mysqli_query($conn,$query) or die("error");

$cnt=0;
while($row=mysqli_fetch_array($rs))
{
    $cnt++;
    echo("<tr>");
            echo("<td>");
            echo($cnt);
            echo("</td>");

            // echo("<td>");
            //  echo($row["item_id"]);
            //  echo("</td>");
            
             echo("<td>");
             echo($row["cat_name"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["cat_Dname"]);
             echo("</td>");
            
             $img=$row["img_path"];
             echo("<td>");
              echo("<img src=./upload/$img height='50' width='50' border='1'");
             echo("</td>");

            $id = $row["parent_cat"];
             if ($id == 0) 
             {
                echo("<td>");
                echo("</td>");
             }  
             else 
             {
                 $query_parent = "SELECT cat_name FROM category_info WHERE cat_id='$id'";
                    $rs_parent = mysqli_query($conn, $query_parent);
                 echo("<td>");
                while ($arr = mysqli_fetch_array($rs_parent)) {
                     $pc = $arr["cat_name"];
                    echo($pc);
                 }
                  echo("</td>");
             }
    
             echo("<td>");
             echo($row["reg_date"]);
             echo("</td>");           
}
?>
</table>


</div><!--end custlist-->

</div><!--end right admin-->

</div><!--end container-->

<?php
 include("footer.php");
 
?>
