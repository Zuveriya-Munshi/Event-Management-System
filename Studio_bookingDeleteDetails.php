<?php
$con=mysql_connect("localhost","root","");
if($con){
    mysql_select_db("project",$con);
    $ID=$_REQUEST['id'];
    $result=mysql_query("Select * from studio_booking where StudioCode like '%$ID%'");
    $row=mysql_fetch_array($result);
     echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
     echo "<center>";
     echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
      echo "<h3 style='color:white;'>Selected USER details</h3>";
    echo "<table >";
    echo "<form action=\"Studio_bookingDeleteSave.php\" method=\"POST\">";
    echo "<tr><td><p>Studio Code :</td><td><input type=\"text\" name=\"eStudioCode\" value={$row['StudioCode']}></p></td></tr>";
    echo "<tr><td><p>Date : </td><td><input type=\"date\" name=\"eDate\" value={$row['Date']}></p></td></tr>";
    echo "<tr><td><p>Recording_type :</td><td><input type=\"text\" name=\"eRecording_type\" value={$row['Recording_type']}></p></td></tr>";
    echo "<tr><td><p>ClientName :</td><td><input type=\"text\" name=\"eClientName\" value={$row['ClientName']}></p></td></tr>";
    echo "<tr><td><p>ClientAddress :</td><td><input type=\"text\" name=\"eClientAddress\" value={$row['ClientAddress']}></p></td></tr>";
    echo "<tr><td><p>ClientMobile :</td><td><input type=\"text\" name=\"eClientMobile\" value={$row['ClientMobile']}></p></td></tr>";
    echo "<tr><td><p>ClientEmail :</td><td><input type=\"text\" name=\"eClientEmail\" value={$row['ClientEmail']}></p></td></tr>";
    echo "<tr><td><p>BookingDateFrom :</td><td><input type=\"date\" name=\"eBookingDateFrom\" value={$row['BookingDateFrom']}></p</td></tr>>";
    echo "<tr><td><p>BookingDateTo :</td><td><input type=\"date\" name=\"eBookingDateTo\" value={$row['BookingDateTo']}></p></td></tr>";
    echo "<tr><td><p>TotalCharges :</td><td><input type=\"text\" name=\"eTotalCharges\" value={$row['TotalCharges']}></p></td></tr>";
    echo "<tr><td><p>Advance_Amount :</td><td><input type=\"text\" name=\"eAdvance_Amount\" value={$row['Advance_Amount']}></p></td></tr>";
    echo "<tr><td><p>Payment_Mode :</td><td><input type=\"text\" name=\"ePayment_Mode\" value={$row['Payment_Mode']}></p></td></tr>";
    //echo "<p><input type=\"submit\" name=\"DELETE\" value=\"DELETE\"></p>";
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"DELETE\" class=\"submit\" value=\"Delete\" />
      </tr>";
    echo "</table >";
    echo "</form>";
    echo "</center>";
}
mysql_close($con);

?>