<?php
  $con=mysqli_connect("localhost","root","");
  if($con)
  {
    mysqli_select_db($con,"project");
    $result=mysqli_query($con,"SELECT * FROM booking");
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;' >Booking Details</h3>";
    if(mysqli_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
        <tr> 
          <th>Booking_ID  </th>
          <th>Booking_Date  </th>
          <th>Event_ID  </th>
          <th>Event_Name  </th>
          <th>Event_Date  </th>
          <th>Performer_Name </th>
          <th>Client_Name  </th>
          <th>Client_Address  </th>
          <th>Client_Phone </th>
          <th>Client_Email  </th>
          <th>Faraskhana  </th>
          <th>Faraskhana_code </th>
          <th>Lighting </th>
          <th>Sound_System  </th>
          <th>Venue  </th>
          <th>Start_Time </th>
          <th>End_Time  </th>
          <th>Permission_Status  </th>
          <th>Instrument_Status  </th>
          <th>Advance_Amount</th>
        </tr>";
        
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
           
            
            
            echo "<td>".$row['Bookingid']."</td>";
            echo "<td>".$row['Bookingdate']."</td>";
            echo "<td>".$row['EventID']."</td>";
            echo "<td>".$row['Eventname']."</td>";
            echo "<td>".$row['Eventdate']."</td>";
            echo "<td>".$row['Performername']."</td>";
            echo "<td>".$row['Clientname']."</td>";
            echo "<td>".$row['Clientaddress']."</td>";
            echo "<td>".$row['Clientphone']."</td>";
            echo "<td>".$row['Clientmail']."</td>";
            echo "<td>".$row['Faraskhana']."</td>";
            echo "<td>".$row['FaraskhanaCode']."</td>";
            echo "<td>".$row['Soundsys']."</td>";
            echo "<td>".$row['Lighting']."</td>";
            echo "<td>".$row['Venue']."</td>";
            echo "<td>".$row['Starttime']."</td>";
            echo "<td>".$row['Endtime']."</td>";
            echo "<td>".$row['Permissionstatus']."</td>";
            echo "<td>".$row['Instrumentstatus']."</td>";
            echo "<td>".$row['Advanceamount']."</td>";
            echo "</tr>";
        }
       echo "</table>"; 
    }
  }
mysqli_close($con);


?>