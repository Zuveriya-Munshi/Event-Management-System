<?php
$con=mysql_connect("localhost","root","");
//echo $id;
  if($con)
  {
    mysql_select_db("project",$con);
     $ID=$_REQUEST['id'];
    $result = mysql_query("select * from studio where StudioCode like '%$ID%'");
    $row=mysql_fetch_array($result);
     echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
     echo "<center>";
     echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
     echo "<h3 style='color:white;'>Selected USER details</h3>";
     echo "<table >";
     echo "<form action=\"StudioDeleteSave.php\" method=\"POST\">";
     echo "<tr><td><p>Studio Code :</td><td><input type=\"text\" name=\"DStudioCode\" value={$row['StudioCode']}></p></td></tr>";
     echo "<tr><td><p>Studio Name :</td><td><input type=\"text\" name=\"DStudioName\" value={$row['StudioName']}></p></td></tr>";
     echo "<tr><td><p>Studio Address :</td><td><input type=\"text\"name=\"DStudioAddress\" value={$row['StudioAddress']}></p></td></tr>";
     echo "<tr><td><p>Owner Name :</td><td><input type=\"text\" name=\"DOwnerName\" value={$row['OwnerName']}></p></td></tr>";
     echo "<tr><td><p>Owner Address :</td><td><input type=\"text\" name=\"DAddress\" value={$row['Address']}></p></td></tr>";
     echo "<tr><td><p>Mobile No :</td><td> <input type=\"text\" name=\"DMobile_no\" value={$row['Mobile_no']}></p></td></tr>";
     echo "<tr><td><p>Email Id :</td><td><input type=\"email\" name=\"DEmailId\" value={$row['EmailId']}></p></td></tr>";
     echo "<tr><td><p>Booking Price :</td><td><input type=\"text\" name=\"DBookingPrice\" value={$row['BookingPrice']}></p></td></tr>";
     echo "<tr><td><p>Advance amount :</td><td><input type=\"text\" name=\"DMin_Advanceamount\" value={$row['Min_Advanceamount']}></p></td></tr>";
     
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