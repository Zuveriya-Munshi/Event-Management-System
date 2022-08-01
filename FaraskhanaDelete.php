<?php
$con=mysql_connect("localhost","root","");
if($con)
 {
    mysql_select_db("project",$con);
    $result=mysql_query("Select * From faraskhana");
    echo '<link rel="stylesheet" type="text/css" href="css.css" >';
    
echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

   echo "<h3 style='color:white;'>Click to Delete Faraskhana Details</h3>";
    if(mysql_num_rows($result)>0)
    {
     echo"<table >
     <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home'  /></td></a>
        
     <tr>
     <td>Faraskhanacode</td>
     <td>Description</td>
     <td>Vendorcode</td>
     <td>Name</td>
     <td>Mobile</td>
     <td>Email</td>
     <td>Price</td>
     <td>Advanceamount</td>
     </tr>";
     while($row=mysql_fetch_array($result))
        {
        echo "<tr>";
        echo "<td><a href=\"FaraskhanaDeleteDetails.php?id={$row['Faraskhanacode']}\">".$row['Faraskhanacode']."</a></td>";
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
?>