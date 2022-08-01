<?php

  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM eventlist");
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<center>";
    echo "<h3 style='color:white;'>Event Schedule</h3>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
        <tr > 
          <th>Event ID </th>
          <th>Event </th>
          <th>Event Date  </th>
          <th>Location  </th>
          <th>Performer Name  </th>
          <th>Time From </th>
          <th>Time To </th>
          <th>Booking ID  </th>
          <th>Booked By  </th>
          <th>No Of Staff  </th>
          <th>Vehicle Number</th>
          <th>Name of Transporter</th>
          <th>Transporter Contact Number</th>
          
        </tr>";
        
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
           
            
            
            echo "<td>".$row['Eventid']."</td>";
            echo "<td>".$row['Eventname']."</td>";
            echo "<td>".$row['Eventdate']."</td>";
            echo "<td>".$row['Location']."</td>";
            echo "<td>".$row['Performername']."</td>";
            echo "<td>".$row['Startime']."</td>";
            echo "<td>".$row['Endtime']."</td>";
            echo "<td>".$row['Bookingid']."</td>";
            echo "<td>".$row['Customername']."</td>";
            echo "<td>".$row['Noofstaff']."</td>";
          echo "<td>".$row['Vehicleno']."</td>";
          echo "<td>".$row['Nameoftransporter']."</td>";
          echo "<td>".$row['Contactno']."</td>";
           
            echo "</tr>";
        }
       echo "</table>"; 
       echo "</center>";
    }
  }
mysql_close($con);


?>