<?php

if(isset ($_POST['delete']))
{
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $did=$_POST['eInstrumentID'];
        $ddescription=$_POST['eInstrumentDESC'];
        $dcompany=$_POST['eCompany'];
        $dpurchasedate=$_POST['ePurchaseDate'];
        $dquality=$_POST['eQUANTITY'];
        $dprice=$_POST['ePRICE'];
        $dasvanceamt=$_POST['eAdvanceAMT'];
        $dstatus=$_POST['eSTATUS'];
        $dwg=$_POST['eWG'];
        $delete="Delete from instrunmentmaster where Id like '%$did%'";
        if(mysqli_query($con,$delete))
        {
             echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='Instrument_MasterDelete.php'
 </script>";  

        }
        
    }
    mysqli_close($con);
}


?>