<?php
if(isset($_POST['DELETE'])){
    $con=mysql_connect("localhost","root","");
    if($con){
    mysql_select_db("project");
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
        if(mysql_query($delete,$con)){
            echo  "<script type='text/javascript'>
    alert('Record deleted Successfully!')
 window.location.href='Studio_bookingDelete.php'
 </script>";  
        }
       mysql_close($con);    
    }
  
}

?>