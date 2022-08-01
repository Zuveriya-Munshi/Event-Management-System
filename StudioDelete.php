<?php
$con=mysqli_connect("localhost","root","");
if($con)
 {
    mysqli_select_db($con,"project");
    $result=mysqli_query($con,"Select * From studio");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Click to Delete Studio Details</h3>";
    if(mysqli_num_rows($result)>0)
    {
     echo"<table >
     <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home'  /></td></a>
        
     <tr>
     <td>Studio Code</td>
     <td>Studio Name</td>
     <td>Studio Address</td>
     <td>Owner Name</td>
     <td>Owner Address</td>
     <td>Mobile Number</td>
     <td>Email Id</td>
     <td>Booking Price</td>
     <td>Advance amount</td>
     </tr>";
     while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td><a href=\"StudioDeleteDetails.php?id={$row['StudioCode']}\">".$row['StudioCode']."</a></td>";
        echo "<td>".$row['StudioName']."</td>";
        echo "<td>".$row['StudioAddress']."</td>";
        echo "<td>".$row['OwnerName']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['Mobile_no']."</td>";
        echo "<td>".$row['EmailId']."</td>";
        echo "<td>".$row['BookingPrice']."</td>";
        echo "<td>".$row['Min_Advanceamount']."</td>";
        echo "</tr>";
        }
        echo "</table>";
        echo "</center>";
     }
   }   
?>