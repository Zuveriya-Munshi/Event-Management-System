<?php

if(isset ($_POST['delete']))
{
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $did=$_POST['eSTAFFID'];
        $dstaffname=$_POST['eSTAFFNM'];
        $dgender=$_POST['eGender'];
        $dskill=$_POST['eSKILL'];
        $daddress=$_POST['eAddr'];
        $dstafftype=$_POST['eSTYPE'];
        $dstaffcontact=$_POST['eConNum'];
        $dstaffemail =$_POST['eMAILID'];
        $delete="Delete from staffmaster where Id like '%$did%'";
        if(mysqli_query($con,$delete))
        {
            echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='Staff_MasterDelete.php'
 </script>";  

           
        }
        
    }
    mysqli_close($con);
}



?>