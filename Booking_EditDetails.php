<?php

  $con=mysqli_connect("localhost","root","");
  echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
  echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

  if($con)
  {
    mysqli_select_db($con,"project");
    $bookingId=$_REQUEST['id'];
    $result=mysqli_query($con,"SELECT * FROM booking WHERE Bookingid LIKE '%$bookingId%'");
    $row=mysqli_fetch_array($result);
    echo "<center>";
    echo "<table>";
    echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
    echo "<form action=\"Booking_EditSave.php\" method=\"POST\">";
    echo "<tr><td>Booking ID :</td><td> <input type=\"text\" name=\"BookID\" value={$row['Bookingid']}> </td></tr>";
    echo "<tr><td>Booking Date :</td><td> <input type=\"text\" name=\"BookDate\" value={$row['Bookingdate']}></td></tr>";
    echo "<tr><td>Event ID:  :</td><td> <input type=\"text\" name=\"EventID\" value={$row['EventID']}></td></tr>";
    echo "<tr><td>Event Name :</td><td> <input type=\"text\" name=\"EventNM\" value={$row['Eventname']}></td></tr>";
    echo "<tr><td>Event Date :</td><td> <input type=\"text\" name=\"EventDate\" value={$row['Eventdate']}></td></tr>";
    echo "<tr><td>Performer Name :</td><td> <input type=\"text\" name=\"pName\" value={$row['Performername']}></td></tr>";
    echo "<tr><td>Client Name : </td><td><input type=\"text\" name=\"cName\" value={$row['Clientname']}></td></tr>";
    echo "<tr><td>Client Address : </td><td><input type=\"text\" name=\"cAddress\" value={$row['Clientaddress']}></td></tr>";
    echo "<tr><td>Client Phone : </td><td><input type=\"text\" name=\"cPhone\" value={$row['Clientphone']}></td></tr>";
    echo "<tr><td>Client Email : </td><td><input type=\"text\" name=\"cEmail\" value={$row['Clientmail']}></td></tr>";    
    echo "<tr><td>Faraskhana :</td><td> <input type=\"text\" name=\"faraskhana\" value={$row['Faraskhana']}></td></tr>";
    echo "<tr><td>Faraskhana Code :</td><td> <input type=\"text\" name=\"faraskhanaCode\" value={$row['FaraskhanaCode']}></td></tr>";
    echo "<tr><td>Sound System : </td><td><input type=\"text\" name=\"sound\" value={$row['Soundsys']}></td></tr>";
    echo "<tr><td>Sound System Code :</td><td> <input type=\"text\" name=\"soundSysCode\" value={$row['soundSysCode']}></td></tr>";
    echo "<tr><td>Lighting :</td><td> <input type=\"text\" name=\"light\" value={$row['Lighting']}></td></tr>";
    echo "<tr><td>Pattern Code :</td><td> <input type=\"text\" name=\"PattCode\" value={$row['PatternCode']}></td></tr>";
    echo "<tr><td>Venue : </td><td><input type=\"text\" name=\"venue\" value={$row['Venue']}></td></tr>";
    echo "<tr><td>Start Time : </td><td><input type=\"text\" name=\"sTime\" value={$row['Starttime']}></td></tr>";
    echo "<tr><td>End Time :</td><td> <input type=\"text\" name=\"eTime\" value={$row['Endtime']}></td></tr>";
    echo "<tr><td>Permission status :</td><td> <input type=\"text\" name=\"policePermission\" value={$row['Permissionstatus']}></td></tr>";
    echo "<tr><td>Instrument Status :</td><td> <input type=\"text\" name=\"iStatus\" value={$row['Instrumentstatus']}></td></tr>";
    echo "<tr><td>Instrument ID : </td><td><input type=\"text\" name=\"instrID\" value={$row['InstrumentID']}></td></tr>";
    echo "<tr><td>Advance Amount :</td><td> <input type=\"text\" name=\"advAmt\" value={$row['Advanceamount']}></td></tr>";
    
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"Submit\" class=\"submit\" value=\"Save\" />
      </tr>";
    echo "</table>";
    echo "</form>";
    echo "</center>";
  }
 mysqli_close($con);
?>