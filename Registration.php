<?php
   if(isset($_POST['Submit']))
   {
     $con=mysqli_connect("localhost","root","");
     if($con)
     {
        echo "Connection is Successful!";
     }
     else
     {
        echo "Connection is fail!";
     }
     
     mysqli_select_db($con,"project");
     $eUTYPE=$_POST['UTYPE'];
     $eUCAT=$_POST['UCAT'];
     $eUNAME=$_POST['UNAME'];
     $eUPASS=$_POST['UPASS'];
     $eEMAIL=$_POST['EMAIL'];
     $eFNAME=$_POST['FNAME'];
     $eADDRESS=$_POST['ADDRESS'];
     $eMOBNO=$_POST['MOBNO'];
     $eSECQUE=$_POST['SECQUE'];
     $eSECANS=$_POST['SECANS'];
     echo $eUTYPE;
     
       $ins="Insert into registration values ('$eUTYPE','$eUCAT','$eUNAME','$eUPASS','$eEMAIL','$eFNAME','$eADDRESS',$eMOBNO,'$eSECQUE','$eSECANS')";
     
     if(mysqli_query($con,$ins))
     {
     echo  "<script type='text/javascript'>
    alert('Registred Successfully!')
 window.location.href='Registration.htm'
 </script>";  

     }
     else
     {
        echo  "<script type='text/javascript'>
    alert('Error')
 window.location.href='Registration.htm'
 </script>";  

        
     }
     mysqli_close($con);
   }

?>