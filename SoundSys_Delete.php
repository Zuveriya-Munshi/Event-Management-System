<?php
  $con=mysqli_connect("localhost","root","");
  if($con)
  {
    mysqli_select_db($con,"project");
    $result=mysqli_query($con,"SELECT * FROM soundsystem");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Click to Delete Sound system Details</h3>";
    if(mysqli_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <a href='index2.html' ><input type='button' name='Button' class='button' value='Home' /></td></a>
        
        <tr> 
         <th>Sound Sys code</th>
         <th>Description</th>
         <th>Vendor Code</th>
         <th>Name</th>
         <th>Mobile Number</th>
         <th>Email</th>
         <th>Price</th>
         <th>Advance Amount</th>
        </tr>";
        
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><a href=\"SoundSys_DeleteDetails.php?id={$row['Sys_Code']}\">".$row['Sys_Code']."</a></td>";
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
mysqli_close($con);


?>