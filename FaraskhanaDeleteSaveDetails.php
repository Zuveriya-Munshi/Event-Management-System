<?php
if(isset($_POST['delete']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
        
        $dfar_code=$_POST['eFaraskhanaCode'];
        $dDes_tion=$_POST['eDes'];
        $dVendor_code=$_POST['eVenCode'];
        $dName=$_POST['eStagenm'];
        $dMob_no=$_POST['eContactno'];
        $dEmailid=$_POST['eGmail'];
        $dPrice=$_POST['eStaPrice'];
        $dAdvAMT =$_POST['eAdvamount'];
        $delete="Delete from faraskhana where Faraskhanacode like '%$dfar_code%'";
        if(mysql_query($delete,$con))
        {
             echo  "<br><script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='FaraskhanaDelete.php'
 </script>";
            
        }
        
    }
    mysql_close($con);
}

?>