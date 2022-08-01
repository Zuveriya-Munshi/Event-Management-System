<?php
  if(isset($_POST['Delete']))
  {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        $sInstrumentID=$_POST['instrumentID'];
        $sInstrumenname=$_POST['instrumenname'];
        $sBookID=$_POST['bookID'];
        $sEventID=$_POST['eID'];
        $sIClientname=$_POST['iClientname'];
        $sIClientaddress=$_POST['iClientaddress'];
        $sIClientmobileno=$_POST['iClientmobileno'];
        $sIClientemail=$_POST['iClientemail'];
        $sIDatefrom=$_POST['iDatefrom'];
        $sIDateto=$_POST['iDateto'];
        $sCharges=$_POST['charges'];
        $sAdvanceAmount=$_POST['AdvanceAmount'];
        
        
        $update="Delete from instrumentrent where BookingID like '%$sBookID%'";
      if(mysqli_query($con,$update))
      {
          echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='InstrumentRent_Delete.php'
 </script>";  
          
       
      }
    
    }
    mysqli_close($con);
  }
 

?>