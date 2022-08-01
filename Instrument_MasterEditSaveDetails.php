<?php

if(isset ($_POST['save']))
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
        $update="Update instrunmentmaster Set Description='$ddescription',Company='$dcompany',Purchasedate='$dpurchasedate',Quantity=$dquality,Price=$dprice,Advanceamount=$dasvanceamt,Status='$dstatus',WG='$dwg' where Id like '%$did%'";
        if(mysqli_query($con,$update))
        {
            echo  "<script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='Instrument_MasterEdit.php'
 </script>";  
          
        }
        
    }
    mysqli_close($con);
}



?>