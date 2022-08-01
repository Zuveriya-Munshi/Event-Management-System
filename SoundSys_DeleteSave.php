<?php
  if(isset($_POST['delete']))
  {
    $con=mysqli_connect("localhost","root","");
    if($con)
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
        
        $update="delete from soundsystem where Sys_Code like '%$ssysCode%'";
      if(mysqli_query($con,$update))
      {
        echo  "<script type='text/javascript'>
    alert('Record Deletesd Successfully!')
 window.location.href='SoundSys_Delete.php'
 </script>";  
       
      }
    
    }
   
    mysqli_close($con);
  }
  

?>