<?php
  if(isset($_POST['submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "Connection is Successfull"."<br/>";
    }
    mysql_select_db("project");
    $pTRANSID=$_POST['TRANSID'];
    $pVNO=$_POST['VNO'];
    $pVTYPE=$_POST['VTYPE'];
    $pDNAME=$_POST['DNAME'];
    $pContactNo=$_POST['ContactNo'];
    $pMailId=$_POST['MailId'];
    $pCHARGE=$_POST['CHARGE'];
    
    $ins="insert into transportermaster values('$pTRANSID','$pVNO','$pVTYPE','$pDNAME',$pContactNo,'$pMailId',$pCHARGE)";
    
    if(mysql_query($ins,$con))
    {
        
            echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Transporter_Master.htm'
 </script>";
   
    
    }
    else
    {
echo  "<script type='text/javascript'>
    alert('Record not inserted')
 window.location.href='Transporter_Master.htm'
 </script>";
       
    }
    
    mysql_close($con);
  }

?>