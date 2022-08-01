<?php
$con=mysql_connect("localhost","root","");
//echo $id;
  if($con)
  {
    mysql_select_db("project",$con);
     $ID=$_REQUEST['id'];
    $result = mysql_query("select * from faraskhana where Faraskhanacode like '%$ID%'");
    
echo "<center>";
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
  
    $row=mysql_fetch_array($result);
    echo "<table >";
     echo "<h3 style='color:white;'>Selected registration details</h3>";
     
     echo "<form action=\"FaraskhanaEditSaveDetails.php\" method=\"POST\">";
     echo "<tr><td><p>Faraskhanacode: </td><td><input type=\"text\" name=\"eFaraskhanaCode\" value={$row['Faraskhanacode']}></p></td></tr>";
     echo "<tr><td><p>Description: </td><td><input type=\"text\"name=\"eDes\" value={$row['Description']}></p></td></tr>";
     echo "<tr><td><p>Vendorcode: </td><td><input type=\"text\" name=\"eVenCode\" value={$row['Vendorcode']}></p></td></tr>";
     echo "<tr><td><p>Name: </td><td><input type=\"text\" name=\"eStagenm\" value={$row['Name']}></p></td></tr>";
     echo "<tr><td><p>Mobile: </td><td><input type=\"text\" name=\"eContactno\" value={$row['Mobile']}></p></td></tr>";
     echo "<tr><td><p>Email: </td><td><input type=\"email\" name=\"eGmail\" value={$row['Email']}></p></td></tr>";
     echo "<tr><td><p>Price: </td><td><input type=\"text\" name=\"eStaPrice\" value={$row['Price']}></p></td></tr>";
     echo "<tr><td><p>Advanceamount: </td><td><input type=\"text\" name=\"eAdvamount\" value={$row['Advanceamount']}></p></td></tr>";
    
     echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"save\" class=\"submit\" value=\"save\"  />
      </tr>";
     echo "</table >";
     echo "</form>";
     
echo "</center>";
  }
  mysql_close($con);



?>