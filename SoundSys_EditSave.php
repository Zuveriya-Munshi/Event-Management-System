<?php

 if(isset($_POST['Submit']))
 {
    $con=mysqli_connect("localhost","root","");
    if($con)
    echo "Connection Success"."</br>";
    {
        mysqli_select_db($con,"project");
        $ssysCode=$_POST['dsysCode'];
        $sdescription=$_POST['ddescription'];
        $svendorCode=$_POST['dvendorCode'];
        $sName=$_POST['dName'];
        $smobNo=$_POST['dmobNo'];
        $semail=$_POST['demail'];
        $sprice=$_POST['dprice'];
        $sadvAmt=$_POST['dadvAmt'];
        
        $update="Update soundsystem Set Description='$sdescription',Vendor_Code='$svendorCode',Name='$sName',Mobile=$smobNo,Email='$semail',Price=$sprice,AdvAmt=$sadvAmt where Sys_Code ='$ssysCode'";
      if(mysqli_query($con,$update))
      {
        echo  "<script type='text/javascript'>
    alert('Record Updated Successfully!')
 window.location.href='SoundSys_Edit.php'
 </script>";  

       
      }
      
      else
      {
        echo  "<script type='text/javascript'>
    alert('Updation fails...')
 window.location.href='SoundSys_Edit.php'
 </script>"; 
       
      }
    }
    
    mysqli_close($con);
  }
 
?>