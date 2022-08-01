<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM studio");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Click to Edit Studio Details</h3>";
    echo "<center>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home'  /></td></a>
        
        <tr>
        <th>Studio Code</th>
        <th>Studio Name</th>
        <th>Studio Address</th>
        <th>Owner Name</th>
        <th>Owner Address</th>
        <th>Mobile Number</th>
        <th>Email Id</th>
        <th>Booking Price</th>
        <th>Minimum Advance amount</th>
        </tr>";
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><a href=\"StudioEditDetails.php?id={$row['StudioCode']}\">".$row['StudioCode']."</a></td>";
            echo "<td>".$row['StudioName']."</td>";
            echo "<td>".$row['StudioAddress']."</td>";
            echo "<td>".$row['OwnerName']."</td>";
            echo "<td>".$row['Address']."</td>";
            echo "<td>".$row['Mobile_no']."</td>";
            echo "<td>".$row['EmailId']."</td>";
            echo "<td>".$row['BookingPrice']."</td>";
            echo "<td>".$row['Min_Advanceamount']."</td>";
            echo "</tr>";
       }
        echo "</table>"; 
        echo "</center>";
    }
}
mysql_close($con);
?>