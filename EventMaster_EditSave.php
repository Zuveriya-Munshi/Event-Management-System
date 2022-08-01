<?php
  if(isset($_POST['Submit']))
  {
    $con=mysql_connect("localhost","root","");
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    if($con)
    {
        mysql_select_db("project",$con);
        
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
      if(mysql_query($update,$con))
      {
        echo  "<script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='EventMaster_Edit.php'
 </script>";
      }
    
    }
    mysql_close($con);
  }


?>