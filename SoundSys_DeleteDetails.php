<?php

  $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("project",$con);
    $syscode=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM soundsystem WHERE Sys_Code LIKE '%$syscode%'");
    $row=mysql_fetch_array($result);
    echo '<link rel="stylesheet" type="text/css" href="css.css" />';
    echo "<center>";
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Selected USER Details are as follows</h3>";
    echo "<table >";
    echo "<form action=\"SoundSys_DeleteSave.php\" method=\"POST\">";
    echo "<tr><td><p>Sound System Code : </td><td><input type=\"text\" name=\"dsysCode\" value={$row['Sys_Code']}></p></td></tr>";
    echo "<tr><td><p>Description : </td><td><input type=\"text\" name=\"ddescription\" value={$row['Description']}></p></td></tr>";
    echo "<tr><td><p>Vendor Code : </td><td><input type=\"text\" name=\"dvendorCode\" value={$row['Vendor_Code']}></p></td></tr>";
    echo "<tr><td><p>Name : </td><td><input type=\"text\" name=\"dName\" value={$row['Name']}></p></td></tr>";
    echo "<tr><td><p>Mobile : </td><td><input type=\"text\" name=\"dmobNo\" value={$row['Mobile']}></p></td></tr>";
    echo "<tr><td><p>Email : </td><td><input type=\"text\" name=\"demail\" value={$row['Email']}></p></td></tr>";
    echo "<tr><td><p>Price : </td><td><input type=\"text\" name=\"dprice\" value={$row['Price']}></p></td></tr>";
    echo "<tr><td><p>Advance Amount : </td><td><input type=\"text\" name=\"dadvAmt\" value={$row['AdvAmt']}></p></td></tr>";
   
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