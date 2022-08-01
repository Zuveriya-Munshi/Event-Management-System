<?php

 if(isset($_POST['Submit']))
 {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        echo "Connection is successfull!";
    }
    mysqli_select_db($con,"project");
    $psysCode=$_POST['sysCode'];
    $pdescription=$_POST['description'];
    $pvendorCode=$_POST['vendorCode'];
    $pName=$_POST['Name'];
    $pmobNo=$_POST['mobNo'];
    $pemail=$_POST['email'];
    $pprice=$_POST['price'];
    $padvAmt=$_POST['advAmt'];
    $ins="insert into soundsystem values('$psysCode','$pdescription','$pvendorCode','$pName',$pmobNo,'$pemail',$pprice,$padvAmt)";
   
    if(mysqli_query($con,$ins))
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
 mysqli_close($con);
 }

?>