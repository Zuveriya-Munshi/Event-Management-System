<?php
$con=mysqli_connect("localhost","root","");
if($con){
    mysqli_select_db($con,"project");
    $result=mysqli_query($con,"Select * from payment_details");
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    echo "<marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>";
    echo "<h3 style='color:white;'>Click to Edit Payment Details</h3>";
    if(mysqli_num_rows($result)>0)
    {
        echo "<table >
        <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
        <tr>
         <th>Booking_ID</th>
         <th>Ins_Charges</th>
         <th>Ins_Adv_Amt</th>
         <th>Ins_Adv_Date</th>
         <th>Ins_Fin_Amt</th>
         <th>Ins_Fin_Date</th>
         <th>Far_Price</th>
         <th>Far_Adv_Amt</th>
         <th>Far_Adv_Date</th>
         <th>Far_Fin_Amt</th>
         <th>Far_Fin_Date</th>
         <th>Lig_Price</th>
         <th>Lig_Adv_Amt</th>
         <th>Lig_Adv_Date</th>
         <th>Lig_Fin_Amt</th>
         <th>Lig_Fin_Date</th>
         <th>Sou_Price</th>
         <th>Sou_Adv_Amt</th>
         <th>Sou_Adv_Date</th>
         <th>Sou_Fin_Amt</th>
         <th>Sou_Fin_Date</th>
         </tr>";
     while($row=mysqli_fetch_array($result))
     {
        echo "<tr>";
        echo "<td><a href=\"Payment_detailsEditDetails.php?id={$row['Bookingid']}\">".$row['Bookingid']."</a></td>";
       
        echo "<td>".$row['ICharges']."</td>";
        echo "<td>".$row['IAdvamt']."</td>";
        echo "<td>".$row['IAdvamtDate']."</td>";
        echo "<td>".$row['IFinalPay']."</td>";
        echo "<td>".$row['IFinalPayDate']."</td>";
        echo "<td>".$row['FPrice']."</td>";
        echo "<td>".$row['FAdvamt']."</td>";
        echo "<td>".$row['FAdvamtDate']."</td>";
        echo "<td>".$row['FFinalPay']."</td>";
        echo "<td>".$row['FFinalPayDate']."</td>";
        echo "<td>".$row['PPrice']."</td>";
        echo "<td>".$row['PAdvamt']."</td>";
        echo "<td>".$row['PAdvamtDate']."</td>";
        echo "<td>".$row['PFinalPay']."</td>";
        echo "<td>".$row['PFinalPayDate']."</td>";
        echo "<td>".$row['SPrice']."</td>";
        echo "<td>".$row['SAdvamt']."</td>";
        echo "<td>".$row['SAdvamtDate']."</td>";
        echo "<td>".$row['SFinalPay']."</td>";
        echo "<td>".$row['SFinalPayDate']."</td>";
     }
     echo "</table>";
    }
 mysqli_close($con);
}
?>