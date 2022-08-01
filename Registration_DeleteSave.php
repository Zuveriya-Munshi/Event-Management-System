<?php
  if(isset($_POST['delete']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
        
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
      if(mysql_query($update,$con))
      {
        echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='Registration_Delete.php'
 </script>";  

       
      }
    
    }
    mysql_close($con);
  }
 
?>