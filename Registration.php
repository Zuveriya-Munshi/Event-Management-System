<?php
   if(isset($_POST['Submit']))
   {
     $con=mysql_connect("localhost","root","");
     if($con)
     {
        echo "Connection is Successful!";
     }
     else
     {
        echo "Connection is fail!";
     }
     
     mysql_select_db("project");
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
     
     if(mysql_query($ins,$con))
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
     mysql_close($con);
   }

?>