<?php
if(isset($_POST['delete']))
{
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $SStudioCode=$_POST['DStudioCode'];
        $SStudioName=$_POST['DStudioName'];
        $SStudioAddress=$_POST['DStudioAddress'];
        $SOwnerName=$_POST['DOwnerName'];
        $SAddress=$_POST['DAddress'];
        $SMobile_no=$_POST['DMobile_no'];
        $SEmailId=$_POST['DEmailId'];
        $SBookingPrice=$_POST['DBookingPrice'];
        $SMin_Advanceamount =$_POST['DMin_Advanceamount'];
        $delete="Delete from studio where StudioCode like '%$SStudioCode%'";
        if(mysqli_query($con,$delete))
        {
            echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='StudioDelete.php'
 </script>";  

        }
        
    }
    mysqli_close($con);
}
?>