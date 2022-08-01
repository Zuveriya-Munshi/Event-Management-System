<?php
  if(isset($_POST['Submit']))
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
        
        $update="Update registration Set Usertype='$sUTYPE',Usercat='$sUCAT',Password='$sUPASS',Emailid='$sEMAIL',Fullname='$sFNAME',Addr='$sADDRESS',Mobileno=$sMOBNO,SecQuetion='$sSECQUE',SecAnswer='$sSECANS' where Username like '%$sUNAME%'";
      if(mysql_query($update,$con))
      {
        echo  "<script type='text/javascript'>
    alert('Record Updated Successfully!')
 window.location.href='Registration_Edit.php'
 </script>";  

       
      }
    
    }
    mysql_close($con);
  }

?>