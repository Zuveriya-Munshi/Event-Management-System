<?php
$con=mysql_connect("localhost","root","");
echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
echo '<h3 style="color:white;" >Payment Details are as follows</h3>';
if($con)
{
    mysql_select_db("project");
    $bid=$_REQUEST['id'];
    $result=mysql_query("Select * from payment_details where Bookingid like '%$bid%'");
    $row=mysql_fetch_array($result);
    echo "<center>";
    echo "<table >";
    echo "<form action=\"Payment_detailsEditSave.php\" method=\"POST\">";
    echo "<tr><td>Booking ID</td><td><input type=\"text\" name=\"eBID\" value={$row['Bookingid']}></td></tr>";
    echo "<tr><td>Ins. Charges</td><td><input type=\"text\" name=\"eIC\" value={$row['ICharges']}></td></tr>";
    echo "<tr><td>Ins. AdvAmt</td><td><input type=\"text\" name=\"eIAA\" value={$row['IAdvamt']}></td></tr>";
    echo "<tr><td>Ins. AdvDate</td><td><input type=\"date\" name=\"eIAD\" value={$row['IAdvamtDate']}></td></tr>";
    echo "<tr><td>Ins. FinAmt</td><td><input type=\"text\" name=\"eIFA\" value={$row['IFinalPay']}></td></tr>";
    echo "<tr><td>Ins. FinDate</td><td><input type=\"date\" name=\"eIFD\" value={$row['IFinalPayDate']}></td></tr>";
    echo "<tr><td>Far. Charges</td><td><input type=\"text\" name=\"eFC\" value={$row['FPrice']}></td></tr>";
    echo "<tr><td>Far. AdvAmt</td><td><input type=\"text\" name=\"eFAA\" value={$row['FAdvamt']}></td></tr>";
    echo "<tr><td>Far. AdvDate</td><td><input type=\"date\" name=\"eFAD\" value={$row['FAdvamtDate']}></td></tr>";
    echo "<tr><td>Far. FinAmt</td><td><input type=\"text\" name=\"eFFA\" value={$row['FFinalPay']}></td></tr>";
    echo "<tr><td>Far. FinDate</td><td><input type=\"date\" name=\"eFFD\" value={$row['FFinalPayDate']}></td></tr>";
    echo "<tr><td>Lig. Charges</td><td><input type=\"text\" name=\"eLC\" value={$row['PPrice']}></td></tr>";
    echo "<tr><td>Lig. AdvAmt</td><td><input type=\"text\" name=\"eLAA\" value={$row['PAdvamt']}></td></tr>";
    echo "<tr><td>Lig. AdvDate</td><td><input type=\"date\" name=\"eLAD\" value={$row['PAdvamtDate']}></td></tr>";
    echo "<tr><td>Lig. FinAmt</td><td><input type=\"text\" name=\"eLFA\" value={$row['PFinalPay']}></td></tr>";
    echo "<tr><td>Lig. FinDate</td><td><input type=\"date\" name=\"eLFD\" value={$row['PFinalPayDate']}></td></tr>"; 
    echo "<tr><td>Sou. Charges</td><td><input type=\"text\" name=\"eSC\" value={$row['SPrice']}></td></tr>";
    echo "<tr><td>Sou. AdvAmt</td><td><input type=\"text\" name=\"eSAA\" value={$row['SAdvamt']}></td></tr>";
    echo "<tr><td>Sou. AdvDate</td><td><input type=\"date\" name=\"eSAD\" value={$row['SAdvamtDate']}></td></tr>";
    echo "<tr><td>Sou. FinAmt</td><td><input type=\"text\" name=\"eSFA\" value={$row['SFinalPay']}></td></tr>";
    echo "<tr><td>Sou. FinDate</td><td><input type=\"date\" name=\"eSFD\" value={$row['SFinalPayDate']}></td></tr>";
    echo "<tr>
     <td colspan=2 align=center>
      <input type=\"submit\" name=\"submit\" class=\"submit\" value=\"Save\"  />
      </tr>";
    echo "</table>";
    echo "</form>";
   } 
   mysql_close($con);
?>