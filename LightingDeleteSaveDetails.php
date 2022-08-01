<?php
if(isset($_POST['delete']))
{
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $dPatt_code=$_POST['ePatternCode'];
        $dDes_tion=$_POST['eDes'];
        $dVendor_code=$_POST['eVenCode'];
        $dName=$_POST['eStagenm'];
        $dMob_no=$_POST['eContactno'];
        $dEmailid=$_POST['eGmail'];
        $dPrice=$_POST['eStaPrice'];
        $dAdvAMT =$_POST['eAdvamount'];
        $delete="Delete from lighting where Patterncode like '%$dPatt_code%'";
        if(mysqli_query($con,$delete))
        {
            echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='LightingDelete.php'
 </script>";  

        }
        
    }
    mysqli_close($con);
}




?>