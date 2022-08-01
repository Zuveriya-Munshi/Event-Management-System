<?php
if(isset ($_POST['save']))
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
        $update="Update staffmaster Set Name='$dstaffname',Gender='$dgender',Skill='$dskill',Address='$daddress',Stafftype='$dstafftype',Contactno=$dstaffcontact,Emailid='$dstaffemail' where Id like '%$did%'";
        if(mysqli_query($con,$update))
        {
            echo  "<script type='text/javascript'>
    alert('Record Updated Successfully!')
 window.location.href='Staff_MasterEdit.php'
 </script>";  
        }
        
    }
    mysqli_close($con);
}


?>