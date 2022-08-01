<?php

if(isset ($_POST['save']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
        
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
        if(mysql_query($update,$con))
        {
            echo  "<script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='Instrument_MasterEdit.php'
 </script>";  
          
        }
        
    }
    mysql_close($con);
}



?>