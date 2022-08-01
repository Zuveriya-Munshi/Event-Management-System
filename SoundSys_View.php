<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM soundsystem");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'> Sound system Details</h3>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
         <tr>
         <th>Sound Sys_code</th>
         <th>Description</th>
         <th>Vendor Code</th>
         <th>Name</th>
         <th>Mobile Number</th>
         <th>Email</th>
         <th>Price</th>
         <th>Advance Amount</th>
         </tr>";
         
         while($row=mysql_fetch_array($result))
         {
           
            echo "<tr>";
           echo "<td>".$row['Sys_Code']."</td>";
            echo "<td>".$row['Description']."</td>";
            echo "<td>".$row['Vendor_Code']."</td>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Mobile']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Price']."</td>";
            echo "<td>".$row['AdvAmt']."</td>";
            echo "</tr>";
            
         }
         echo "</table>";
         echo "</center>";
    }
 }
 mysql_close($con);

?>