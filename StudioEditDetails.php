<?php
$con=mysqli_connect("localhost","root","");
//echo $id;
  if($con)
  {
    mysqli_select_db($con,"project");
     $ID=$_REQUEST['id'];
    $result = mysqli_query($con,"select * from studio where StudioCode like '%$ID%'");
    $row=mysqli_fetch_array($result);
     echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
     echo "<center>";
     echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
     echo "<h3 style='color:white;'>Selected USER details</h3>";
     echo "<table >";
     echo "<form action=\"StudioEditSave.php\" method=\"POST\">";
     echo "<tr><td><p>Studio Code :</td><td><input type=\"text\" name=\"eStudioCode\" value={$row['StudioCode']}></p></td></tr>";
     echo "<tr><td><p>Studio Name :</td><td><input type=\"text\" name=\"eStudioName\" value={$row['StudioName']}></p></td></tr>";
     echo "<tr><td><p>Studio Address :</td><td><input type=\"text\"name=\"eStudioAddress\" value={$row['StudioAddress']}></p></td></tr>";
     echo "<tr><td><p>Owner Name :</td><td> <input type=\"text\" name=\"eOwnerName\" value={$row['OwnerName']}></p></td></tr>";
     echo "<tr><td><p>Owner Address :</td><td><input type=\"text\" name=\"eOwnerAddress\" value={$row['Address']}></p></td></tr>";
     echo "<tr><td><p>Mobile No :</td><td><input type=\"text\" name=\"eMobileno\" value={$row['Mobile_no']}></p></td></tr>";
     echo "<tr><td><p>Email Id :</td><td> <input type=\"email\" name=\"eEmailId\" value={$row['EmailId']}></p></td></tr>";
     echo "<tr><td><p>Booking Price :</td><td><input type=\"text\" name=\"eBookingPrice\" value={$row['BookingPrice']}></p></td></tr>";
     echo "<tr><td><p>Advance Amount :</td><td><input type=\"text\" name=\"eAdvamount\" value={$row['Min_Advanceamount']}></p></td></tr>";
 
     echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"save\" class=\"submit\" value=\"Save\" />
      </tr>";
     echo "</table >";
     echo "</form>";
     echo "</center>";
  }
  mysqli_close($con);



?>