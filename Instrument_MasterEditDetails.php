<?php
  $con=mysqli_connect("localhost","root","");
//echo $id;
  if($con)
  {
    mysqli_select_db($con,"project");
     $ID=$_REQUEST['id'];
    $result = mysqli_query($con,"select * from instrunmentmaster where Id like '%$ID%'");
    $row=mysqli_fetch_array($result);
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";

     echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
     
     echo "<form action=\"Instrument_MasterEditSaveDetails.php\" method=\"POST\">";
     echo "<table >";
     echo "<tr><td><p>Id :</td><td><input type=\"text\" name=\"eInstrumentID\" value={$row['Id']}></p></td></tr>";
     echo "<tr><td><p>Description :</td><td><input type=\"text\"name=\"eInstrumentDESC\" value={$row['Description']}></p></td></tr>";
     echo "<tr><td><p>Company :</td><td><input type=\"text\" name=\"eCompany\" value={$row['Company']}></p></td></tr>";
     echo "<tr><td><p>Purchasedate :</td><td><input type=\"date\" name=\"ePurchaseDate\" value={$row['Purchasedate']}></p></td></tr>";
     echo "<tr><td><p>Quantity :</td><td><input type=\"text\" name=\"eQUANTITY\" value={$row['Quantity']}></p></td></tr>";
     echo "<tr><td><p>Price :</td><td><input type=\"text\" name=\"ePRICE\" value={$row['Price']}></p></td></tr>";
     echo "<tr><td><p>Advanceamount :</td><td><input type=\"text\" name=\"eAdvanceAMT\" value={$row['Advanceamount']}></p></td></tr>";
     echo "<tr><td><p>Status :</td><td><input type=\"text\" name=\"eSTATUS\" value={$row['Status']}></p></td></tr>";
     echo "<tr><td><p>WG :</td><td><input type=\"text\" name=\"eWG\" value={$row['WG']}></p></td></tr>";
    
     echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"save\" class=\"submit\" value=\"Save\"  />
      </tr>";
     
     echo "</table >";
     echo "</form>";
     echo "</center>";
  }
  mysqli_close($con);
?>