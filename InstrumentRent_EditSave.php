<?php
  if(isset($_POST['Submit']))
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
        
        
        $update="Update instrumentrent Set Instrumenname='$sInstrumenname',InstrumentID='$sInstrumentID',EventID=$sEventID,Iclientname='$sIClientname',Iclientaddress='$sIClientaddress',Iclientmobileno=$sIClientmobileno,Iclientemail='$sIClientemail',IDatefrom=$sIDatefrom,IDateto='$sIDateto',Charges=$sCharges,Advanceamount=$sAdvanceAmount where BookingID = '$sBookID'";
      if(mysql_query($update,$con))
      {
        echo  "<script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='InstrumentRent_Edit.php'
 </script>";  
       
      }
    
    }
    mysql_close($con);
  }
  

?>