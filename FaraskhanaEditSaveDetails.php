<?php
if(isset($_POST['save']))
{
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $dfar_code=$_POST['eFaraskhanaCode'];
        $dDes_tion=$_POST['eDes'];
        $dVendor_code=$_POST['eVenCode'];
        $dName=$_POST['eStagenm'];
        $dMob_no=$_POST['eContactno'];
        $dEmailid=$_POST['eGmail'];
        $dPrice=$_POST['eStaPrice'];
        $dAdvAMT =$_POST['eAdvamount'];
        $update="Update faraskhana Set Description='$dDes_tion',Vendorcode='$dVendor_code',Name='$dName',Mobile=$dMob_no,Email='$dEmailid',Price=$dPrice,Advanceamount=$dAdvAMT where Faraskhanacode like '%$dfar_code%'";
        if(mysqli_query($con,$update))
        {
            echo  "<br><script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='FaraskhanaEdit.php'
 </script>";
        }
        
    }
    mysqli_close($con);
}





?>