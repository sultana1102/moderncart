<div id="userinbox">
<table border='1'width="80%">
    <tr>
        <th width='60'>Sl.No.</th>
        <th>Complain Heading</th>
        <th>Recieve Date</th>
        <th>Sender Name </th>
    </tr>   
   <?php
    include("dbcoonect.php");
    $user=$_SESSION["uname"];
    $query="select complain_id,complain_heading,send_date,sender_name from complain_info where reciever_name='$user' order by send_date desc";
    $rsnews=mysqli_query($conn,$query) or die("error");
    $cnt=0;
    while($row=mysqli_fetch_array($rsnews))
    {
        $cnt++;
        $id=$row["complain_id"];
        $heading=$row["complain_heading"];
        $sndrnm=$row["sender_name"];
        $dt=$row["send_date"];

        echo("<tr>");
        echo("<td>");
        echo($cnt);
        echo("</td>");

        echo("<td>");
        echo("<a href='complaindetailtouser.php?cid=$id'>");
         echo($heading);
        echo("</a>");
        
        
        echo("</td>");

        echo("<td>");
        echo($dt);
        echo("</td>");

        echo("<td>");
        echo($sndrnm);
        echo("</td>");
        
        echo("</tr>");
        
    }
    ?>
    </table>
</div><!--rend user inbox-->