<?php
  if(isset($_POST['Delete']))
  {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        $sSoundSysCode=$_POST['soundSysCode'];
        $sDesc=$_POST['desc'];
        $sBookID=$_POST['bookID'];
        $sEventID=$_POST['eID'];
        $sVendorCode=$_POST['vendorCode'];
        $sClientNM=$_POST['cName'];
        $sClientAdd=$_POST['cAddress'];
        $sClientMobNo=$_POST['cMobNo'];
        $sClinetEmail=$_POST['cEmail'];
        $sDateFrom=$_POST['dateFrom'];
        $sDateTo=$_POST['dateTo'];
        $sPrice=$_POST['Price'];
        $sAdvAmt=$_POST['advAmt'];
        
        
        
        $update="Delete from soundsyrent where BookingID like '%$sBookID%'";
      if(mysqli_query($con,$update))
      {
        echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='SoundSysRent_Delete.php'
 </script>";  

      }
    
    }
    mysqli_close($con);
  }
  

?>