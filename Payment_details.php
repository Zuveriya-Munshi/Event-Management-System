<?php
if(isset($_POST['submit']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "<br>Connection Successfull<br>";
    
    mysql_select_db("project");
    $bookID=$_POST['BID'];
    echo "Booking Id : ".$bookID;
    
    
    $sql="Select Bookingdate,Faraskhana,Soundsys,Lighting,Instrumentstatus from booking where Bookingid=$bookID";
    $query1=mysql_query($sql,$con);
    while($rs=mysql_fetch_assoc($query1))
    {
        $BookDate=$rs['Bookingdate'];
        $Faraskhana=$rs['Faraskhana'];
        $Soundsys=$rs['Soundsys'];
        $Lighting=$rs['Lighting'];
        $Instrumentstatus=$rs['Instrumentstatus'];
        echo "<br>Faraskhana Details <br>".$Faraskhana."<br>Lighting Details <br>".$Lighting."<br>Soundsys Details<br>".$Soundsys."<br>Instrument Status<br>".$Instrumentstatus."<br>";
    }
    
    $Famtdate=$_POST['FarskhanaDate'];
    $Ffinpay=$_POST['Ffinalpay'];
    $Ffindate=$_POST['Farskhanafdate'];
    if($BookDate > $Ffindate)
    {
        echo "<script>";
       echo "alert(' Date of payment is not allowed')";
       echo "<a href='Payment_details.htm' >Back</a>";
        echo "</script>";
    }
    
    $Samtdate=$_POST['SoundDate'];
    $Sfinpay=$_POST['Sfinalpay'];
    $Sfindate=$_POST['Soundfdate'];
    if($BookDate > $Sfindate)
    {
        echo "<script>";
       echo "alert(' Date of payment is not allowed')";
       echo "<a href='Payment_details.htm' >Back</a>";
        echo "</script>";
    }
    
    $Lamtdate=$_POST['LightDate'];
    $Lfinpay=$_POST['Lfinalpay'];
    $Lfindate=$_POST['Lightingfdate'];
    if($BookDate > $Lfindate)
    {
        echo "<script>";
       echo "alert(' Date of payment is not allowed')";
       echo "<a href='Payment_details.htm' >Back</a>";
        echo "</script>";
    }
    
    $Iamtdate=$_POST['InstruDate'];
    $Ifinpay=$_POST['Ifinalpay'];
    $Ifindate=$_POST['Instrufdate'];
    if($BookDate > $Ifindate)
    {
        echo "<script>";
       echo "alert(' Date of payment is not allowed')";
       echo "<a href='Payment_details.htm' >Back</a>";
        echo "</script>";
    }
    

 }
}
?>


<?php
if(isset($_POST['submit']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "<br>Connection Successfull<br>";
    
    mysql_select_db("project");
    if($Faraskhana=="No")
    {
        $FFaraskhanaCode="";
        $FPrice=0;
        $FAdvanceamount=0;
    }
    
    else{
        $sql1="Select FaraskhanaCode,Price,Advanceamount from faraskhanarent where BookingID=$bookID";
    $query2=mysql_query($sql1,$con);
    
    while($rs1=mysql_fetch_assoc($query2))
    {
         $FFaraskhanaCode=$rs1['FaraskhanaCode'];
         $FPrice=$rs1['Price'];
         $FAdvanceamount=$rs1['Advanceamount'];
         echo "Fraskhana Price : ".$FPrice;
    }
   
    }
  }
}
?>

<?php
if(isset($_POST['submit']))
{
  
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "<br>Connection Successfull<br>";
    
    mysql_select_db("project");
    if($Soundsys=="No")
    {
        $SsoundsysCode="";
        $SPrice=0;
        $SAdvanceamount=0;
    }
    else{
    
        $sql8="Select soundsysCode,Price,Advanceamount from soundsyrent where BookingID=$bookID";
    $query6=mysql_query($sql8,$con);
    
    while($rs6=mysql_fetch_assoc($query6))
    {
         $SsoundsysCode=$rs6['soundsysCode'];
         $SPrice=$rs6['Price'];
         $SAdvanceamount=$rs6['Advanceamount'];
         echo "Sound system Price : ".$SPrice;
      
    
    }
    }
}}
?>

