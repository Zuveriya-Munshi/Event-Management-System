<?php

if(isset ($_POST['delete']))
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
        $delete="Delete from staffmaster where Id like '%$did%'";
        if(mysql_query($delete,$con))
        {
            echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='Staff_MasterDelete.php'
 </script>";  

           
        }
        
    }
    mysql_close($con);
}



?>