<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM staffmaster");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    echo "<h3 style='color:white;'>Click to Edit Staff Details</h3>";
    
    if(mysql_num_rows($result)>0)
    {
        echo "<table>
        <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home' /></td></a>
        
        <tr>
        
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Skill</th>
        <th>Address</th>
        <th>Stafftype</th>
        <th>Contactno</th>
        <th>Emailid</th>
        </tr>";
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><a href=\"Staff_MasterEditDetails.php?id={$row['Id']}\">".$row['Id']."</a></td>";
           
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Gender']."</td>";
            echo "<td>".$row['Skill']."</td>";
            echo "<td>".$row['Address']."</td>";
            echo "<td>".$row['Stafftype']."</td>";
            echo "<td>".$row['Contactno']."</td>";
            echo "<td>".$row['Emailid']."</td>";
            echo "</tr>";
       }
        echo "</table>"; 
        echo "</center>";
    }
}
mysql_close($con);



?>