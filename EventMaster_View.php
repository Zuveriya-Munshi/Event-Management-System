<?php
  $con=mysqli_connect("localhost","root","");
  if($con)
  {
    mysqli_select_db($con,"project");
    $result=mysqli_query($con,"SELECT * FROM eventmaster");
    echo "	<marquee><h1 class='impact' style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<center>";
    echo "<h3 style='color:white;'>Event Master</h3>";
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    if(mysqli_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
        <tr> 
          <th>Event Id</th>
          <th>Event Name</th>
          <th>Event Type</th>
          <th>Performer Name</th>
          <th>Instrument</th>
          <th>Faraskhana</th>
          <th>Sound System</th>
          <th>Lighting</th>
          <th>No Of Staff</th>
          <th>Event Charges</th>
          <th>Advance Amount</th>
        </tr>";
        
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['Eventid']."</a></td>";
            
            
            echo "<td>".$row['Eventname']."</td>";
            echo "<td>".$row['Eventtype']."</td>";
            echo "<td>".$row['Performername']."</td>";
            echo "<td>".$row['Instrunment']."</td>";
            echo "<td>".$row['Faraskhana']."</td>";
            echo "<td>".$row['Soundsys']."</td>";
            echo "<td>".$row['Lighting']."</td>";
            echo "<td>".$row['Noofstaff']."</td>";
            echo "<td>".$row['Eventcharges']."</td>";
            echo "<td>".$row['Advanceamount']."</td>";
            echo "</tr>";
        }
       echo "</table>"; 
        echo "</center>";
    }
  }
mysqli_close($con);


?>