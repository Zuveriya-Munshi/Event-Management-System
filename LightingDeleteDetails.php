<?php
$con=mysql_connect("localhost","root","");
//echo $id;
  if($con)
  {
    mysql_select_db("project",$con);
     $ID=$_REQUEST['id'];
    $result = mysql_query("select * from lighting where Patterncode like '%$ID%'");
    $row=mysql_fetch_array($result);
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<center>";
echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
     echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
     
     echo "<form action=\"LightingDeleteSaveDetails.php\" method=\"POST\">";
     echo "<table >";
     echo "<tr><td><p>Patterncode :</td><td><input type=\"text\" name=\"ePatternCode\" value={$row['Patterncode']}></p></td></tr>";
     echo "<tr><td><p>Description :</td><td><input type=\"text\"name=\"eDes\" value={$row['Description']}></p></td></tr>";
     echo "<tr><td><p>Vendorcode :</td><td><input type=\"text\" name=\"eVenCode\" value={$row['Vendorcode']}></p></td></tr>";
     echo "<tr><td><p>Name :</td><td><input type=\"text\" name=\"eStagenm\" value={$row['Name']}></p></td></tr>";
     echo "<tr><td><p>Mobile :</td><td><input type=\"text\" name=\"eContactno\" value={$row['Mobile']}></p></td></tr>";
     echo "<tr><td><p>Email :</td><td><input type=\"email\" name=\"eGmail\" value={$row['Email']}></p></td></tr>";
     echo "<tr><td><p>Price :</td><td><input type=\"text\" name=\"eStaPrice\" value={$row['Price']}></p></td></tr>";
     echo "<tr><td><p>Advanceamount :</td><td><input type=\"text\" name=\"eAdvamount\" value={$row['Advanceamount']}></p></td></tr>";
   
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