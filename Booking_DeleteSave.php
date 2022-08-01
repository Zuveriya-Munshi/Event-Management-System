<?php
  if(isset($_POST['Delete']))
  {
    $con=mysql_connect("localhost","root","");
    echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
    if($con)
    {
        mysql_select_db("project",$con);
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
        $sFaraskhanaCode=$_POST['faraskhanaCode'];
        $sSoundsys=$_POST['sound'];
        $sLighting=$_POST['light'];
        $svenue=$_POST['venue'];
        $sstartTime=$_POST['sTime'];
        $sendTime=$_POST['eTime'];
        $spolicePermission=$_POST['policePermission'];
        $sInsStatus=$_POST['iStatus'];
        $sadvAmt=$_POST['advAmt'];
        
        
        
        $update="Delete from booking where Bookingid like '%$sBookID%'";
      if(mysql_query($update,$con))
      {
        echo  "<script type='text/javascript'>
        alert('Record Deleted Successfully')
        window.location.href='Booking_Delete.php'
        </script>"; 
       
      }
    
    }
    mysql_close($con);
  }
  

?>