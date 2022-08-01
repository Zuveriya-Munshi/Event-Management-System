<?php

  $con=mysqli_connect("localhost","root","");
  if($con)
  {
    mysqli_select_db($con,"project");
    $DInstrumentID=$_REQUEST['id'];
    $result=mysqli_query($con,"SELECT * FROM instrumentrent WHERE BookingID LIKE '%$DInstrumentID%'");
    $row=mysqli_fetch_array($result);
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
    echo "<form action=\"InstrumentRent_DeleteSave.php\" method=\"POST\">";
    echo "<table >";
    echo "<tr><td><p>Instrument ID :</td><td> <input type=\"text\" name=\"instrumentID\" value={$row['InstrumentID']}></p></td></tr>";
    echo "<tr><td><p>Instrument Name : </td><td><input type=\"text\" name=\"instrumenname\" value={$row['Instrumenname']}></p></td></tr>";
    echo "<tr><td><p>Booking ID : </td><td> <input type=\"text\" name=\"bookID\" value={$row['BookingID']}></p></td></tr>";
    echo "<tr><td><p>Event ID : </td><td> <input type=\"text\" name=\"eID\" value={$row['EventID']}></p></td></tr>";
    echo "<tr><td><p>Client Name : </td><td><input type=\"text\" name=\"iClientname\" value={$row['Iclientname']}></p></td></tr>";
    echo "<tr><td><p>Client Address :</td><td> <input type=\"text\" name=\"iClientaddress\" value={$row['Iclientaddress']}></p></td></tr>";
    echo "<tr><td><p>Client Phone number :</td><td> <input type=\"text\" name=\"iClientmobileno\" value={$row['Iclientmobileno']}></p></td></tr>";
    echo "<tr><td><p>Client Email : </td><td><input type=\"text\" name=\"iClientemail\" value={$row['Iclientemail']}></p></td></tr>";
    echo "<tr><td><p>Instrument Date from : </td><td><input type=\"text\" name=\"iDatefrom\" value={$row['IDatefrom']}></p></td></tr>";
    echo "<tr><td><p>Instrument Date to :</td><td> <input type=\"text\" name=\"iDateto\" value={$row['IDateto']}></p></td></tr>";
    echo "<tr><td><p>Charges :</td><td> <input type=\"text\" name=\"charges\" value={$row['Charges']}></p></td></tr>";    
    echo "<tr><td><p>Advance Amount :</td><td> <input type=\"text\" name=\"AdvanceAmount\" value={$row['Advanceamount']}></p></td></tr>";
    
    
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"Delete\" class=\"submit\" value=\"Delete\" />
      </tr>";
    echo "</table >";
    echo "</form>";
    echo "</center>";
    
  }
 mysqli_close($con);
?>