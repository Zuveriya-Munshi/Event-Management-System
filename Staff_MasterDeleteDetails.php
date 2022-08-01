<?php

$con=mysqli_connect("localhost","root","");
//echo $id;
  if($con)
  {
    mysqli_select_db($con,"project");
     $ID=$_REQUEST['id'];
    $result = mysqli_query($con,"select * from staffmaster where Id like '%$ID%'");
    $row=mysqli_fetch_array($result);
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<center>";
    
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

     echo "<h3 style='color:white;'>Selected USER details</h3>";
     echo "<table >";
     echo "<form action=\"Staff_MasterDeleteSaveDetails.php\" method=\"POST\">";
     echo "<tr><td><p>Id :</td><td><input type=\"text\" name=\"eSTAFFID\" value={$row['Id']}></p></td></tr>";
     echo "<tr><td><p>Name :</td><td><input type=\"text\"name=\"eSTAFFNM\" value={$row['Name']}></p></td></tr>";
     echo "<tr><td><p>Gender :</td><td><input type=\"text\" name=\"eGender\" value={$row['Gender']}></p></td></tr>";
     echo "<tr><td><p>Skill :</td><td><input type=\"text\" name=\"eSKILL\" value={$row['Skill']}></p></td></tr>";
     echo "<tr><td><p>Address :</td><td><input type=\"text\" name=\"eAddr\" value={$row['Address']}></p></td></tr>";
     echo "<tr><td><p>Stafftype :</td><td><input type=\"text\" name=\"eSTYPE\" value={$row['Stafftype']}></p></td></tr>";
     echo "<tr><td><p>Contactno :</td><td><input type=\"text\" name=\"eConNum\" value={$row['Contactno']}></p></td></tr>";
     echo "<tr><td><p>Emailid :</td><td><input type=\"text\" name=\"eMAILID\" value={$row['Emailid']}></p></td></tr>";
 
     echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"delete\" class=\"submit\" value=\"Delete\" />
      </tr>";
     echo "</table >";
     echo "</form>";
     echo "</center>";
  }
  mysqli_close($con);


?>