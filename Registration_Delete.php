<?php
  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $result=mysql_query("SELECT * FROM registration");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    echo "<h3 style='color:white;'>Click to Delete Registration Detais</h3>";
    if(mysql_num_rows($result)>0)
    {
        echo "<table>
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
        
        <tr> 
          <th>Usertype</th>
          <th>User Category</th>
          <th>User Name</th>
          <th>Password</th>
          <th>Email ID</th>
          <th>Full Name</th>
          <th>Address</th>
          <th>Mobile No</th>
          <th>Security Question</th>
          <th>Security Answer</th>
        </tr>";
        
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><a href=\"Registration_DeleteDetails.php?id={$row['Username']}\">".$row['Username']."</a></td>";
            
            echo "<td>".$row['Usertype']."</td>";
            echo "<td>".$row['Usercat']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['Emailid']."</td>";
            echo "<td>".$row['Fullname']."</td>";
            echo "<td>".$row['Addr']."</td>";
            echo "<td>".$row['Mobileno']."</td>";
            echo "<td>".$row['SecQuetion']."</td>";
            echo "<td>".$row['SecAnswer']."</td>";
            echo "</tr>";
        }
       echo "</table>";
       echo "</center>"; 
    }
  }
mysql_close($con);


?>