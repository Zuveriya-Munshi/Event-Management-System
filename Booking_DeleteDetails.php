<?php

  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $bookingId=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM booking WHERE Bookingid LIKE '%$bookingId%'");
    $row=mysql_fetch_array($result);
    echo "<center>";
    
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
    echo "<table >";
    echo "<form action=\"Booking_DeleteSave.php\" method=\"POST\">";
    echo "<tr><td>Booking ID : </td><td><input type=\"text\" name=\"BookID\" value={$row['Bookingid']}></td></tr>";
    echo "<tr><td>Booking Date :</td> <td><input type=\"text\" name=\"BookDate\" value={$row['Bookingdate']}></td></tr>";
    echo "<tr><td>Event ID:  :</td><td> <input type=\"text\" name=\"EventID\" value={$row['EventID']}></td></tr>";
    echo "<tr><td>Event Name : </td><td><input type=\"text\" name=\"EventNM\" value={$row['Eventname']}></td></tr>";
    echo "<tr><td>Event Date :</td><td> <input type=\"text\" name=\"EventDate\" value={$row['Eventdate']}></td></tr>";
    echo "<tr><td>Performer Name :</td><td> <input type=\"text\" name=\"pName\" value={$row['Performername']}></td></tr>";
    echo "<tr><td>Client Name :</td><td> <input type=\"text\" name=\"cName\" value={$row['Clientname']}></td></tr>";
    echo "<tr><td>Client Address :</td><td> <input type=\"text\" name=\"cAddress\" value={$row['Clientaddress']}></td></tr>";
    echo "<tr><td>Client Phone :</td><td> <input type=\"text\" name=\"cPhone\" value={$row['Clientphone']}></td></tr>";
    echo "<tr><td>Client Email : </td><td><input type=\"text\" name=\"cEmail\" value={$row['Clientmail']}></td></tr>";    
    echo "<tr><td>Faraskhana : </td><td><input type=\"text\" name=\"faraskhana\" value={$row['Faraskhana']}></td></tr>";
    echo "<tr><td>Faraskhana : </td><td><input type=\"text\" name=\"faraskhanaCode\" value={$row['FaraskhanaCode']}></td></tr>";
    echo "<tr><td>Sound System :</td><td> <input type=\"text\" name=\"sound\" value={$row['Soundsys']}></td></tr>";
    echo "<tr><td>Lighting : </td><td><input type=\"text\" name=\"light\" value={$row['Lighting']}></td></tr>";
    echo "<tr><td>Venue :</td><td> <input type=\"text\" name=\"venue\" value={$row['Venue']}></td></tr>";
    echo "<tr><td>Start Time :</td><td> <input type=\"text\" name=\"sTime\" value={$row['Starttime']}></td></tr>";
    echo "<tr><td>End Time :</td><td> <input type=\"text\" name=\"eTime\" value={$row['Endtime']}></td></tr>";
    echo "<tr><td>Permission status :</td><td> <input type=\"text\" name=\"policePermission\" value={$row['Permissionstatus']}></td></tr>";
    echo "<tr><td>Instrument Status : </td><td><input type=\"text\" name=\"iStatus\" value={$row['Instrumentstatus']}></td></tr>";
    echo "<tr><td>Advance Amount :</td><td> <input type=\"text\" name=\"advAmt\" value={$row['Advanceamount']}></td></tr>";
    
  
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" class=\"submit\" value=\"Delete\" name=\"Delete\" />
      </tr>";
    echo "</table>";
    echo "</form>";
   echo "</center>";
    
  }
 mysql_close($con);
?>