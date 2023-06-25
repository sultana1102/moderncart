<th>SL.No.</th><th>Item Id</th><th>Item Name</th><th>Item Description</th><th>Image</th>
        <th>Item Rate</th><th>Item Descount</th><th>Parent Category</th><th>Register Date</th>
  


        echo("<tr>");
            echo("<td>");
            echo($cnt);
            echo("</td>");

            echo("<td>");
             echo($row["item_id"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["item_name"]);
             echo("</td>");
            
             echo("<td>");
             echo($row["item_desc"]);
             echo("</td>");
            
             echo("<td>");
            // echo("<img src='./upload/$img' width='50' height='50' border='1'>");
            $img=echo($row["img_src"]);
              
            echo("</td>");

             echo("<td>");
             echo($row["item_rate"]);
             echo("</td>");

             
             echo("<td>");
             echo($row["item_discount"]);
             echo("</td>");
            
            echo("<td>");
            //  echo($pc);
            echo($row["parent_cat"]);
             
              echo("</td>");
            
            
             echo("<td>");
             echo($row["reg_date"]);
             echo("</td>");           
}
?>