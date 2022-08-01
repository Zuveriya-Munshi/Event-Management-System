<?php
$con=mysqli_connect("localhost","root","");
if($con){
        //echo "Connection Succesful";
}
 else{
    echo "Connection failed";
 }
 mysqli_select_db($con,"project");
  echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
 $result=mysqli_query($con,"select * from studio_booking");
 echo "<center>";
 echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
  echo "<h3 style='color:white;'>Studio Booking Details</h3>";
   if(mysqli_num_rows($result)>0)
   
   {
     
     echo "<table>
     <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
     <tr>
      <td>StudioCode</td>
      <td>Date</td>
      <td>Recording Type</td>
      <td>ClientName</td>
      <td>ClientAddress</td>
      <td>ClientMobile</td>
      <td>ClientEmail</td>
      <td>BookingDatefrom</td>
      <td>BookingDateto</td>
      <td>TotalCharges</td>
      <td>AdvanceAmount</td>
      <td>PaymentMode</td>
      </tr>";
      while($row=mysqli_fetch_array($result)){
        echo "<tr>";
       // echo "<td><a href=\"Studio_bookingEditDetails.php?id={$row['StudioCode']}\">".$row['StudioCode']."</a></td>";
        echo "<td>".$row['StudioCode']."</td>";
        echo "<td>".$row['Date']."</td>";
        echo "<td>".$row['Recording_type']."</td>";
        echo "<td>".$row['ClientName']."</td>";
        echo "<td>".$row['ClientAddress']."</td>";
        echo "<td>".$row['ClientMobile']."</td>";
        echo "<td>".$row['ClientEmail']."</td>";
        echo "<td>".$row['BookingDateFrom']."</td>";
        echo "<td>".$row['BookingDateTo']."</td>";
        echo "<td>".$row['TotalCharges']."</td>";
        echo "<td>".$row['Advance_Amount']."</td>";
        echo "<td>".$row['Payment_Mode']."</td>";
        echo "</tr>";
      }
      echo "</table>";
      echo "</center>";
   }
mysqli_close($con);

?>