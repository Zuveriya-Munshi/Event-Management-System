<?php
  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM lightingrent");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Lighting Rent Details</h3>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
        
        <tr> 
          <th>Pattern Code </th>
          <th>Description </th>
          <th>Booking ID </th>
          <th>Event ID </th>
          <th>Vendor Code  </th>
          <th>Client Name  </th>
          <th>Client Address  </th>
          <th>Client Mobile No  </th>
          <th>Client Email</th>
          <th>Date From </th>
          <th>Date To </th>
          <th>Price </th>
          <th>Advance Amount</th>
        </tr>";
        
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            
            echo "<td>".$row['PatternCode']."</td>";
            echo "<td>".$row['Description']."</td>";
            echo "<td>".$row['BookingID']."</td>";
            echo "<td>".$row['EventID']."</td>";
            echo "<td>".$row['VendorCode']."</td>";
            echo "<td>".$row['ClientName']."</td>";
            echo "<td>".$row['ClientAddress']."</td>";
            echo "<td>".$row['ClientMobNo']."</td>";
            echo "<td>".$row['ClientEmail']."</td>";
            echo "<td>".$row['DateFrom']."</td>";
            echo "<td>".$row['DateTo']."</td>";
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