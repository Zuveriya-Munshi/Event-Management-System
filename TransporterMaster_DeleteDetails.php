<?php
  $con=mysqli_connect("localhost","root","");
  if($con)
  {
    mysqli_select_db($con,"project");
    $TransId=$_REQUEST['id'];
    $result=mysqli_query($con,"SELECT * FROM transportermaster WHERE Transporterid LIKE '%$TransId%'");
    $row=mysqli_fetch_array($result);
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Selected USERS Details are as follows</h3>";
    echo "<table >";
    echo "<form action=\"TransporterMaster_DeleteSave.php\" method=\"POST\">";
    echo "<tr><td><p>Transport ID :</td><td> <input type=\"text\" name=\"dTRANSID\" value={$row['Transporterid']} ></p></td></tr>";
    echo "<tr><td><p>Vehicle Number : </td><td><input type=\"text\" name=\"dVNO\" value={$row['Vehicleno']}></p></td></tr>";
    echo "<tr><td><p>Vehicle Type : </td><td><input type=\"text\" name=\"dVTYPE\" value={$row['Vehicletype']}></p></td></tr>";
    echo "<tr><td><p>Deriver Name : </td><td><input type=\"text\" name=\"dDNAME\" value={$row['Drivername']}></p</td></tr>>";
    echo "<tr><td><p>Contact Number :</td><td> <input type=\"text\" name=\"dContactNo\" value={$row['Contactno']}></p></td></tr>";
    echo "<tr><td><p>Email :</td><td> <input type=\"text\" name=\"dMailId\" value={$row['Email']}></p></td></tr>";
    echo "<tr><td><p>Charges :</td><td> <input type=\"text\" name=\"dCHARGE\" value={$row['Charges']}></p></td></tr>";
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