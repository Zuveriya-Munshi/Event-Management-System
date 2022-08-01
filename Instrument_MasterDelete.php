<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM instrunmentmaster");
    
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    echo "<h3 style='color:white;' >Click to Delete Instrument Details</h3>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home' /></td></a>
        
        <tr>
        
        <th>Id</th>
        <th>Description</th>
        <th>Purchasedate</th>
        <th>Company</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Advanceamount</th>
        <th>Status</th>
        <th>WG</th>
        </tr>";
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><a href=\"Instrument_MasterDeleteDetails.php?id={$row['Id']}\">".$row['Id']."</a></td>";
           
            echo "<td>".$row['Description']."</td>";
            echo "<td>".$row['Purchasedate']."</td>";
            echo "<td>".$row['Company']."</td>";
            echo "<td>".$row['Quantity']."</td>";
            echo "<td>".$row['Price']."</td>";
            echo "<td>".$row['Advanceamount']."</td>";
            echo "<td>".$row['Status']."</td>";
            echo "<td>".$row['WG']."</td>";
            echo "</tr>";
       }
        echo "</table>"; 
        echo "</center>";
    }
}
mysql_close($con);
?>
