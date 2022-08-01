<?php
  if(isset($_POST['Submit']))
  {
    $con=mysqli_connect("localhost","root","");
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    if($con)
    {
        mysqli_select_db($con,"project");
        
        $sEventid=$_POST['eid'];
        $sEventnm=$_POST['enm'];
        $sEventtype=$_POST['etype'];
        $sPerformernm=$_POST['pname'];
        $sInstrument=$_POST['instrument'];
        $sFaraskhana=$_POST['faraskhana'];
        $sSoundsys=$_POST['sound'];
        $sLighting=$_POST['light'];
        $sNoofStaff=$_POST['staff'];
        $sEventcharge=$_POST['echarge'];
        $sAdvanceAmount=$_POST['amount'];
        
        $update="Update eventmaster Set Eventname='$sEventnm',Eventtype='$sEventtype',Performername='$sPerformernm',Instrunment='$sInstrument',Faraskhana='$sFaraskhana',Soundsys='$sSoundsys',Lighting='$sLighting',Noofstaff=$sNoofStaff,Eventcharges=$sEventcharge,Advanceamount=$sAdvanceAmount where Eventid like '%$sEventid%'";
      if(mysqli_query($con,$update))
      {
        echo  "<script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='EventMaster_Edit.php'
 </script>";
      }
    
    }
    mysqli_close($con);
  }


?>