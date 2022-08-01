<?php
  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM instrumentrent");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee ><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    echo "<h3 style='color:white;'>Instrument Rent Details</h3>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
        
        <tr> 
          <th>Instrument ID </th>
          <th>Instrument Name</th>
          <th>Booking ID </th>
          <th>Event ID </th>
         
          <th>Client Name  </th>
          <th>Client Address  </th>
          <th>Client Mobile No  </th>
          <th>Client Email</th>
          <th>Instrument Date From </th>
          <th>Instrument Date To </th>
          <th>Charges </th>
          <th>Advance Amount</th>
        </tr>";
        
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
           
            echo "<td>".$row['InstrumentID']."</td>";
            echo "<td>".$row['Instrumenname']."</td>";
            echo "<td>".$row['BookingID']."</td>";
            echo "<td>".$row['EventID']."</td>";
            echo "<td>".$row['Iclientname']."</td>";
            echo "<td>".$row['Iclientaddress']."</td>";
            echo "<td>".$row['Iclientmobileno']."</td>";
            echo "<td>".$row['Iclientemail']."</td>";
            echo "<td>".$row['IDatefrom']."</td>";
            echo "<td>".$row['IDateto']."</td>";
            echo "<td>".$row['Charges']."</td>";
            echo "<td>".$row['Advanceamount']."</td>";
            ;
            echo "</tr>";
        }
       echo "</table>"; 
       echo "</center>";
    }
  }
mysql_close($con);


?>