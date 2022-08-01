<?php
  session_start();
  if(isset($_POST['Submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
      echo "<br>Connection is success"."</br>";
    }
    else
    {
      echo "Connection Fails"."</br>";
    }

    
    mysql_select_db("project");
    $Eid=$_POST['EventID'];
    echo "<br>".$Eid;
    $sql1="Select Eventname,Performername,Instrunment,Faraskhana,Soundsys,Lighting,Advanceamount from eventmaster where Eventid='$Eid'";
    $query1=mysql_query($sql1,$con);
    while($rs = mysql_fetch_assoc($query1))
    {
         
      $REventnm=$rs['Eventname'];
      $REperformernm=$rs['Performername'];
      $REInstrument=$rs['Instrunment'];
      $REfaraskhana=$rs['Faraskhana'];
      $RESoundsys=$rs['Soundsys'];
      $RElighting=$rs['Lighting'];
      $REadvancepayment=$rs['Advanceamount'];
     echo "<br>Event Master Details <br> Event Name : ".$REventnm."<br> Performer Name : ".$REperformernm."<br> Instrument Status : ".$REInstrument."<br> Faraskhana Status : ".$REfaraskhana."<br> Sound systen Status : ".$RESoundsys."<br> Lighting Status : ".$RElighting."<br>";
     
    }
}
mysql_close($con);
?>

<?php  

if(isset($_POST['Submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
      echo "<br>Connection is success";
    }
    else
    {
      echo "<br>Connection Fails";
    }

    
    mysql_select_db("project");
           $BID=$_POST['bookingID'];
           $BDATE=$_POST['date'];
           $BEID=$_POST['EventID'];
           $BEDATE=$_POST['eventDate'];
           $BCNM=$_POST['clientName'];
           $BCADD=$_POST['clientAddress'];
           $BCPHNO=$_POST['clientPhone'];
           $BCEMAIL=$_POST['clientEmail'];
           $BFARASKHANA=$_POST['faraskhana'];
           $BFARASKHANACODE=$_POST['faraskhanaCode'];
           $BSOUNDSYS=$_POST['soundsys'];
           $BSOUNDSYSCODE=$_POST['SoundSystemCode'];
           $BLIGHTING=$_POST['lighting'];
           $BPATTERNCODE=$_POST['patternCode']; 
           $BVENUE=$_POST['venue'];
           $BSTART=$_POST['startTime'];
           $BEND=$_POST['endTime'];
           $BPERMISSION=$_POST['policePermission'];
           $BINSTRUMENT=$_POST['Instrumentstatus'];
           $BINSTUMENTID=$_POST['InstruID'];
           echo "<br> BFARASKHANA CODE : ".$BFARASKHANACODE."<br> BSOUNDSYS : ".$BSOUNDSYS."<br> BLIGHTING : ".$BLIGHTING."<br> BINSTRUMENT : ".$BINSTRUMENT."<br>";
     
            
          if($BFARASKHANA=="Yes")
          {
 
             $sql2="Select FaraskhanaCode,Description,Vendorcode,Price,Advanceamount from faraskhana where FaraskhanaCode='$BFARASKHANACODE'";
             $query2=mysql_query($sql2,$con);
             while($rs1 = mysql_fetch_assoc($query2))
             {
         
                $RFDescription=$rs1['Description'];
                $RFVendorcode=$rs1['Vendorcode'];
                $RFPrice=$rs1['Price'];
                $RFAdvanceamount=$rs1['Advanceamount'];

                echo "<br>Faraskhana Details <br>".$RFDescription."<br>".$RFVendorcode."<br>".$RFPrice."<br>".$RFAdvanceamount."<br>";
               
             }
             $sql3="insert into faraskhanarent values('$BFARASKHANACODE','$RFDescription',$BID,$BEID,'$RFVendorcode','$BCNM','$BCADD',$BCPHNO,'$BCEMAIL','$BEDATE','$BEDATE',$RFPrice,$RFAdvanceamount)";
             if(mysql_query($sql3,$con))
             {
                echo  "<br><script type='text/javascript'>
    alert('Record inserted successfully in Faraskhana rent table')
 </script>";
             }
             else
             {
                 echo  "<br><script type='text/javascript'>
    alert('Not required to insert in Faraskhana rent table')
 </script>";
             }
           }
  }         
  mysql_close($con);
?> 
          
<?php
 if(isset($_POST['Submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
      echo "<br>Connection is success";
    }
    else
    {
      echo "<br>Connection Fails";
    }

    
    mysql_select_db("project");

           if($BSOUNDSYS=="Yes")
           {
             $sql4="Select Description,Vendor_Code,Price,AdvAmt from soundsystem where Sys_Code	='$BSOUNDSYSCODE'";
             $query3=mysql_query($sql4,$con);
             while($rs2 = mysql_fetch_assoc($query3))
             {
         
                $RSDescription=$rs2['Description'];
                $RSVendorcode=$rs2['Vendor_Code'];
                $RSPrice=$rs2['Price'];
                $RSAdvanceamount=$rs2['AdvAmt'];

                echo "<br>Sound system Details <br>".$RSDescription."<br>".$RSVendorcode."<br>".$RSPrice."<br>".$RSAdvanceamount."<br>";
               
             }
            
             $sql5="insert into soundsyrent values('$BSOUNDSYSCODE','$RSDescription',$BID,$BEID,'$RSVendorcode','$BCNM','$BCADD',$BCPHNO,'$BCEMAIL','$BEDATE','$BEDATE',$RSPrice,$RSAdvanceamount)";
             if(mysql_query($sql5,$con))
             {
                 echo  "<br><script type='text/javascript'>
    alert('Record inserted successfully in Sound system rent table')
 </script>";
                
             }
             else
             {
                echo  "<br><script type='text/javascript'>
    alert('Not required to insert in Sound system rent table')
 </script>";
             
             }
           }
}
mysql_close($con);
?>

<?php
 if(isset($_POST['Submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
      echo "<br>Connection is success";
    }
    else
    {
      echo "<br>Connection Fails";
    }

    
    mysql_select_db("project");

           if($BLIGHTING=="Yes")
           {
             $sql6="Select Description,Vendorcode,Price,Advanceamount from lighting where Patterncode='$BPATTERNCODE'";
             $query4=mysql_query($sql6,$con);
             while($rs3= mysql_fetch_assoc($query4))
             {
         
                $RLDescription=$rs3['Description'];
                $RLVendorcode=$rs3['Vendorcode'];
                $RLPrice=$rs3['Price'];
                $RLAdvanceamount=$rs3['Advanceamount'];

                echo "<br>Lightind Details <br>".$RLDescription."<br>".$RLVendorcode."<br>".$RLPrice."<br>".$RLAdvanceamount."<br>";
               
             }
             $sql7="insert into lightingrent values('$BPATTERNCODE','$RLDescription',$BID,$BEID,'$RLVendorcode','$BCNM','$BCADD',$BCPHNO,'$BCEMAIL','$BEDATE','$BEDATE',$RLPrice,$RLAdvanceamount)";
             if(mysql_query($sql7,$con))
             {
                 echo  "<br><script type='text/javascript'>
    alert('Record inserted successfully in Lighting rent table')
 </script>";
             }
             else
             {
                echo  "<br><script type='text/javascript'>
    alert('Not required to insert in Lighting rent table')
 </script>";
             }
           }
 }
 mysql_close($con);
?>

 <?php
 
 if(isset($_POST['Submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
      echo "<br>Connection is success";
    }
    else
    {
      echo "<br>Connection Fails";
    }

    
    mysql_select_db("project");
           if($BINSTRUMENT=="Yes")
           {
            
             $sql8="Select Description,Price,Advanceamount from instrunmentmaster where Id='$BINSTUMENTID'";
             $query5=mysql_query($sql8,$con);
             while($rs4 = mysql_fetch_assoc($query5))
             {
               
         
                $RIDescription=$rs4['Description'];
                $RIPrice=$rs4['Price'];
                $RIAdvanceamount=$rs4['Advanceamount'];

                echo "<br>Instrument Details <br>".$RIDescription."<br>".$RIPrice."<br>".$RIAdvanceamount."<br>";
               
             }
          
             $sql9="insert into instrumentrent values('$BINSTUMENTID','$RIDescription',$BID,$BEID,'$BCNM','$BCADD',$BCPHNO,'$BCEMAIL','$BEDATE','$BEDATE',$RIPrice,$RIAdvanceamount)";
             if(mysql_query($sql9,$con))
             {
                
                echo  "<br><script type='text/javascript'>
    alert('Record inserted successfully in Instrument rent table!')

 </script>";
                            }
             else
             {
                
                echo  "<br><script type='text/javascript'>
    alert('Not required to insert in Instrument rent table')

 </script>";
             
             }
          }
}
mysql_close($con);
?>

<?php

if(isset($_POST['Submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
      echo "<br>Connection is success";
    }
    else
    {
      echo "<br>Connection Fails";
    }

    
    mysql_select_db("project");
    $Eid=$_POST['EventID'];


$sql="insert into booking values($BID,'$BDATE',$BEID,'$REventnm','$BEDATE','$REperformernm','$BCNM','$BCADD',$BCPHNO,'$BCEMAIL','$BFARASKHANA','$BFARASKHANACODE','$BSOUNDSYS','$BSOUNDSYSCODE','$BLIGHTING','$BPATTERNCODE','$BVENUE','$BSTART','$BEND','$BPERMISSION','$BINSTRUMENT','$BINSTUMENTID',$REadvancepayment)";
if(mysql_query($sql,$con))
{
    echo  "<br><script type='text/javascript'>
    alert('Booking Successfull')
 window.location.href='booking.htm'
 </script>";



}

else
{
    
     echo  "<br><script type='text/javascript'>
    alert('Data Not Inserted')
 window.location.href='booking.htm'
 </script>";
    
}
}
mysql_close($con);

?>