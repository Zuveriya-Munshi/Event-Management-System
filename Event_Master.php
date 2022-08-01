<?php
  
  if(isset($_POST['SUBMIT']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "Connection Successful!"."<br/>";
    }
    
    mysql_select_db("project");
    $eventId=$_POST['EID'];
    $eventName=$_POST['ENAME'];
    $eventType=$_POST['ETYPE'];
    $performer=$_POST['PNAME'];
    $Instrument=$_POST['INSTRUMENT'];
    $Faraskhana=$_POST['FARASKHANA'];
    $SoundSys=$_POST['SOUND'];
    $Lighting=$_POST['LIGHT'];
    $NoOfStaff=$_POST['NOSTAFF'];
    $EventCharges=$_POST['ECHARGE'];
    $AdvanceAmt=$_POST['AMOUT'];
    
    $ins="insert into eventmaster values($eventId,'$eventName','$eventType','$performer','$Instrument','$Faraskhana','$SoundSys','$Lighting',$NoOfStaff,$EventCharges,$AdvanceAmt)";
    
    if(mysql_query($ins,$con))
    {
        echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Event_Master.htm'
 </script>";  

        
    
    }
    else
    {
        echo  "<script type='text/javascript'>
    alert('ERROR!!')
 window.location.href='Event_Master.htm'
 </script>";
    }
    
    mysql_close($con);
  }



?>