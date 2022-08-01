<?php

  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $Uname=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM registration WHERE Username LIKE '%$Uname%'");
    $row=mysql_fetch_array($result);
    
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
    echo "<table >";
    echo "<form action=\"Registration_DeleteSave.php\" method=\"POST\"";
    

    echo "<tr><td><p>User Type : </td><td><input type=\"text\" name=\"dUTYPE\" value={$row['Usertype']}></p></td></tr>";
    echo "<tr><td><p>User Category :</td><td> <input type=\"text\" name=\"dUCAT\" value={$row['Usercat']}></p></td></tr>";
    echo "<tr><td><p>User Name :</td><td> <input type=\"text\" name=\"dUNAME\" value={$row['Username']}></p></td></tr>";
    echo "<tr><td><p>Password :</td><td> <input type=\"text\" name=\"dUPASS\" value={$row['Password']}></p></td></tr>";
    echo "<tr><td><p>Email Id : </td><td><input type=\"text\" name=\"dEMAIL\" value={$row['Emailid']}></p></td></tr>";
    echo "<tr><td><p>Full Name : </td><td><input type=\"text\" name=\"dFNAME\" value={$row['Fullname']}></p></td></tr>";
    echo "<tr><td><p>Address : </td><td><input type=\"text\" name=\"dADDRESS\" value={$row['Addr']}></p></td></tr>";
    echo "<tr><td><p>Mobile No :</td><td> <input type=\"text\" name=\"dMOBNO\" value={$row['Mobileno']}></p></td></tr>";
    echo "<tr><td><p>Security Question :</td><td> <input type=\"text\" name=\"dSECQUE\" value={$row['SecQuetion']}></p></td></tr>";
    echo "<tr><td><p>Security Answer : </td><td><input type=\"text\" name=\"dSECANS\" value={$row['SecAnswer']}></p></td></tr>";
   
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"delete\" class=\"submit\" value=\"Delete\" />
      </tr>";
      
echo "</table >";
    echo "</form>";
    echo "</center>";
  }
 mysql_close($con);
?>