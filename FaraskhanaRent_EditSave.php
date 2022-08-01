<?php
  if(isset($_POST['Submit']))
  {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"project");
        $sFaraskhanaCode=$_POST['faraskhanaCode'];
        $sDesc=$_POST['desc'];
        $sBookID=$_POST['bookID'];
        $sEventID=$_POST['eID'];
        $sVendorCode=$_POST['vendorCode'];
        $sClientNM=$_POST['cName'];
        $sClientAdd=$_POST['cAddress'];
        $sClientMobNo=$_POST['cMobNo'];
        $sClinetEmail=$_POST['cEmail'];
        $sDateFrom=$_POST['dateFrom'];
        $sDateTo=$_POST['dateTo'];
        $sPrice=$_POST['Price'];
        $sAdvAmt=$_POST['advAmt'];
        
        
        
        $update="Update faraskhanarent Set VendorCode='$sVendorCode',Description='$sDesc',FaraskhanaCode='$sFaraskhanaCode',EventID='$sEventID',ClientName='$sClientNM',ClientAddress='$sClientAdd',ClientMobNo=$sClientMobNo,ClientEmail='$sClinetEmail',DateFrom='$sDateFrom',DateTo='$sDateTo',Price=$sPrice,Advanceamount=$sAdvAmt where BookingID like '%$sBookID%'";
      if(mysqli_query($con,$update))
      {
         echo  "<br><script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='FaraskhanaRent_Edit.php'
 </script>";
      
      }
    
    }
    mysqli_close($con);
  }
  
?>