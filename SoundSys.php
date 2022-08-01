<?php

 if(isset($_POST['Submit']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "Connection is successfull!";
    }
    mysql_select_db("project");
    $psysCode=$_POST['sysCode'];
    $pdescription=$_POST['description'];
    $pvendorCode=$_POST['vendorCode'];
    $pName=$_POST['Name'];
    $pmobNo=$_POST['mobNo'];
    $pemail=$_POST['email'];
    $pprice=$_POST['price'];
    $padvAmt=$_POST['advAmt'];
    $ins="insert into soundsystem values('$psysCode','$pdescription','$pvendorCode','$pName',$pmobNo,'$pemail',$pprice,$padvAmt)";
   
    if(mysql_query($ins,$con))
    {
        echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='SoundSys.htm'
 </script>";  

       
    }
    else
    {
      echo  "<script type='text/javascript'>
    alert('Error!')
 window.location.href='SoundSys.htm'
 </script>";  

    }
 mysql_close($con);
 }

?>