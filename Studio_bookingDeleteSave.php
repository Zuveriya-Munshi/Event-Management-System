<?php
if(isset($_POST['DELETE'])){
    $con=mysqli_connect("localhost","root","");
    if($con){
    mysqli_select_db($con,"project");
        $SStuCode=$_POST['eStudioCode'];
        $Sdate=$_POST['eDate'];
        $SRectype=$_POST['eRecording_type'];
        $SCName=$_POST['eClientName'];
        $SCAdd=$_POST['eClientAddress'];
        $SCMob=$_POST['eClientMobile'];
        $SCEmail=$_POST['eClientEmail'];
        $SBookingDF=$_POST['eBookingDateFrom'];
        $SBookingDT=$_POST['eBookingDateTo'];
        $STotalCharges=$_POST['eTotalCharges'];
        $SAdvanceAmt=$_POST['eAdvance_Amount'];
        $SPay_Mo=$_POST['ePayment_Mode'];
        
        $delete="Delete from studio_booking where StudioCode like '%$SStuCode%'";
        if(mysqli_query($con,$delete)){
            echo  "<script type='text/javascript'>
    alert('Record deleted Successfully!')
 window.location.href='Studio_bookingDelete.php'
 </script>";  
        }
       mysqli_close($con);    
    }
  
}

?>