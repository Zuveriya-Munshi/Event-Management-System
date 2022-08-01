<?php

  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $eventId=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM eventmaster WHERE Eventid LIKE '%$eventId%'");
    $row=mysql_fetch_array($result);
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo"<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<center>";
    echo "<table>";
    echo "<h3 style='color:white;'>Selected EVENT Details are as follows</h3>";
    echo "<form action=\"EventMaster_DeleteSave.php\" method=\"POST\"";
    echo "<tr><td><p>Event Id : </td><td><input type=\"text\" name=\"eid\" value={$row['Eventid']}></p></td></tr>";
    echo "<tr><td><p>Event Name : </td><td><input type=\"text\" name=\"enm\" value={$row['Eventname']}></p></td></tr>";
    echo "<tr><td><p>Event Type : </td><td><input type=\"text\" name=\"etype\" value={$row['Eventtype']}></p></td></tr>";
    echo "<tr><td><p>Performer Name : </td><td><input type=\"text\" name=\"pname\" value={$row['Performername']}></p></td></tr>";
    echo "<tr><td><p>Instrument : </td><td><input type=\"text\" name=\"instrument\" value={$row['Instrunment']}></p></td></tr>";
    echo "<tr><td><p>Faraskhana :</td><td> <input type=\"text\" name=\"faraskhana\" value={$row['Faraskhana']}></p></td></tr>";
    echo "<tr><td><p>Sound System :</td><td> <input type=\"text\" name=\"sound\" value={$row['Soundsys']}></p></td></tr>";
    echo "<tr><td><p>Lighting : </td><td><input type=\"text\" name=\"light\" value={$row['Lighting']}></p></td></tr>";
    echo "<tr><td><p>No of Staff :</td><td> <input type=\"text\" name=\"staff\" value={$row['Noofstaff']}></p></td></tr>";
    echo "<tr><td><p>Event Charges :</td><td> <input type=\"text\" name=\"echarge\" value={$row['Eventcharges']}></p></td></tr>";
    echo "<tr><td><p>Advance Amount :</td><td> <input type=\"text\" name=\"amount\" value={$row['Advanceamount']}></p></td></tr>";
    
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"delete\" class=\"submit\" value=\"Delete\" />
      
     </tr>";
    echo "</table>";
    echo "</form>";
   echo "</center>";
  }
 mysql_close($con);
?>