<?php
if(isset($_POST['submit']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "<br>Connection Successfull<br>";
    
    mysql_select_db("project");
   if($Lighting=="No")
   {
      $LPatterncode="";
      $LPrice=0;
      $LAdvanceamount=0;
   }
   else{
    $sql3="Select PatternCode,Price,Advanceamount from lightingrent where BookingID=$bookID";
    $query3=mysql_query($sql3,$con);
    
    while($rs3=mysql_fetch_assoc($query3))
    {
         $LPatterncode=$rs3['PatternCode'];
         $LPrice=$rs3['Price'];
         $LAdvanceamount=$rs3['Advanceamount'];
         echo "Lighting Price : ".$LPrice;
      
   
   }
   }
} }
?>



<?php
if(isset($_POST['submit']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "<br>Connection Successfull<br>";
    
    mysql_select_db("project");
    if($Instrumentstatus=="No")
    {
        $IInstrumentID="";
        $IPrice=0;
        $IAdvanceamount=0;
    }
    else{
            $sql6="Select InstrumentID,Charges,Advanceamount from instrumentrent where BookingID=$bookID";
    $query5=mysql_query($sql6,$con);
    
    while($rs5=mysql_fetch_assoc($query5))
    {
         $IInstrumentID=$rs5['InstrumentID'];
         $IPrice=$rs5['Charges'];
         $IAdvanceamount=$rs5['Advanceamount'];
         echo "Instrument Price : ".$IPrice;
          
    
    }
   }
  }
}     
?>
<?php
  
  if(isset($_POST['submit']))
{
    $con=mysql_connect("localhost","root","");
     $bookID=$_POST['BID'];
     mysql_select_db("project");
     $sql10="Select Bookingid from payment_details where Bookingid=$bookID";
     echo "ID : ".$bookID;
     $query10=mysql_query($sql10,$con);
    
    while($rs=mysql_fetch_assoc($query10))
    {
        $PBookID=$rs['Bookingid'];
        echo "<br/>Booking ID : ".$PBookID;
     }
     if($bookID == $PBookID)
     {
        echo "<script>
        alert('Payment is already Booked Please check')
        window.location.href='payment_details.htm';
        </script>";
        
        
        
     }

 
         else if( $Ffindate < $BookDate)
         { 
            echo "<script>
        confirm('Please check date of final payments')
        window.location.href='payment_details.htm';
        </script>";
        }
        else if($Sfindate < $BookDate)
        {
                echo "<script>
        confirm('Please check date of final payments')
        window.location.href='payment_details.htm';
        </script>";
        }
        else if($Lfindate < $BookDate)
        {
                echo "<script>
        confirm('Please check date of final payments')
        window.location.href='payment_details.htm';
        </script>";
        }
        else if($Ifindate < $BookDate)
        {
                    echo "<script>
        confirm('Please check date of final payments')
        window.location.href='payment_details.htm';
        </script>";
        }
        else
        {
    
          $que="insert into payment_details values(PaymentID,$bookID,'$IInstrumentID',$IPrice,$IAdvanceamount,'$Iamtdate',$Ifinpay,'$Ifindate','$FFaraskhanaCode',$FPrice,$FAdvanceamount,'$Famtdate',$Ffinpay,'$Ffindate','$LPatterncode',$LPrice,$LAdvanceamount,'$Lamtdate',$Lfinpay,'$Lfindate','$SsoundsysCode',$SPrice,$SAdvanceamount,'$Samtdate',$Sfinpay,'$Sfindate')";
          if(mysql_query($que,$con))
          {
            echo "<script>
            alert('Payment Succesfull!')
            window.location.href='payment_details.htm';
            </script>";
   
      
          }
     
     }
     mysql_close($con);
}

?>