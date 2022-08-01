<?php

if(isset ($_POST['delete']))
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
        $delete="Delete from instrunmentmaster where Id like '%$did%'";
        if(mysql_query($delete,$con))
        {
             echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='Instrument_MasterDelete.php'
 </script>";  

        }
        
    }
    mysql_close($con);
}


?>