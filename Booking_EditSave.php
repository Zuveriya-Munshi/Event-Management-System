<?php
  if(isset($_POST['Submit']))
  {
    $con=mysqli_connect("localhost","root","");
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    if($con)
    {
        mysqli_select_db($con,"project");
        $sBookID=$_POST['BookID'];
        $sBookDate=$_POST['BookDate'];
        $sEventid=$_POST['EventID'];
        $sEventnm=$_POST['EventNM'];
        $sEventDate=$_POST['EventDate'];
        $sPerformernm=$_POST['pName'];
        $sclientNM=$_POST['cName'];
        $sclientAdd=$_POST['cAddress'];
        $sclientPhn=$_POST['cPhone'];
        $sclinetEmail=$_POST['cEmail'];
        $sFaraskhana=$_POST['faraskhana'];
        $sfaraskhanaCode=$_POST['faraskhanaCode'];
        $sSoundsys=$_POST['sound'];
        $sSoundsysCode=$_POST['soundSysCode'];
        $sLighting=$_POST['light'];
        $sPattCode=$_POST['PattCode'];
        $svenue=$_POST['venue'];
        $sstartTime=$_POST['sTime'];
        $sendTime=$_POST['eTime'];
        $spolicePermission=$_POST['policePermissiom'];
        $sInsStatus=$_POST['iStatus'];
        $sinstrID=$_POST['instrID'];
        $sadvAmt=$_POST['advAmt'];
        
        
        
      $update="Update booking Set Bookingdate='$sBookDate',EventID=$sEventid,Eventname='$sEventnm',Eventdate='$sEventDate',Performername='$sPerformernm',Clientname='$sclientNM',Clientaddress='$sclientAdd',Clientphone=$sclientPhn,Clientmail='$sclinetEmail',Faraskhana='$sFaraskhana',FaraskhanaCode='$sfaraskhanaCode',Soundsys='$sSoundsys',Lighting='$sLighting',Venue='$svenue',Starttime='$sstartTime',Endtime='$sendTime',Permissionstatus='$spolicePermission',Instrumentstatus='$sInsStatus',Advanceamount=$sadvAmt where Bookingid like '%$sBookID%'";
      if(mysqli_query($con,$update))
      {
        echo  "<script type='text/javascript'>
        alert('Record Updated Successfully')
        window.location.href='Booking_Edit.php'
        </script>";  

      }
    
    }
    mysqli_close($con);
  }
?>