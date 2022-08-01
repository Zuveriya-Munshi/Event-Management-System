<?php
 if(isset($_POST['delete']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "Connection Successful...!!!";
        mysql_select_db("project",$con);
        
        $stransportid=$_POST['dTRANSID'];
        echo $stransportid;
        $svehicleno=$_POST['dVNO'];
        $svehicletype=$_POST['dVTYPE'];
        $sdrivernm=$_POST['dDNAME'];
        $scontactno=$_POST['dContactNo'];
        $semail=$_POST['dMailId'];
        $scharges=$_POST['dCHARGE']; 
        
         echo $scontactno,$scharges;    
        $update="delete from transportermaster where Transporterid like '%$stransportid%'";
      if(mysql_query($update,$con))
      {
        echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully!')
 window.location.href='TransporterMaster_Delete.php'
 </script>";  

        
      }
      
    
    }
    mysql_close($con);
  }


  

?>