<?php
  if(isset($_POST['delete']))
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
        
        $update="delete from eventmaster where Eventid like '%$sEventid%'";
      if(mysqli_query($con,$update))
      {
        echo  "<script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='EventMaster_Delete.php'
 </script>";
      }
    
    }
    mysqli_close($con);
  }


?>