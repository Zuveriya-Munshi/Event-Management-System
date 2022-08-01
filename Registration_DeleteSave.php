<?php
  if(isset($_POST['delete']))
  {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $sUTYPE=$_POST['dUTYPE'];
        $sUCAT=$_POST['dUCAT'];
        $sUNAME=$_POST['dUNAME'];
        $sUPASS=$_POST['dUPASS'];
        $sEMAIL=$_POST['dEMAIL'];
        $sFNAME=$_POST['dFNAME'];
        $sADDRESS=$_POST['dADDRESS'];
        $sMOBNO=$_POST['dMOBNO'];
        $sSECQUE=$_POST['dSECQUE'];
        $sSECANS=$_POST['dSECANS'];
        
        $update="delete from registration where Username like '%$sUNAME%'";
      if(mysqli_query($con,$update))
      {
        echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='Registration_Delete.php'
 </script>";  

       
      }
    
    }
    mysqli_close($con);
  }
 
?>