<?php
  if(isset($_POST['Delete']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
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
      if(mysql_query($update,$con))
      {
          echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='InstrumentRent_Delete.php'
 </script>";  
          
       
      }
    
    }
    mysql_close($con);
  }
 

?>