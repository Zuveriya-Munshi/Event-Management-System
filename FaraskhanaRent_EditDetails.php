<?php

  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $FaraskhanaCode=$_REQUEST['id'];
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    $result=mysql_query("SELECT * FROM faraskhanarent WHERE BookingID LIKE '%$FaraskhanaCode%'");
    $row=mysql_fetch_array($result);
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
    echo "<table >";
    echo "<form action=\"FaraskhanaRent_EditSave.php\" method=\"POST\">";
    echo "<tr><td><p>Faraskhana Code : </td><td> <input type=\"text\" name=\"faraskhanaCode\" value={$row['FaraskhanaCode']}></p></td></tr>";
    echo "<tr><td><p>Description : </td><td> <input type=\"text\" name=\"desc\" value={$row['Description']}></p></td></tr>";
    echo "<tr><td><p>Booking ID :</td><td> <input type=\"text\" name=\"bookID\" value={$row['BookingID']}></p></td></tr>";
    echo "<tr><td><p>Event ID :</td><td> <input type=\"text\" name=\"eID\" value={$row['EventID']}></p></td></tr>";
    echo "<tr><td><p>Vendor Code :</td><td> <input type=\"text\" name=\"vendorCode\" value={$row['Vendorcode']}></p></td></tr>";
    echo "<tr><td><p>Client Name : </td><td><input type=\"text\" name=\"cName\" value={$row['ClientName']}></p></td></tr>";
    echo "<tr><td><p>Client Address : </td><td><input type=\"text\" name=\"cAddress\" value={$row['ClientAddress']}></p></td></tr>";
    echo "<tr><td><p>Client Mobile No : </td><td><input type=\"text\" name=\"cMobNo\" value={$row['ClientMobNo']}></p></td></tr>";
    echo "<tr><td><p>Client Email : </td><td><input type=\"text\" name=\"cEmail\" value={$row['ClientEmail']}></p></td></tr>";    
    echo "<tr><td><p>Date From : </td><td><input type=\"text\" name=\"dateFrom\" value={$row['DateFrom']}></p></td></tr>";
    echo "<tr><td><p>Date To : </td><td><input type=\"text\" name=\"dateTo\" value={$row['DateTo']}></p></td></tr>";
    echo "<tr><td><p>Price : </td><td><input type=\"text\" name=\"Price\" value={$row['Price']}></p></td></tr>";
    echo "<tr><td><p>Advance Amount : </td><td><input type=\"text\" name=\"advAmt\" value={$row['Advanceamount']}></p></td></tr>";
    
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"Submit\" class=\"submit\" value=\"Save\"  />
      </tr>";
    echo "</table >";
    echo "</form>";
    echo "</center>";
    
  }
 mysql_close($con);
?>