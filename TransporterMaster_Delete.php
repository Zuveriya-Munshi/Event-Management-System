<?php
  $con=mysqli_connect("localhost","root","");
  if($con)
  {
    mysqli_select_db($con,"project");
    $result=mysqli_query($con,"SELECT * FROM transportermaster");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
   echo "<h3 style='color:white;'>Click to Delete Transporter Details</h3>";
    if(mysqli_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home'/></td></a>
        
        
          <tr>
          <th>Transport ID </th>
          <th>Vehicle Number </th>
          <th>Vehicle Type </th>
          <th>Deriver Name </th>
          <th>Contact Number </th>
          <th>Email </th>
          <th>Charges </th> 
          </tr>";
          while($row=mysqli_fetch_array($result))
          {
            echo "<tr>";
            echo "<td><a href=\"TransporterMaster_DeleteDetails.php?id={$row['Transporterid']}\">".$row['Transporterid']."</a></td>";
            echo "<td>".$row['Vehicleno']."</td>";
            echo "<td>".$row['Vehicletype']."</td>";
            echo "<td>".$row['Drivername']."</td>";
            echo "<td>".$row['Contactno']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Charges']."</td>";
            echo "</tr>";
          }
          echo "</table>";
          echo "</center>";
    }
    mysqli_close($con);
  }
?>