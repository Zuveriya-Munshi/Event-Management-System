<?php
  if(isset($_POST['Delete']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("project",$con);
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
        
        
        
        $update="Delete from faraskhanarent where BookingID like '%$sBookID%'";
      if(mysql_query($update,$con))
      {
         echo  "<br><script type='text/javascript'>
    alert('Record Deleted Successfully')
 window.location.href='FaraskhanaRent_Delete.php'
 </script>";
            
      
      }
    
    }
    mysql_close($con);
  }
 

?>