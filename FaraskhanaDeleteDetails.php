<?php
$con=mysqli_connect("localhost","root","");
//echo $id;
  if($con)
  {
    mysqli_select_db($con,"project");
     $ID=$_REQUEST['id'];
    $result = mysqli_query($con,"select * from faraskhana where Faraskhanacode like '%$ID%'");
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

    $row=mysqli_fetch_array($result);
    
echo "<center>";
     echo "<h3 style='color:white;'>Selected USER details</h3>";
     echo "<table >";
     
     echo "<form action=\"FaraskhanaDeleteSaveDetails.php\" method=\"POST\">";
     echo "<p><tr><td>Faraskhanacode:</td><td><input type=\"text\" name=\"eFaraskhanaCode\" value={$row['Faraskhanacode']}></p></td></tr>";
     echo "<p><tr><td>Description: </td><td><input type=\"text\"name=\"eDes\" value={$row['Description']}></p></td></tr>";
     echo "<p><tr><td>Vendorcode: </td><td><input type=\"text\" name=\"eVenCode\" value={$row['Vendorcode']}></p></td></tr>";
     echo "<p><tr><td>Name: </td><td><input type=\"text\" name=\"eStagenm\" value={$row['Name']}></p></td></tr>";
     echo "<p><tr><td>Mobile:</td><td><input type=\"text\" name=\"eContactno\" value={$row['Mobile']}></p></td></tr>";
     echo "<p><tr><td>Email:</td><td><input type=\"email\" name=\"eGmail\" value={$row['Email']}></p></td></tr>";
     echo "<p><tr><td>Price:</td><td><input type=\"text\" name=\"eStaPrice\" value={$row['Price']}></p></td></tr>";
     echo "<p><tr><td>Advanceamount:</td><td><input type=\"text\" name=\"eAdvamount\" value={$row['Advanceamount']}></p></td></tr>";
   
     echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"delete\" class=\"submit\" value=\"DELETE\" />
      </tr>";
      echo "</table >";
     echo "</form>";
     
echo "</center>";
  }
  mysqli_close($con);



?>