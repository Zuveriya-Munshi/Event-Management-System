<?php
  if(isset($_POST['delete']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
        
        $ssysCode=$_POST['dsysCode'];
        $sdescription=$_POST['ddescription'];
        $svendorCode=$_POST['dvendorCode'];
        $sName=$_POST['dName'];
        $smobNo=$_POST['dmobNo'];
        $semail=$_POST['demail'];
        $sprice=$_POST['dprice'];
        $sadvAmt=$_POST['dadvAmt'];
        
        $update="delete from soundsystem where Sys_Code like '%$ssysCode%'";
      if(mysql_query($update,$con))
      {
        echo  "<script type='text/javascript'>
    alert('Record Deletesd Successfully!')
 window.location.href='SoundSys_Delete.php'
 </script>";  
       
      }
    
    }
   
    mysql_close($con);
  }
  

?>