<?php
 if(isset($_POST['submit']))
  {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        echo "Connection Successful...!!!";
        mysqli_select_db($con,"project");
        
        $stransportid=$_POST['dTRANSID'];
        echo $stransportid;
        $svehicleno=$_POST['dVNO'];
        $svehicletype=$_POST['dVTYPE'];
        $sdrivernm=$_POST['dDNAME'];
        $scontactno=$_POST['dContactNo'];
        $semail=$_POST['dMailId'];
        $scharges=$_POST['dCHARGE']; 
        
         echo $scontactno,$scharges;    
        $update="Update transportermaster Set Vehicleno='$svehicleno',Vehicletype='$svehicletype',Drivername='$sdrivernm',Contactno=$scontactno,Email='$semail',Charges=$scharges where Transporterid like '%$stransportid%'";
      if(mysqli_query($con,$update))
      {
         echo  "<script type='text/javascript'>
    alert('Record Updated Successfully!')
 window.location.href='TransporterMaster_Edit.php'
 </script>";  
      
      }
      
    
    }
    mysqli_close($con);
  }
 

?>