<?php
if(isset($_POST['delete']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
        
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
        if(mysql_query($delete,$con))
        {
            echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='StudioDelete.php'
 </script>";  

        }
        
    }
    mysql_close($con);
}
?>