<?php
if(isset ($_POST['save']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
        
        $did=$_POST['eSTAFFID'];
        $dstaffname=$_POST['eSTAFFNM'];
        $dgender=$_POST['eGender'];
        $dskill=$_POST['eSKILL'];
        $daddress=$_POST['eAddr'];
        $dstafftype=$_POST['eSTYPE'];
        $dstaffcontact=$_POST['eConNum'];
        $dstaffemail =$_POST['eMAILID'];
        $update="Update staffmaster Set Name='$dstaffname',Gender='$dgender',Skill='$dskill',Address='$daddress',Stafftype='$dstafftype',Contactno=$dstaffcontact,Emailid='$dstaffemail' where Id like '%$did%'";
        if(mysql_query($update,$con))
        {
            echo  "<script type='text/javascript'>
    alert('Record Updated Successfully!')
 window.location.href='Staff_MasterEdit.php'
 </script>";  
        }
        
    }
    mysql_close($con);
}


?>