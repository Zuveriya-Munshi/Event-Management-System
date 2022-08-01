<?php
if(isset($_POST['submit']))
{
    $con=mysqli_connect("localhost","root","");
    if($con){
        echo "Connection is successful";
    }
    else
    {
        echo "Connection is failed";
    }
        mysqli_select_db($con,"project");
        $StudioCODE=$_POST['SerialNo'];
        $sql1="select BookingPrice,Min_Advanceamount from studio where StudioCode='$StudioCODE'";
        $query=mysqli_query($con,$sql1);
        while($rs=mysqli_fetch_assoc($query)){
          $TotalCharges=$rs['BookingPrice'];
          $Adv_Amt=$rs['Min_Advanceamount'];
           }
            $date=$_POST['studiodate'];
            $Rectype=$_POST['rec_type'];
            $CName=$_POST['client_name'];
            $CAdd=$_POST['client_address'];
            $CMob=$_POST['client_mobile'];
            $CEmail=$_POST['client_email'];
            $Bdatefrom=$_POST['bdate_from'];
            $Bdateto=$_POST['bdate_to'];
            $Pay_Mode=$_POST['Payment_mode'];
        
        $ins="insert into studio_booking values($StudioCODE,'$date','$Rectype','$CName','$CAdd',$CMob,'$CEmail','$Bdatefrom','$Bdateto',$TotalCharges,$Adv_Amt,'$Pay_Mode')";
        if(mysqli_query($con,$ins))
        {
            echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Studio_booking.htm'
 </script>";
             
        }
        else
         {
            echo  "<script type='text/javascript'>
    alert('Record not inserted')
 window.location.href='Studio_booking.htm'
 </script>";
          
         }
         
}
mysqli_close($con);

?>