<?php
if(isset($_POST['SAVE'])){
    $con=mysqli_connect("localhost","root","");
    if($con){
        mysqli_select_db($con,"project");
        $StuCode=$_POST['eStudioCode'];
        $date=$_POST['eDate'];
        $Rectype=$_POST['eRecording_type'];
        $CName=$_POST['eClientName'];
        $CAdd=$_POST['eClientAddress'];
        $CMob=$_POST['eClientMobile'];
        $CEmail=$_POST['eClientEmail'];
        $BookingDF=$_POST['eBookingDateFrom'];
        $BookingDT=$_POST['eBookingDateTo'];
        $TotalCharges=$_POST['eTotalCharges'];
        $AdvanceAmt=$_POST['eAdvance_Amount'];
        $Pay_Mo=$_POST['ePayment_Mode'];
        
        $update="Update Studio_booking Set Date='$date',Recording_type='$Rectype',ClientName='$CName',ClientAddress='$CAdd',ClientMobile=$CMob,ClientEmail='$CEmail',BookingDateFrom='$BookingDF',BookingDateTo='$BookingDT',TotalCharges=$TotalCharges,Advance_Amount=$AdvanceAmt,Payment_Mode='$Pay_Mo' where StudioCode like '%$StuCode%'";
        if(mysqli_query($con,$update)){
            
             echo  "<script type='text/javascript'>
    alert('Record Updated Successfully!')
 window.location.href='Studio_bookingEdit.php'
 </script>";  
           
            
        } 
        mysqli_close($con);
    }
 
    
}



?>