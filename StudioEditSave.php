<?php
if(isset($_POST['save']))
{
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $dStudioCode=$_POST['eStudioCode'];
        $dStudioName=$_POST['eStudioName'];
        $dStudioAddress=$_POST['eStudioAddress'];
        $dOwnerName=$_POST['eOwnerName'];
        $dOwnerAddress=$_POST['eOwnerAddress'];
        $dMobileno=$_POST['eMobileno'];
        $dEmailId=$_POST['eEmailId'];
        $dBookingPrice =$_POST['eBookingPrice'];
        $dAdvamount =$_POST['eAdvamount']; 
        //echo $dStudioCode,$dOwnerName,$dBookingPrice,$dAdvamount;
        $update="Update studio Set StudioName='$dStudioName',StudioAddress='$dStudioAddress',OwnerName='$dOwnerName',Address='$dOwnerAddress',Mobile_no=$dMobileno,EmailId='$dEmailId',BookingPrice=$dBookingPrice,Min_Advanceamount=$dAdvamount where StudioCode like '%$dStudioCode%'";
        if(mysqli_query($con,$update))
        {
              echo  "<script type='text/javascript'>
    alert('Record Updated Successfully!')
 window.location.href='StudioEdit.php'
 </script>";  
            
        }
        
    }
    mysqli_close($con);
}



?>