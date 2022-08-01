<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM lighting ");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    
echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
   echo "<h3 style='color:white;'>Click to Edit Lighting Details</h3>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home'/></td></a>
        
        <tr>
        <th>Faraskhanacode</th>
        <th>Description</th>
        <th>Vendorcode</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Price</th>
        <th>Advanceamount</th>
        </tr>";
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><a href=\"LightingEditDetails.php?id={$row['Patterncode']}\">".$row['Patterncode']."</a></td>";
           
            echo "<td>".$row['Description']."</td>";
            echo "<td>".$row['Vendorcode']."</td>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Mobile']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Price']."</td>";
            echo "<td>".$row['Advanceamount']."</td>";
            echo "</tr>";
       }
        echo "</table>"; 
        echo "</center>";
    }
}
mysql_close($con);


?>