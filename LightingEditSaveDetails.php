<?php
if(isset($_POST['save']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
        
        $dPatt_code=$_POST['ePatternCode'];
        $dDes_tion=$_POST['eDes'];
        $dVendor_code=$_POST['eVenCode'];
        $dName=$_POST['eStagenm'];
        $dMob_no=$_POST['eContactno'];
        $dEmailid=$_POST['eGmail'];
        $dPrice=$_POST['eStaPrice'];
        $dAdvAMT =$_POST['eAdvamount'];
        $update="Update lighting Set Description='$dDes_tion',Vendorcode='$dVendor_code',Name='$dName',Mobile=$dMob_no,Email='$dEmailid',Price=$dPrice,Advanceamount=$dAdvAMT where Patterncode like '%$dPatt_code%'";
        if(mysql_query($update,$con))
        { 
            echo  "<script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='LightingEdit.php'
 </script>";  
           
        }
        
    }
    mysql_close($con);
}

?>